<?php
/**
 * Template Name: Homepage Slider
 * @package Snap
 */
?>
<?php get_header(); ?>
<script type="text/javascript">

function resizeSlider(element){
	var windowHeight = jQuery(window).height();
	jQuery(element).css({'height': windowHeight});
	jQuery('.homepage-button').css({'top': function(index, value){
		buttonHeight = jQuery('.homepage-button').outerHeight();
		return windowHeight - 2*buttonHeight;
	}})
}

jQuery(document).ready(function(){
	resizeSlider('.homepage-featured-area ');
});

jQuery(window).resize(function(){
	resizeSlider('.homepage-featured-area ');
});

</script>
<?php while( have_posts() ) : the_post(); global $post; ?>
	<?php $featured_area = new Snap_Homepage_Featured_Area(); ?>

	<?php if ( 'slider' === $featured_area->display_type_for_current_user ) : ?>
		<?php snap_add_responsive_slides_scripts(); ?>
	<?php endif;?>

	<?php if ( in_array( $featured_area->display_type_for_current_user, array( 'slider', 'image' ) ) ) : ?>
		<?php $slider_post_ids = ( current_user_can( 'edit_theme_options' ) ) ? $featured_area->all_possible_slider_posts : $featured_area->slider_posts_with_post_thumbnails; ?>
		<section class="homepage-featured-area frame">
			<ul class="homepage-featured-area<?php if ( 'slider' === $featured_area->display_type_for_current_user ) : ?> homepage-featured-area-slides<?php endif;?>">
				
				<?php foreach ( $slider_post_ids as $id ) : ?>
					<li>						
							<?php if ( ! $featured_area->post_is_this_page( $id ) ) : ?>
								<a href="<?php echo esc_url( get_permalink( $id ) ); ?>" title="<?php echo esc_attr( strip_tags( get_the_title( $id ) ) ); ?>">
							<?php endif; ?>
							<?php 
								//check if this post has a video in the custom field, if it does, check if it should be displayed in the slider, if it should, show the embed coe
							$videos = array();
							$video_embed = '';
							$videos['youtube_id'] = get_field('youtube_video_id', $id);
							$videos['vimeo_id'] = get_field('vimeo_video_id', $id);
							$videos['embed_code'] = get_field('video_embed_code', $id);
							if($videos['youtube_id'] != ''){
								$video_embed = '<iframe width="560" height="315" src="//www.youtube.com/embed/'.$videos['youtube_id'].'?enablejsapi=1 " frameborder="0" allowfullscreen></iframe>';
							}
							elseif($videos['vimeo_id'] != ''){

								$video_embed = '<iframe src="//player.vimeo.com/video/'.$videos['vimeo_id'].'" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
							}
							$show_video = get_field('show_video', $id);
							$video_size = get_field('video_size', $id);
							if($show_video != false){
							if($video_embed != '' && in_array('slider', $show_video)){
								echo '<div class="slider-vid fit-vid '.$video_size.'">'.$video_embed.'</div>';
							}}
							echo get_the_post_thumbnail( $id, 'full' ); 
							if ( ! $featured_area->post_is_this_page( $id ) ) : ?>
									<?php $button_text =  apply_filters( 'snap_button_text', get_theme_mod( 'button-text', __( 'View Project', 'snap' ) ), $id, get_the_ID() ); ?>
									<?php if ( '' !== $button_text ) : ?>
										<button class="homepage-button"><?php echo esc_html( $button_text ); ?></button>
									<?php endif; ?>
								</a>
							<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
			<div id="slider-nav"></div>
		</section>
		<div class="frame page-content hide-for-medium">
		<div id="blurb">
			<?php if ( empty( $post->post_content) && current_user_can( 'edit_page', get_the_ID() ) ) : ?>
				<div class="placeholder-text">
					<p>
						<?php
							printf(
								__(
									'<strong>Admin:</strong> Oh snap! It looks like you haven\'t added any content. You can add content in the <a href="%1$s" title="Edit %2$s">Edit Page</a> screen.',
									'snap'
								),
								esc_url( get_edit_post_link() ),
								the_title_attribute( array( 'echo' => false, ) )
							);
						?>
					</p>
				</div>
			<?php else : ?>
				<?php get_template_part( '_the-content' ); ?>
			<?php endif; ?>
		</div>
		<?php $homepage_selected_posts_query = new Snap_Homepage_Selected_Posts( get_the_ID() ); ?>
		<?php $selected_posts = $homepage_selected_posts_query->get_posts(); ?>
		<?php if ( $selected_posts->have_posts() ) : ?>
			<div class="with-sidebar tile homepage-posts-<?php echo esc_attr( $homepage_selected_posts_query->which_posts ); ?>">
				<?php while ( $selected_posts->have_posts() ) : $selected_posts->the_post(); ?>
					<?php get_template_part( '_post-content' ); ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		<?php elseif ( current_user_can( 'edit_page', get_the_ID() ) ) : ?>
			<div class="with-sidebar placeholder-text">
				<p>
					<?php
						printf(
							__(
								'<strong>Admin:</strong> Oh snap! It looks like you haven\'t added any posts yet. <a href="%s" title="Add post">Add your first post</a> now!',
								'snap'
							),
							esc_url( admin_url( 'post-new.php' ) )
						);
					?>
				</p>
			</div>
		<?php endif; ?>
	</div>
	<?php endif; ?>
<?php endwhile; ?>
<?php get_footer();