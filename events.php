<?php
/*
Plugin Name: HNRK Event
Plugin URI: https://www.hnrkagency.se/
Description: Declares a plugin that will create a custom post type displaying events.
Version: 1.0
Author: Henrik Pettersson
Author URI: https://www.hnrkagency.se/
License: GNU General Public License v2 or later
*/

    // Register the custom post type
    add_action( 'init', 'create_event', 0 );
    function create_event() {
        $labels = array(
            'name'                => _x( 'Event', 'Event General Name', 'text-domain' ),
            'singular_name'       => _x( 'Event', 'Event Singular Name', 'text-domain' ),
            'menu_name'           => __( 'Events', 'text-domain' ),
            'all_items'           => __( 'All events', 'text-domain' ),
            'view_item'           => __( 'View event', 'text-domain' ),
            'add_new_item'        => __( 'Add new event', 'text-domain' ),
            'add_new'             => __( 'Add new', 'text-domain' ),
            'edit_item'           => __( 'Edit event', 'text-domain' ),
            'update_item'         => __( 'Update event', 'text-domain' ),
            'search_items'        => __( 'Search event', 'text-domain' ),
            'not_found'           => __( 'Not found', 'text-domain' ),
            'not_found_in_trash'  => __( 'Not found in trash', 'text-domain' ),
        );
        
        $args = array(
            'label'               => __( 'Events', 'text-domain' ),
            'description'         => __( 'Events review', 'text-domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_icon'           =>'dashicons-calendar-alt',
            'menu_position'       => 101,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest'        => true,
            'taxonomies'          => array( '' ),
        );
        register_post_type( 'event', $args );
    }


    // Register taxonomi Type
    add_action( 'init', 'add_event_type', 10 );
    function add_event_type() {
        $labels = array(
            'name'              => _x( 'Types', 'Taxonomy General Name', 'text-domain' ),
            'singular_name'     => _x( 'Typ', 'Taxonomy Singular Name', 'text-domain' ),
            'search_items'      => __( 'Search type', 'text-domain' ),
            'all_items'         => __( 'All types', 'text-domain' ),
            'parent_item'       => __( 'Parent type', 'text-domain' ),
            'parent_item_colon' => __( 'Parent type:', 'text-domain' ),
            'edit_item'         => __( 'Edit type', 'text-domain' ),
            'update_item'       => __( 'Update type', 'text-domain' ),
            'add_new_item'      => __( 'Add new type', 'text-domain' ),
            'new_item_name'     => __( 'New type', 'text-domain' ),
            'menu_name'         => __( 'Types', 'text-domain' ),
        );

        register_taxonomy( 'event_type', 'event', array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => false,
            'query_var'         => true,
            'has_archive'       => true,
            'show_in_rest'      => true,
            'rewrite'           => array( 'slug' => 'type' ),
        ) );
    }


    // Register taxonomi City
    add_action( 'init', 'add_event_city', 10 );
    function add_event_city() {
        $labels = array(
            'name'              => _x( 'Cities', 'Taxonomy General Name', 'text-domain' ),
            'singular_name'     => _x( 'City', 'Taxonomy Singular Name', 'text-domain' ),
            'search_items'      => __( 'Search city', 'text-domain' ),
            'all_items'         => __( 'All cities', 'text-domain' ),
            'parent_item'       => __( 'Parent city', 'text-domain' ),
            'parent_item_colon' => __( 'Parent city:', 'text-domain' ),
            'edit_item'         => __( 'Edit city', 'text-domain' ),
            'update_item'       => __( 'Update city', 'text-domain' ),
            'add_new_item'      => __( 'Add new city', 'text-domain' ),
            'new_item_name'     => __( 'New city', 'text-domain' ),
            'menu_name'         => __( 'Cities', 'text-domain' ),
        );

        register_taxonomy( 'event_city', 'event', array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => false,
            'query_var'         => true,
            'has_archive'       => true,
            'show_in_rest'      => true,
            'rewrite'           => array( 'slug' => 'city' ),
        ) );
    }


    // Register taxonomi Year
    add_action( 'init', 'add_event_year', 10 );
    function add_event_year() {
        $labels = array(
            'name'              => _x( 'Years', 'Taxonomy General Name', 'text-domain' ),
            'singular_name'     => _x( 'Year', 'Taxonomy Singular Name', 'text-domain' ),
            'search_items'      => __( 'Search year', 'text-domain' ),
            'all_items'         => __( 'All years', 'text-domain' ),
            'parent_item'       => __( 'Parent year', 'text-domain' ),
            'parent_item_colon' => __( 'Parent year:', 'text-domain' ),
            'edit_item'         => __( 'Edit year', 'text-domain' ),
            'update_item'       => __( 'Update year', 'text-domain' ),
            'add_new_item'      => __( 'Add new year', 'text-domain' ),
            'new_item_name'     => __( 'New year', 'text-domain' ),
            'menu_name'         => __( 'Years', 'text-domain' ),
        );

        register_taxonomy( 'event_year', 'event', array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => false,
            'query_var'         => true,
            'has_archive'       => true,
            'show_in_rest'      => true,
            'rewrite'           => array( 'slug' => 'year' ),
        ) );
    }


    // Show future events
    remove_action('future_post', '_future_post_hook');
    add_filter( 'wp_insert_post_data', 'show_future_events' );
    function show_future_events( $data ) {
        if ( $data['post_status'] == 'future' && $data['post_type'] == 'event' )
            $data['post_status'] = 'publish';
        return $data;
    }


    // Change title placeholder text
    add_filter( 'enter_title_here', function( $title ) {
        $screen = get_current_screen();
        if  ( 'event' == $screen->post_type ) {
            $title = __( 'Venue', 'text-domain' );
        }
        return $title;
    } );
