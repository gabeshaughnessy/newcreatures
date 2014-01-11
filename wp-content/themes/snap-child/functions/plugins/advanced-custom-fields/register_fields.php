<?php
if(function_exists("register_field_group"))
{
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
				'label' => 'Show Video in Slider',
				'name' => 'show_video_in_slider',
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
					'value' => 'project',
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