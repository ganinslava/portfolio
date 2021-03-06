<?php

/* Sort posts in wp_list_table by column in ascending or descending order. */
function custom_post_order($query){
    /* 
        Set post types.
        _builtin => true returns WordPress default post types. 
        _builtin => false returns custom registered post types. 
    */
    $post_types = get_post_types(array('_builtin' => false), 'names');
    /* The current post type. */
    $post_type = $query->get('post_type');
    /* Check post types. */
    if(in_array($post_type, $post_types) && (($post_type == 'tech-slider-example') || ($post_type == 'page') || ($post_type == 'youtube-feedback'))){
        /* Post Column: e.g. title */
        if($query->get('orderby') == ''){
            $query->set('orderby', 'title');
        }
        /* Post Order: ASC / DESC */
        if($query->get('order') == ''){
            $query->set('order', 'ASC');
        }
    }
}
if(is_admin()){
    add_action('pre_get_posts', 'custom_post_order');
}