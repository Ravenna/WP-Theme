<?php 



// TEAM TYPES
function team_type_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Team Types', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Team Type', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Team Types', 'text_domain' ),
        'all_items'                  => __( 'All Team Types', 'text_domain' ),
        'parent_item'                => __( 'Parent Team Type', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Teamn Type:', 'text_domain' ),
        'new_item_name'              => __( 'New Team Type', 'text_domain' ),
        'add_new_item'               => __( 'Add New Team Type', 'text_domain' ),
        'edit_item'                  => __( 'Edit Team Type', 'text_domain' ),
        'update_item'                => __( 'Update Team Type', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'team_type', array( 'team' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'team_type_taxonomy', 0 );



?>