<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_portfolio-details',
		'title' => 'Portfolio Details',
		'fields' => array (
			array (
				'key' => 'field_52dc6dd2e1d0a',
				'label' => 'Portfolio Details',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_52d2fe5cbe32e',
				'label' => 'Client',
				'name' => 'portfolio_client',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52d2fe7dbe32f',
				'label' => 'Overview',
				'name' => 'portfolio_overview',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_52d2fea1be330',
				'label' => 'Location',
				'name' => 'portfolio_location',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52d2feb3be331',
				'label' => 'Service',
				'name' => 'portfolio_service',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52d2fef2be332',
				'label' => 'Executive Producer(s)',
				'name' => 'portfolio_producer',
				'type' => 'checkbox',
				'choices' => array (
					'Ajamu White' => 'Ajamu White',
					'Jason Naumoff' => 'Jason Naumoff',
					'Adam Aleksander' => 'Adam Aleksander',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_52d2ff0bbe333',
				'label' => 'Creative Director(s)',
				'name' => 'portfolio_director',
				'type' => 'checkbox',
				'choices' => array (
					'Ajamu White' => 'Ajamu White',
					'Jason Naumoff' => 'Jason Naumoff',
					'Adam Aleksander' => 'Adam Aleksander',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_52d2ff1ebe334',
				'label' => 'Learn More Link',
				'name' => 'portfolio_learn_more',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52dc6d29f527c',
				'label' => 'Appearance',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_52dc6d40f527d',
				'label' => 'Headline Color',
				'name' => 'portfolio_headline_color',
				'type' => 'color_picker',
				'instructions' => 'choose the text color for the post details overlay',
				'default_value' => '#eeeeee',
			),
			array (
				'key' => 'field_52dc6de9e1d0b',
				'label' => 'Post Details Background',
				'name' => 'post_details_background',
				'type' => 'color_picker',
				'instructions' => 'select a background color for the post details. default is \'transparent\'',
				'default_value' => 'transparent',
			),
			array (
				'key' => 'field_52dc70f813554',
				'label' => 'Portfolio Headline',
				'name' => 'portfolio_headline',
				'type' => 'text',
				'instructions' => 'shows in the slider. Should fit on one line.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52dc715413555',
				'label' => 'Portfolio Tagline',
				'name' => 'portfolio_tagline',
				'type' => 'text',
				'instructions' => 'one-liner right below the headline in the slider. should be a very short description of the project.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '8',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_press-post',
		'title' => 'Press Post',
		'fields' => array (
			array (
				'key' => 'field_52d2fc31dcc12',
				'label' => 'Press Link URL',
				'name' => 'press_link_url',
				'type' => 'text',
				'instructions' => 'paste the url to the article here',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '9',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_slider-options',
		'title' => 'Slider Options',
		'fields' => array (
			array (
				'key' => 'field_52e0b6c80809f',
				'label' => 'Auto Advance?',
				'name' => 'slider_auto',
				'type' => 'true_false',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_52e0b6f4080a0',
				'label' => 'Speed (miliseconds)',
				'name' => 'slider_speed',
				'type' => 'number',
				'default_value' => 5000,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => 500,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'homepage.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_video-options',
		'title' => 'Video Options',
		'fields' => array (
			array (
				'key' => 'field_52d081d0ce554',
				'label' => 'Video Options Message',
				'name' => '',
				'type' => 'message',
				'message' => 'Use this metabox to add videos to the slider and for sharing on social media.',
			),
			array (
				'key' => 'field_52d082acce559',
				'label' => 'Show Video',
				'name' => 'show_video',
				'type' => 'checkbox',
				'choices' => array (
					'slider' => 'Show the embedded video in the homepage slider.',
					'post-start' => 'Show the video at the top of the content.',
					'social' => 'Display this video when sharing this page on social networks.',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_52d216db7bf28',
				'label' => 'Video Size',
				'name' => 'video_size',
				'type' => 'radio',
				'instructions' => '\'Full-width\' videos play in the next slide. \'Centered\' videos get overlayed over the image on the title slide.',
				'choices' => array (
					'full-width' => 'Full Width',
					'centered' => 'Centered',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_52d081f9ce555',
				'label' => 'Youtube Video ID',
				'name' => 'youtube_video_id',
				'type' => 'text',
				'instructions' => 'just the video id (the part after ?v= in the url of the video on youtube). It should be about eight letters or numbers.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => 27,
			),
			array (
				'key' => 'field_52d08252ce557',
				'label' => 'Vimeo Video ID',
				'name' => 'vimeo_video_id',
				'type' => 'text',
				'instructions' => 'Just the vimeo video ID from the url',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => 12,
			),
			array (
				'key' => 'field_52d08278ce558',
				'label' => 'Video Embed Code',
				'name' => 'video_embed_code',
				'type' => 'textarea',
				'instructions' => 'paste the full embed code for a video here.',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'formatting' => 'html',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 2,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>