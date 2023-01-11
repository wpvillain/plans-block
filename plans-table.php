<?php

/**
 * Plugin Name:       Plans Table
 * Description:       Plans Table showing all packages available.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Drughunter
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       plans-table
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_plans_table_block_init()
{
	register_block_type(__DIR__ . '/build');
}
add_action('init', 'create_block_plans_table_block_init');

// Register Plans Table ACF Fields
function dh_register_acf_plans_table_fields()
{
	$post_id = isset($_GET['post']) ? $_GET['post'] : null;

	if (get_post_type($post_id) == 'post') {
		$plan_object   				= get_post_type_object('post');
		$planHeadline   		 	= get_field('plan_headline', $post_id);
		$planSubhead				= get_field('plan_headline', $post_id);
		$planPriceLine  			= get_field('plan_price_line', $post_id);
		$planPeriod					= get_field('plan_period', $post_id);
		$planByLine					= get_field('plan_by_line', $post_id);
		$planButtonText				= get_field('plan_button_text', $post_id);
		$planHeaderBackgroundColor  = get_field('plan__header_background_color', $post_id);
		$planBorderColor 			= get_field('plan_border_color', $post_id);
		$planBorderStyle   			= get_field('plan_border_style', $post_id);
		$planPriceLine 				= get_field('plan_price_line', $post_id);
		$plan_object->template = [
			// registerBlockType name
			['plans-table/content', [
				'planHeadline'   	=> $planHeadline ?: '',
				'planSubhead' 		=> $planSubhead ?: '',
				'planPriceLine'     => $planPriceLine ?: '',
				'planPeriod' 		=> $planPeriod ?: '',
				'planByLine' 		=> $planByLine ?: '',
				'planButtonText' 	=> $planButtonText ?: '',
			]],
			['plans-table/inner-blocks']
		];
	}
}
add_action('init', 'dh_register_acf_plans_table_fields', 999, 0);
