<?php


// 

function get_custom_field_data($key, $echo = false) {
	global $post;
	$value = get_post_meta($post->ID, $key, true);
	if($echo == false) {
		return $value;
	} else {
		echo $value;
	}
}

//

function hide_admin_bar() {
    wp_add_inline_style('admin-bar', '<style> html { margin-top: 0 !important; } </style>');
    return false;
}

add_filter( 'show_admin_bar', 'hide_admin_bar' );

//

function my_custom_menus() {
    register_nav_menus(
        array(
            'home' => __( 'Home' ),
            'programa-estagio' => __( 'Programa Estágio' ),
            'programa-trainee' => __( 'Programa Trainee' ),
            'programa-technical-trainee' => __( 'Programa Techinical Trainee' )
        )
    );
}

add_action( 'init', 'my_custom_menus' );

//

function updateNumbers() {
    global $wpdb;
    $querystr = "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_type = 'post' ";
    $pageposts = $wpdb->get_results($querystr, OBJECT);
    $counts = 0 ;
    if ($pageposts):
    foreach ($pageposts as $post):
    setup_postdata($post);
    $counts++;
    add_post_meta($post->ID, 'incr_number', $counts, true);
    update_post_meta($post->ID, 'incr_number', $counts);
    endforeach;
    endif;
}
 
add_action ( 'publish_post', 'updateNumbers' );
add_action ( 'deleted_post', 'updateNumbers' );
add_action ( 'edit_post', 'updateNumbers' );

?>
