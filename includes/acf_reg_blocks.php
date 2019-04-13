<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        // register blocks
        acf_register_block(array(
            'name'              => 'mainscreen',
            'title'             => __('Mainscreen'),
            'description'       => __('A custom mainscreen block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-image',
            'keywords'          => array( 'mainscreen, 777zhm' ),
        ));

        acf_register_block(array(
            'name'              => 'aboutus',
            'title'             => __('About us'),
            'description'       => __('A custom about us block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-page',
            'keywords'          => array( 'contactus, 777zhm' ),
        ));

        acf_register_block(array(
            'name'              => 'joinus',
            'title'             => __('Join us'),
            'description'       => __('A custom join us block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'groups',
            'keywords'          => array( 'joinus, 777zhm' ),
        ));

        acf_register_block(array(
            'name'              => 'calltoaction',
            'title'             => __('Calltoaction'),
            'description'       => __('A custom call to action block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'warning',
            'keywords'          => array( 'calltoaction, 777zhm' ),
        ));

        acf_register_block(array(
            'name'              => 'avtopark',
            'title'             => __('Avtopark'),
            'description'       => __('A custom avtopark block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'align-left',
            'keywords'          => array( 'avtopark, 777zhm' ),
        ));

    }
}

function custom_block_render_callback( $block ) {
    // Remove "acf/" from name so we can use a path-friendly slug
    $slug = str_replace( 'acf/', '', $block['name'] );
    
    // include a template part from within the "template-parts/block" folder
    if( file_exists( STYLESHEETPATH . "/template-parts/block-{$slug}.php" ) ) {
        include( STYLESHEETPATH . "/template-parts/block-{$slug}.php" );
    }
}