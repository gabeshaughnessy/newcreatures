<?php
/**
 * Template Name: Homepage Slider
 * @package Snap
 */
?>
<?php get_header(); 

//RESPONSIVE SLIDER OPTIONS
function mySliderOptions(){
  global $post; 
  $slider_auto = get_field('slider_auto', $post->ID);
  if(!isset($slider_auto)){
  	$slider_auto = "false";
  } 
  $slider_speed = get_field('slider_speed', $post->ID);
  if(!isset($slider_auto)){
  	$slider_speed = 1000;
  }
    $responsive_slides_options = array(
        'timeout' => $slider_speed,
        'auto' => $slider_auto,
        'nav'  => true,
        'pause' => true,
        'prevText'=> '&#171;',   // String: Text for the "previous" button
        'nextText' => '&#187;', 
        'navContainer' => '#slider-nav', 
      
    );
    return $responsive_slides_options;
}
$responsive_slides_options = add_filter( 'responsive_slides_options', 'mySliderOptions', 10,1);
?>
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
                <li class="intro-slide">
                    <?php if ( ! $featured_area->post_is_this_page( $post->ID ) ) : ?>
                            <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" title="<?php echo esc_attr( strip_tags( get_the_title( $post->ID ) ) ); ?>">
                    <?php endif; ?>
                    <?php
                    $icons = array();
                    $icons[] = get_bloginfo('stylesheet_directory').'/images/home-page-icon_01.png';
                    $icons[] = get_bloginfo('stylesheet_directory').'/images/home-page-icon_02.png';
                    $icons[] = get_bloginfo('stylesheet_directory').'/images/home-page-icon_03.png';

                    echo '<img class="home-page-icon icon-0" src="'.$icons[0].'" width="20%" height="auto" />';
                    echo '<img class="home-page-icon icon-1" src="'.$icons[1].'" width="24%" height="auto" />';
                    echo '<img class="home-page-icon icon-2" src="'.$icons[2].'" width="25%" height="auto" />';
                    echo '<a href=" rslides_nav rslides2_nav next" class="explore rslides2_nav next button">Enter &#8669;</a>';
                    
                    //$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                    //echo '<img class="home-page-icon" src="'.$image_url[0].'" width="100%" height="auto" />.';
                    // echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
					
					<?php 
					//display the page content 
						if(get_the_content($post->ID) != ''){
							echo '<div class="intro-content">'.get_the_content($post->ID).'</div>';
						}
					?>

                    <?php if ( ! $featured_area->post_is_this_page( $post->ID ) ) : ?>
                                    <?php $button_text =  apply_filters( 'snap_button_text', get_theme_mod( 'button-text', __( 'View Project', 'snap' ) ), $post->ID, get_the_ID() ); ?>
                                    <?php if ( '' !== $button_text ) : ?>
                                            <button class="homepage-button"><?php echo esc_html( $button_text ); ?></button>
                                    <?php endif; ?>
                            </a>
                    <?php endif; ?>
                </li>
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
							if($video_embed != '' && in_array('slider', $show_video) && $video_size == 'centered' ){
								echo '<div class="slider-vid fit-vid '.$video_size.'">'.$video_embed.'</div>';
							}}
							echo get_the_post_thumbnail( $id, 'full' ); 
							if ( ! $featured_area->post_is_this_page( $id ) ) : ?>
									<?php/* $button_text =  apply_filters( 'snap_button_text', get_theme_mod( 'button-text', __( 'View Project', 'snap' ) ), $id, get_the_ID() ); ?>
									<?php if ( '' !== $button_text ) : ?>
										<button class="homepage-button"><?php echo esc_html( $button_text ); ?></button>
									<?php endif; */?>
									<?php
									//set up the title and description with a permalink
									$headline_color = get_field('portfolio_headline_color', $id);
									if(!isset($headline_color)){
										$headline_color = "#eeeeee";
									}
									$details_bg = get_field('post_details_background', $id);
									if(!isset($details_bg)){
										$details_bg = "";
									}
									echo '<a class="learn-more" href="'.get_permalink($id).'"><div class="post-details" style="background:'.$details_bg.'" >';
									$headline = get_field('portfolio_headline', $id);
									if(empty($headline)){
										$headline = get_the_title($id);
									}
									echo '<h2 class="post-title" style="color:'.$headline_color.'">'.$headline.'</h2>';

									
									$tagline = get_field('portfolio_tagline', $id);
									if(!empty($tagline)){
										echo '<p class="post-description" style="color:'.$headline_color.'">'.$tagline.'</p>';
									}
									echo '</div></a>';
									?>
								</a>
							<?php endif; ?>
					</li>
					<?php
						if($video_embed != '' && in_array('slider', $show_video) && $video_size == 'full-width' ){
								echo '<li><a href="'.get_permalink($id).'"><div class="slider-vid fit-vid '.$video_size.'">'.$video_embed.'</div></a></li>';
							}
					?>
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