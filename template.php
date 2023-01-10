<?php
/**
 * Block Name: Plans Table Block
 *
 * Description: Plans Table for pricing display
 * 
 */

// The block attributes
$block = $args['block'];

// The block data
$data = $args['data'];

// The block ID
$block_id = $args['block_id'];

// The block class names
$class_name = $args['class_name'];

// The block template data
$template = $args['template'];


?>
<!-- Our front-end template -->
<div id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?>">
    <InnerBlocks template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>" templateLock="all"/>
</div>
