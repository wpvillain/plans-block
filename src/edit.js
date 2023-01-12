/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * Import files for loading meta data and for importing block template data
 */
import {registerBlockType} from '@wordpress/blocks';
import {MY_TEMPLATE} from './template';

/**
 * Border Control
 */
// import { __experimentalBorderControl as BorderControl } from '@wordpress/components';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { RichText, InnerBlocks, useBlockProps } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit( {attributes, setAttributes} ) {
	const ALLOWED_BLOCKS = [
		'core/image',
		'core/paragraph',
		'core/columns',
		'core/heading'
	];
	const blockProps = useBlockProps();
	const {planHeadline, planSubhead, planPriceLine, planPeriod, planByline, planButtonText} = attributes;


		return (
			<div { ...blockProps }>
				<InnerBlocks
					template={ MY_TEMPLATE }
					allowedBlocks={ ALLOWED_BLOCKS }
					templateLock="all"
				/>
			</div>
	);
}
