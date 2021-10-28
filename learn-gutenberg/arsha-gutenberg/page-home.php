<?php

/*
 * Template Name: Шаблон лендинга Arsha
 */

get_header();



$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-home.php'
));

if ($query->have_posts()) {

    while ($query->have_posts()) {

        $query->the_post();

        global $post;

        the_content();
    }

}

?>

<?php get_footer(); ?>