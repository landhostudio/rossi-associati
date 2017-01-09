<?php

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
		'page_title' 	=> 'Opzioni Tema',
		'menu_title'	=> 'Opzioni',
		'menu_slug' 	=> 'options-theme'
	));
  
}

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_586ee8056e325',
	'title' => 'Contatti',
	'fields' => array (
		array (
			'sub_fields' => array (
				array (
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'key' => 'field_586ee86ba12b7',
					'label' => 'Titolo',
					'name' => 'contact_locations_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
				array (
					'tabs' => 'all',
					'toolbar' => 'basic',
					'media_upload' => 0,
					'default_value' => '',
					'delay' => 0,
					'key' => 'field_586ee88ea12b8',
					'label' => 'Testo',
					'name' => 'contact_locations_text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
			),
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Aggiungi Sede',
			'collapsed' => 'field_586ee86ba12b7',
			'key' => 'field_586ee816a12b6',
			'label' => 'Sedi',
			'name' => 'contact_locations',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-pages/contact.php',
			),
		),
	),
	'menu_order' => -1,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_586ee1e47742d',
	'title' => 'Lista',
	'fields' => array (
		array (
			'sub_fields' => array (
				array (
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'key' => 'field_586ee33c456b1',
					'label' => 'Titolo',
					'name' => 'list_title',
					'type' => 'text',
					'instructions' => 'Titolo del gruppo (opzionale)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '25',
						'class' => '',
						'id' => '',
					),
				),
				array (
					'sub_fields' => array (
						array (
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'key' => 'field_586ee223e47fd',
							'label' => 'Titolo',
							'name' => 'list_group_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
						array (
							'tabs' => 'all',
							'toolbar' => 'basic',
							'media_upload' => 1,
							'default_value' => '',
							'delay' => 0,
							'key' => 'field_586ee23ee47fe',
							'label' => 'Testo',
							'name' => 'list_group_text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
					),
					'min' => 0,
					'max' => 0,
					'layout' => 'block',
					'button_label' => 'Aggiungi Elemento',
					'collapsed' => 'field_586ee223e47fd',
					'key' => 'field_586ee2d8456b0',
					'label' => 'Gruppo',
					'name' => 'list_group',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '75',
						'class' => '',
						'id' => '',
					),
				),
			),
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Aggiungi Gruppo',
			'collapsed' => 'field_586ee33c456b1',
			'key' => 'field_586ee1ede47fc',
			'label' => 'Gruppi',
			'name' => 'list',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-pages/list.php',
			),
		),
	),
	'menu_order' => -1,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_586eeb6669ded',
	'title' => 'Pagina',
	'fields' => array (
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_586eeb944f7a8',
			'label' => 'Sottotitolo',
			'name' => 'page_subtitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'top_level',
			),
			array (
				'param' => 'page_type',
				'operator' => '!=',
				'value' => 'posts_page',
			),
		),
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'parent',
			),
			array (
				'param' => 'page_type',
				'operator' => '!=',
				'value' => 'posts_page',
			),
		),
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'child',
			),
			array (
				'param' => 'page_type',
				'operator' => '!=',
				'value' => 'posts_page',
			),
		),
	),
	'menu_order' => -1,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_586ede293d674',
	'title' => 'Opzioni',
	'fields' => array (
		array (
			'placement' => 'top',
			'endpoint' => 0,
			'key' => 'field_586ede3520943',
			'label' => 'Footer',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_586ede4720944',
			'label' => 'Copyright',
			'name' => 'options_footer_copyright',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_586edef612daa',
			'label' => 'Privacy Testo',
			'name' => 'options_footer_privacy_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'placeholder' => '',
			'key' => 'field_586edec012da9',
			'label' => 'Privacy link',
			'name' => 'options_footer_privacy_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'options-theme',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
	'local' => 'php',
));

endif;
