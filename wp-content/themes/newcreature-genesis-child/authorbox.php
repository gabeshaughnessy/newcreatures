<div id="block6" class="section author">
<h2 class="section_title">Team</h2>
<?php // the grid of profiles
add_action('genesis_before_post', 'format_elements');
function format_elements() {
	global $post;
	remove_action('genesis_before_post_content', 'genesis_post_info');
	};

$args =	array('post_type' => 'post', 'cat' => '7');
$authors = new WP_Query($args); //Query to get the Projects

while ( $authors->have_posts() ) : $authors->the_post();
?>
<h2 class="entry-title"><a href=""><?php the_title(); ?></a></h2>
<div class="entry-content">
<?php

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

  the_post_thumbnail('author', array('class' => 'alignleft'));
} 
?>
<?php the_content(); ?>
</div>
<?php
endwhile; //end of the author loop
wp_reset_query();
?>
</div>
<div class="section post_project_block"></div><!-- the image below ground -->