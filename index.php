<?php 
/**
 * Plugin Name:       Block Dividers
 * Plugin URI:        https://smultreonstalle.com/fancy-dividers
 * Description:       Dividers that are to be used above covers or blocks to give visual appeal.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.6
 * Author:            Kimberlee Dickinson
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       smultronstalle
 */


use function Genesis\CustomBlocks\add_block;

function add_emd_fancy_divider_block() {
    
    // One long array with lots defined. 
    add_block(
        'fancy-divider', 
        array( 
            'title'    => 'Fancy Divider', 
            'category' => 'design', 
            'icon'     => 'admin-customizer', 
            'keywords' => array( 'divider', 'cover', 'background' ), 
            'fields'   => array( 
                'divider-type'  => array( 
                    'name'      => 'Fancy Dividers',
                    'label'     => __( 'Divider Style', 'emd' ), 
                    'help'      => ' Select an option to add a stylish design to your block.',
                    'control'   => 'select',
                    'options'   => [
                        [
                            'label' => 'Tilt',
                            'value' => 'tilt',
                        ],
                        [
                            'label' => 'Curve',
                            'value' => 'curve',
                        ],
                        [
                            'label' => 'Inverse Curve',
                            'value' => 'inverse-curve',
                        ],
                        [
                            'label' => 'Triangle',
                            'value' => 'triangle',
                        ],
                        [
                            'label' => 'Inverted Triangle',
                            'value' => 'inverse-triangle',
                        ],
                        [
                            'label' => 'Obtuse Triangle',
                            'value' => 'obtuse-triangle',
                        ],
                        [
                            'label' => 'Inverted Obtuse Triangle',
                            'value' => 'inverse-obtuse-triangle',
                        ],
                        [
                            'label' => 'Wave',
                            'value' => 'wave',
                        ],
                        [
                            'label' => 'Zigzag',
                            'value' => 'zigzag',
                        ],
                    ],
                ),
                'chosen-color'  => array(
                    'name'      => 'Choice of Color',
                    'label'     => __( 'Choice of Color', 'emd' ), 
                    'help'      => ' Select a color to style your divider.',
                    'control'   => 'color',
                ),
            ), 
        ) 
    ); 
}
add_action( 'genesis_custom_blocks_add_blocks', 'add_emd_fancy_divider_block');

function fancy_divider_block_get_alternate_template_path( $path ) {

    unset( $path );
    return __DIR__;
}

add_filter( 'genesis_custom_blocks_template_path', 'fancy_divider_block_get_alternate_template_path' );