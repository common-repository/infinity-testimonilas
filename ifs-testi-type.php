<?php
/* Some setup */
define('IFS_TESTI_NAME', "Tesimonialss");
define('IFS_TESTI_SINGLE', "Testimonial");
define('IFS_TESTI_TYPE', "ifs-testimonial");
define('IFS_TESTI_ADD_NEW_ITEM', "Add New testimonial");
define('IFS_TESTI_EDIT_ITEM', "Edit testimonial");
define('IFS_TESTI_NEW_ITEM', "New testimonial");
define('IFS_TESTI_VIEW_ITEM', "View testimonial");

/* Register custom post for testimonial*/
function IFS_TESTI_custom_post_register() {  
    $args = array(  
        'labels' => array (
			'name' => __( IFS_TESTI_NAME ),
			'singular_label' => __(IFS_TESTI_SINGLE),  
			'add_new_item' => __(IFS_TESTI_ADD_NEW_ITEM),
			'edit_item' => __(IFS_TESTI_EDIT_ITEM),
			'new_item' => __(IFS_TESTI_NEW_ITEM),
			'view_item' => __(IFS_TESTI_VIEW_ITEM),
		), 
        'public' => true,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => true,  
        'supports' => array('title', 'editor', 'thumbnail')  
       );  
    register_post_type(IFS_TESTI_TYPE , $args );  
}
add_action('init', 'IFS_TESTI_custom_post_register');

?>