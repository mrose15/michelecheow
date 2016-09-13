<?php
/**
 * MC Portfolio CPT
 *
 * @package      CoreFunctionality
 * @since        1.0.0
 * @link         http://michelecheow.com
 * @author       mc
 * @copyright    Copyright (c) 2016, mc
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

function mc_portfolio_cpt() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Portfolio', 'Post Type General Name', 'mc2016' ),
        'singular_name'       => _x( 'Website', 'Post Type Singular Name', 'mc2016' ),
        'menu_name'           => __( 'Portfolio', 'mc2016' ),
        'parent_item_colon'   => __( 'Parent Portfolio', 'mc2016' ),
        'all_items'           => __( 'All Websites', 'mc2016' ),
        'view_item'           => __( 'View Website', 'mc2016' ),
        'add_new_item'        => __( 'Add New Website', 'mc2016' ),
        'add_new'             => __( 'Add New Website', 'mc2016' ),
        'edit_item'           => __( 'Edit Website', 'mc2016' ),
        'update_item'         => __( 'Update Website', 'mc2016' ),
        'search_items'        => __( 'Search Portfolio', 'mc2016' ),
        'not_found'           => __( 'Not Found', 'mc2016' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'mc2016' ),
    );
    
// Set other options for Custom Post Type
    
    $args = array(
        'label'               => __( 'portfolio', 'mc2016' ),
        'description'         => __( 'Michele Cheow Portfolio', 'mc2016' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 30,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    
    // Registering your Custom Post Type
    register_post_type( 'portfolio', $args );

}

add_action( 'init', 'mc_portfolio_cpt', 0 );


/* Portfolio Metaboxes */
function portfolio_metabox() {
    $prefix = '_ew_team_';
     $cmb = new_cmb2_box( array(
            'id'           => $prefix . 'metabox',
            'title'        => __( 'Management Team', 'ew-demo' ),
            'object_types' => array( 'management_team', ),
        ) );
        $cmb->add_field( array(
            'name'    => 'Member Bio',
            'id'      => $prefix . '_textmedium',
            'type'    => 'text_medium'
        ) );
}
add_action( 'cmb2_init', 'portfolio_metabox' );