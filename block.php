<?php
/**
 * Plans Table Block
 */

// $data is what we're going to expose to our render template
// $data = array(
// 	'example_field' => get_field( 'example_field' ),
//     'another_field' => get_field( 'another_field' )
// );

// Dynamic block ID
$block_id = 'plans-table-block-' . $block['id'];

// Check if a custom ID is set in the block editor
if( !empty($block['anchor']) ) {
    $block_id = $block['anchor'];
}

// Block classes
$class_name = 'plans-table-block';
if( !empty($block['class_name']) ) {
    $class_name .= ' ' . $block['class_name'];
}

$template = [
	[
		'core/columns',
		[
			'isStackedOnMobile' => true,
			'verticalAlignment' => true
		],
		[
			[
				'core/column',
				[
					'width' => '40%'
				],
				[
					[
						'core/image',
						[
							'url' => get_stylesheet_directory_uri() . '/blocks/plans-tablet/placeholder-img.png'
						]
					],
				]
			],
			[
				'core/column',
				[
					'width' => '60%',
				],
				[
					[
						'core/heading',
						[
							'level'       => 2,
							'placeholder' => 'Show a pricing plan',
							'content'     => 'Show a pricing plan',
						]
					],
					[
						'core/paragraph',
						[
							'classNames' => 'ff-causten',
							'content'    => 'Use this form to list a relevant drug discovery conference, drug discovery webinar, or drug discovery event, or to feature an event on the homepage or in our e-mail newsletter',
						]
					],
					[
						'core/button',
						[
							'text'  => 'Show a pricing plan',
							'url'   => '#',
							'align' => 'left'
						]
					]
				]
			],
		]
	]
];
/** 
 * Pass the block data into the template part
 */ 
get_template_part(
	'blocks/plans-table-block/template',
	null,
	array(
		'block'      => $block,
		'is_preview' => $is_preview,
		'post_id'    => $post_id,

		// 'data'       => $data,
        'class_name' => $class_name,
        'block_id'   => $block_id,
		'template'	=> $template
		
	)
);