<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_portfolio-details',
		'title' => 'Portfolio Details',
		'fields' => array (
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
					'Ajumu White' => 'Ajumu White',
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
					'Ajumu White' => 'Ajumu White',
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
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
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
		'id' => 'acf_video-options',
		'title' => 'Video Options',
		'fields' => array (
			array (
				'key' => 'field_52d216db7bf28',
				'label' => 'Video Size',
				'name' => 'video_size',
				'type' => 'radio',
				'choices' => array (
					'full-width' => 'Full Width',
					'centered' => 'Centered',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
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