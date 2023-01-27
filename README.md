# Plans Table Block

WordPress Gutenberg block built with `@wordpress/create-block` to display a plans table in columns. This block can be installed as a plugin or loaded from `functions.php`

## Plans

Each tablet has three columns representing three plans. Content is added to these plans that can be updated. Blocks is unlocked to allow easy adding of other blocks

## Blocks

The Plans table is a columns block. It has three columns and each column has

- header - heading
- sub header - heading
- priceline - heading
- period - paragraph
- byline - paragraph

All blocks are added to `innerBlocks` in `src/edit.js` for the editor and in `src/save.js` again for saving data all based on `src/template.js`
## Styling

Main stylesheet is `src/style.scss` but for editor specific needs you add styles to `src/editor.scss`

## Building

Building you do inside the plugin using `npm run build` to build for production.

