<?php
function sp_add_meta()
{
    global $post;
    if (!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-entry.php') {
            add_meta_box(
                'entry-metaboxes', // $id
                'Метабоксы вводного раздела', // $title
                'display_entry_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-stat.php') {
            add_meta_box(
                'stat-metaboxes', // $id
                'Метабоксы второго раздела', // $title
                'display_stat_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-calc.php') {
            add_meta_box(
                'calc-metaboxes', // $id
                'Метабоксы третьего раздела', // $title
                'display_calc_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-begin.php') {
            add_meta_box(
                'begin-metaboxes', // $id
                'Метабоксы четвертого раздела', // $title
                'display_begin_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-franchise.php') {
            add_meta_box(
                'franchise-metaboxes', // $id
                'Метабоксы пятого раздела', // $title
                'display_franchise_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-projects.php') {
            add_meta_box(
                'projects-metaboxes', // $id
                'Метабоксы шестого раздела', // $title
                'display_projects_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-presence.php') {
            add_meta_box(
                'presence-metaboxes', // $id
                'Метабоксы седьмого раздела', // $title
                'display_presence_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-pack.php') {
            add_meta_box(
                'pack-metaboxes', // $id
                'Метабоксы восьмого раздела', // $title
                'display_pack_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-rent.php') {
            add_meta_box(
                'rent-metaboxes', // $id
                'Метабоксы девятого раздела', // $title
                'display_rent_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-feedback.php') {
            add_meta_box(
                'feedback-metaboxes', // $id
                'Метабоксы десятого раздела', // $title
                'display_feedback_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-support.php') {
            add_meta_box(
                'support-metaboxes', // $id
                'Метабоксы одиннадцатого раздела', // $title
                'display_support_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-patronage.php') {
            add_meta_box(
                'patronage-metaboxes', // $id
                'Метабоксы двенадцатого раздела', // $title
                'display_patronage_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-to-know.php') {
            add_meta_box(
                'to-know-metaboxes', // $id
                'Метабоксы тринадцатого раздела', // $title
                'display_to_know_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-get-plan.php') {
            add_meta_box(
                'get-plan-metaboxes', // $id
                'Метабоксы четырнадцатого раздела', // $title
                'display_get_plan_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-footer.php') {
            add_meta_box(
                'footer-metaboxes', // $id
                'Метабоксы пятнадцатого раздела', // $title
                'display_footer_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        add_meta_box(
            'tech-slider-example-metaboxes', // $id
            'Метабоксы примера техники верхнего слайдера сайта', // $title
            'display_tech_slider_example_metaboxes', // $callback
            'tech-slider-example', // $page
            'before-editor', // $context
            'high');

        add_meta_box(
            'youtube-feedback', // $id
            'Метабоксы видеоотзыва', // $title
            'display_youtube_feedback_metaboxes', // $callback
            'youtube-feedback', // $page
            'before-editor', // $context
            'high');
        // add_meta_box(
        //     'mobile-example-metaboxes', // $id
        //     'Метабоксы примера работы для мобильной версии сайта', // $title
        //     'display_mobile_example_metaboxes', // $callback
        //     'mobile-example', // $page
        //     'before-editor', // $context
        //     'high');
    }
}

function sp_save_meta($post_id, $post, $update)
{
    global $post;
    if (!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if (!$update) {
            return;
        }

        if ($pageTemplate == 'page-entry.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['main-p'] = wp_kses_post($_POST['main-p']);
            $metaboxes_data['button-text'] = sanitize_text_field($_POST['button-text']);
            update_post_meta($post_id, 'entry-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-stat.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['1st-elem-icon'] = esc_url_raw($_POST['1st-elem-icon']);
            $metaboxes_data['1st-elem-title'] = wp_kses_post($_POST['1st-elem-title']);
            $metaboxes_data['1st-elem-text'] = wp_kses_post($_POST['1st-elem-text']);
            $metaboxes_data['2st-elem-icon'] = esc_url_raw($_POST['2st-elem-icon']);
            $metaboxes_data['2st-elem-title'] = wp_kses_post($_POST['2st-elem-title']);
            $metaboxes_data['2st-elem-text'] = wp_kses_post($_POST['2st-elem-text']);
            $metaboxes_data['3st-elem-icon'] = esc_url_raw($_POST['3st-elem-icon']);
            $metaboxes_data['3st-elem-title'] = wp_kses_post($_POST['3st-elem-title']);
            $metaboxes_data['3st-elem-text'] = wp_kses_post($_POST['3st-elem-text']);
            $metaboxes_data['4st-elem-icon'] = esc_url_raw($_POST['4st-elem-icon']);
            $metaboxes_data['4st-elem-title'] = wp_kses_post($_POST['4st-elem-title']);
            $metaboxes_data['4st-elem-text'] = wp_kses_post($_POST['4st-elem-text']);
            $metaboxes_data['5st-elem-icon'] = esc_url_raw($_POST['5st-elem-icon']);
            $metaboxes_data['5st-elem-title'] = wp_kses_post($_POST['5st-elem-title']);
            $metaboxes_data['5st-elem-text'] = wp_kses_post($_POST['5st-elem-text']);
            $metaboxes_data['6st-elem-icon'] = esc_url_raw($_POST['6st-elem-icon']);
            $metaboxes_data['6st-elem-title'] = wp_kses_post($_POST['6st-elem-title']);
            $metaboxes_data['6st-elem-text'] = wp_kses_post($_POST['6st-elem-text']);
            $metaboxes_data['7st-elem-icon'] = esc_url_raw($_POST['7st-elem-icon']);
            $metaboxes_data['7st-elem-title'] = wp_kses_post($_POST['7st-elem-title']);
            $metaboxes_data['7st-elem-text'] = wp_kses_post($_POST['7st-elem-text']);
            $metaboxes_data['8st-elem-icon'] = esc_url_raw($_POST['8st-elem-icon']);
            $metaboxes_data['8st-elem-title'] = wp_kses_post($_POST['8st-elem-title']);
            $metaboxes_data['8st-elem-text'] = wp_kses_post($_POST['8st-elem-text']);
            update_post_meta($post_id, 'stat-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-calc.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            update_post_meta($post_id, 'calc-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-begin.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['main-p'] = wp_kses_post($_POST['main-p']);
            $metaboxes_data['1st-elem-icon'] = esc_url_raw($_POST['1st-elem-icon']);
            $metaboxes_data['1st-elem-text'] = wp_kses_post($_POST['1st-elem-text']);
            $metaboxes_data['2st-elem-icon'] = esc_url_raw($_POST['2st-elem-icon']);
            $metaboxes_data['2st-elem-text'] = wp_kses_post($_POST['2st-elem-text']);
            $metaboxes_data['3st-elem-icon'] = esc_url_raw($_POST['3st-elem-icon']);
            $metaboxes_data['3st-elem-text'] = wp_kses_post($_POST['3st-elem-text']);
            $metaboxes_data['4st-elem-icon'] = esc_url_raw($_POST['4st-elem-icon']);
            $metaboxes_data['4st-elem-text'] = wp_kses_post($_POST['4st-elem-text']);
            $metaboxes_data['5st-elem-icon'] = esc_url_raw($_POST['5st-elem-icon']);
            $metaboxes_data['5st-elem-text'] = wp_kses_post($_POST['5st-elem-text']);
            $metaboxes_data['6st-elem-icon'] = esc_url_raw($_POST['6st-elem-icon']);
            $metaboxes_data['6st-elem-text'] = wp_kses_post($_POST['6st-elem-text']);
            $metaboxes_data['7st-elem-icon'] = esc_url_raw($_POST['7st-elem-icon']);
            $metaboxes_data['7st-elem-text'] = wp_kses_post($_POST['7st-elem-text']);
            $metaboxes_data['8st-elem-icon'] = esc_url_raw($_POST['8st-elem-icon']);
            $metaboxes_data['8st-elem-text'] = wp_kses_post($_POST['8st-elem-text']);
            update_post_meta($post_id, 'begin-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-franchise.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['1st-top-slide-text'] = wp_kses_post($_POST['1st-top-slide-text']);
            $metaboxes_data['2st-top-slide-text'] = wp_kses_post($_POST['2st-top-slide-text']);
            $metaboxes_data['3st-top-slide-text'] = wp_kses_post($_POST['3st-top-slide-text']);
            $metaboxes_data['4st-top-slide-text'] = wp_kses_post($_POST['4st-top-slide-text']);
            $metaboxes_data['1st-bottom-slide-title'] = wp_kses_post($_POST['1st-bottom-slide-title']);
            $metaboxes_data['1st-bottom-slide-text'] = wp_kses_post($_POST['1st-bottom-slide-text']);
            $metaboxes_data['2st-bottom-slide-title'] = wp_kses_post($_POST['2st-bottom-slide-title']);
            $metaboxes_data['2st-bottom-slide-text'] = wp_kses_post($_POST['2st-bottom-slide-text']);
            $metaboxes_data['3st-bottom-slide-title'] = wp_kses_post($_POST['3st-bottom-slide-title']);
            $metaboxes_data['3st-bottom-slide-text'] = wp_kses_post($_POST['3st-bottom-slide-text']);
            $metaboxes_data['4st-bottom-slide-title'] = wp_kses_post($_POST['4st-bottom-slide-title']);
            $metaboxes_data['4st-bottom-slide-text'] = wp_kses_post($_POST['4st-bottom-slide-text']);
            $metaboxes_data['5st-bottom-slide-title'] = wp_kses_post($_POST['5st-bottom-slide-title']);
            $metaboxes_data['5st-bottom-slide-text'] = wp_kses_post($_POST['5st-bottom-slide-text']);
            $metaboxes_data['6st-bottom-slide-title'] = wp_kses_post($_POST['6st-bottom-slide-title']);
            $metaboxes_data['6st-bottom-slide-text'] = wp_kses_post($_POST['6st-bottom-slide-text']);
            $metaboxes_data['7st-bottom-slide-title'] = wp_kses_post($_POST['7st-bottom-slide-title']);
            $metaboxes_data['7st-bottom-slide-text'] = wp_kses_post($_POST['7st-bottom-slide-text']);
            $metaboxes_data['8st-bottom-slide-title'] = wp_kses_post($_POST['8st-bottom-slide-title']);
            $metaboxes_data['8st-bottom-slide-text'] = wp_kses_post($_POST['8st-bottom-slide-text']);
            update_post_meta($post_id, 'franchise-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-projects.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['1st-slide-poster'] = wp_kses_post($_POST['1st-slide-poster']);
            $metaboxes_data['1st-slide-city'] = wp_kses_post($_POST['1st-slide-city']);
            $metaboxes_data['1st-slide-link-text'] = wp_kses_post($_POST['1st-slide-link-text']);
            $metaboxes_data['1st-slide-link'] = wp_kses_post($_POST['1st-slide-link']);
            $metaboxes_data['1st-slide-mp4'] = wp_kses_post($_POST['1st-slide-mp4']);
            $metaboxes_data['1st-slide-webm'] = wp_kses_post($_POST['1st-slide-webm']);
            $metaboxes_data['2st-slide-poster'] = wp_kses_post($_POST['2st-slide-poster']);
            $metaboxes_data['2st-slide-city'] = wp_kses_post($_POST['2st-slide-city']);
            $metaboxes_data['2st-slide-link-text'] = wp_kses_post($_POST['2st-slide-link-text']);
            $metaboxes_data['2st-slide-link'] = wp_kses_post($_POST['2st-slide-link']);
            $metaboxes_data['2st-slide-mp4'] = wp_kses_post($_POST['2st-slide-mp4']);
            $metaboxes_data['2st-slide-webm'] = wp_kses_post($_POST['2st-slide-webm']);
            $metaboxes_data['3st-slide-poster'] = wp_kses_post($_POST['3st-slide-poster']);
            $metaboxes_data['3st-slide-city'] = wp_kses_post($_POST['3st-slide-city']);
            $metaboxes_data['3st-slide-link-text'] = wp_kses_post($_POST['3st-slide-link-text']);
            $metaboxes_data['3st-slide-link'] = wp_kses_post($_POST['3st-slide-link']);
            $metaboxes_data['3st-slide-mp4'] = wp_kses_post($_POST['3st-slide-mp4']);
            $metaboxes_data['3st-slide-webm'] = wp_kses_post($_POST['3st-slide-webm']);
            $metaboxes_data['4st-slide-poster'] = wp_kses_post($_POST['4st-slide-poster']);
            $metaboxes_data['4st-slide-city'] = wp_kses_post($_POST['4st-slide-city']);
            $metaboxes_data['4st-slide-link-text'] = wp_kses_post($_POST['4st-slide-link-text']);
            $metaboxes_data['4st-slide-link'] = wp_kses_post($_POST['4st-slide-link']);
            $metaboxes_data['4st-slide-mp4'] = wp_kses_post($_POST['4st-slide-mp4']);
            $metaboxes_data['4st-slide-webm'] = wp_kses_post($_POST['4st-slide-webm']);
            $metaboxes_data['5st-slide-poster'] = wp_kses_post($_POST['5st-slide-poster']);
            $metaboxes_data['5st-slide-city'] = wp_kses_post($_POST['5st-slide-city']);
            $metaboxes_data['5st-slide-link-text'] = wp_kses_post($_POST['5st-slide-link-text']);
            $metaboxes_data['5st-slide-link'] = wp_kses_post($_POST['5st-slide-link']);
            $metaboxes_data['5st-slide-mp4'] = wp_kses_post($_POST['5st-slide-mp4']);
            $metaboxes_data['5st-slide-webm'] = wp_kses_post($_POST['5st-slide-webm']);
            update_post_meta($post_id, 'projects-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-presence.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['cities-top'] = wp_kses_post($_POST['cities-top']);
            $metaboxes_data['cities-bottom'] = wp_kses_post($_POST['cities-bottom']);
            update_post_meta($post_id, 'presence-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-pack.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['main-p'] = wp_kses_post($_POST['main-p']);
            $metaboxes_data['additional-p'] = wp_kses_post($_POST['additional-p']);
            $metaboxes_data['1st-slide-content'] = wp_kses_post($_POST['1st-slide-content']);
            $metaboxes_data['2st-slide-content'] = wp_kses_post($_POST['2st-slide-content']);
            $metaboxes_data['3st-slide-content'] = wp_kses_post($_POST['3st-slide-content']);
            $metaboxes_data['4st-slide-content'] = wp_kses_post($_POST['4st-slide-content']);
            $metaboxes_data['5st-slide-content'] = wp_kses_post($_POST['5st-slide-content']);
            $metaboxes_data['6st-slide-content'] = wp_kses_post($_POST['6st-slide-content']);
            $metaboxes_data['7st-slide-content'] = wp_kses_post($_POST['7st-slide-content']);
            $metaboxes_data['8st-slide-content'] = wp_kses_post($_POST['8st-slide-content']);
            update_post_meta($post_id, 'pack-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-rent.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['1st-elem-icon'] = wp_kses_post($_POST['1st-elem-icon']);
            $metaboxes_data['1st-elem-title'] = wp_kses_post($_POST['1st-elem-title']);
            $metaboxes_data['1st-elem-text'] = wp_kses_post($_POST['1st-elem-text']);
            $metaboxes_data['2st-elem-icon'] = wp_kses_post($_POST['2st-elem-icon']);
            $metaboxes_data['2st-elem-title'] = wp_kses_post($_POST['2st-elem-title']);
            $metaboxes_data['2st-elem-text'] = wp_kses_post($_POST['2st-elem-text']);
            $metaboxes_data['3st-elem-icon'] = wp_kses_post($_POST['3st-elem-icon']);
            $metaboxes_data['3st-elem-title'] = wp_kses_post($_POST['3st-elem-title']);
            $metaboxes_data['3st-elem-text'] = wp_kses_post($_POST['3st-elem-text']);
            $metaboxes_data['4st-elem-icon'] = wp_kses_post($_POST['4st-elem-icon']);
            $metaboxes_data['4st-elem-title'] = wp_kses_post($_POST['4st-elem-title']);
            $metaboxes_data['4st-elem-text'] = wp_kses_post($_POST['4st-elem-text']);
            $metaboxes_data['5st-elem-icon'] = wp_kses_post($_POST['5st-elem-icon']);
            $metaboxes_data['5st-elem-title'] = wp_kses_post($_POST['5st-elem-title']);
            $metaboxes_data['5st-elem-text'] = wp_kses_post($_POST['5st-elem-text']);
            $metaboxes_data['6st-elem-icon'] = wp_kses_post($_POST['6st-elem-icon']);
            $metaboxes_data['6st-elem-title'] = wp_kses_post($_POST['6st-elem-title']);
            $metaboxes_data['6st-elem-text'] = wp_kses_post($_POST['6st-elem-text']);
            $metaboxes_data['7st-elem-icon'] = wp_kses_post($_POST['7st-elem-icon']);
            $metaboxes_data['7st-elem-title'] = wp_kses_post($_POST['7st-elem-title']);
            $metaboxes_data['7st-elem-text'] = wp_kses_post($_POST['7st-elem-text']);
            $metaboxes_data['8st-elem-icon'] = wp_kses_post($_POST['8st-elem-icon']);
            $metaboxes_data['8st-elem-title'] = wp_kses_post($_POST['8st-elem-title']);
            $metaboxes_data['8st-elem-text'] = wp_kses_post($_POST['8st-elem-text']);
            update_post_meta($post_id, 'rent-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-feedback.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['link-text'] = sanitize_text_field($_POST['link-text']);
            $metaboxes_data['link-url'] = esc_url_raw($_POST['link-url']);
            update_post_meta($post_id, 'feedback-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-support.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['main-p'] = wp_kses_post($_POST['main-p']);
            $metaboxes_data['1st-elem-icon'] =  esc_url_raw($_POST['1st-elem-icon']);
            $metaboxes_data['1st-elem-text'] = wp_kses_post($_POST['1st-elem-text']);
            $metaboxes_data['2st-elem-icon'] =  esc_url_raw($_POST['2st-elem-icon']);
            $metaboxes_data['2st-elem-text'] = wp_kses_post($_POST['2st-elem-text']);
            $metaboxes_data['3st-elem-icon'] =  esc_url_raw($_POST['3st-elem-icon']);
            $metaboxes_data['3st-elem-text'] = wp_kses_post($_POST['3st-elem-text']);
            $metaboxes_data['4st-elem-icon'] =  esc_url_raw($_POST['4st-elem-icon']);
            $metaboxes_data['4st-elem-text'] = wp_kses_post($_POST['4st-elem-text']);
            $metaboxes_data['5st-elem-icon'] =  esc_url_raw($_POST['5st-elem-icon']);
            $metaboxes_data['5st-elem-text'] = wp_kses_post($_POST['5st-elem-text']);
            $metaboxes_data['6st-elem-icon'] =  esc_url_raw($_POST['6st-elem-icon']);
            $metaboxes_data['6st-elem-text'] = wp_kses_post($_POST['6st-elem-text']);
            $metaboxes_data['7st-elem-icon'] =  esc_url_raw($_POST['7st-elem-icon']);
            $metaboxes_data['7st-elem-text'] = wp_kses_post($_POST['7st-elem-text']);
            $metaboxes_data['8st-elem-icon'] =  esc_url_raw($_POST['8st-elem-icon']);
            $metaboxes_data['8st-elem-text'] = wp_kses_post($_POST['8st-elem-text']);
            update_post_meta($post_id, 'support-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-patronage.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['1st-elem-icon'] =  esc_url_raw($_POST['1st-elem-icon']);
            $metaboxes_data['1st-elem-text'] = wp_kses_post($_POST['1st-elem-text']);
            $metaboxes_data['2st-elem-icon'] =  esc_url_raw($_POST['2st-elem-icon']);
            $metaboxes_data['2st-elem-text'] = wp_kses_post($_POST['2st-elem-text']);
            $metaboxes_data['3st-elem-icon'] =  esc_url_raw($_POST['3st-elem-icon']);
            $metaboxes_data['3st-elem-text'] = wp_kses_post($_POST['3st-elem-text']);
            $metaboxes_data['4st-elem-icon'] =  esc_url_raw($_POST['4st-elem-icon']);
            $metaboxes_data['4st-elem-text'] = wp_kses_post($_POST['4st-elem-text']);
            $metaboxes_data['5st-elem-icon'] =  esc_url_raw($_POST['5st-elem-icon']);
            $metaboxes_data['5st-elem-text'] = wp_kses_post($_POST['5st-elem-text']);
            $metaboxes_data['6st-elem-icon'] =  esc_url_raw($_POST['6st-elem-icon']);
            $metaboxes_data['6st-elem-text'] = wp_kses_post($_POST['6st-elem-text']);
            $metaboxes_data['7st-elem-icon'] =  esc_url_raw($_POST['7st-elem-icon']);
            $metaboxes_data['7st-elem-text'] = wp_kses_post($_POST['7st-elem-text']);
            $metaboxes_data['8st-elem-icon'] =  esc_url_raw($_POST['8st-elem-icon']);
            $metaboxes_data['8st-elem-text'] = wp_kses_post($_POST['8st-elem-text']);
            update_post_meta($post_id, 'patronage-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-to-know.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['video-poster'] = esc_url_raw($_POST['video-poster']);
            $metaboxes_data['video-mp4'] =  esc_url_raw($_POST['video-mp4']);
            $metaboxes_data['video-webm'] =  esc_url_raw($_POST['video-webm']);
            update_post_meta($post_id, 'to-know-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-get-plan.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['main-p'] = wp_kses_post($_POST['main-p']);
            update_post_meta($post_id, 'get-plan-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-footer.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['button-text'] = sanitize_text_field($_POST['button-text']);
            $metaboxes_data['1st-elem-content'] = wp_kses_post($_POST['1st-elem-content']);
            $metaboxes_data['2st-elem-content'] = wp_kses_post($_POST['2st-elem-content']);
            $metaboxes_data['3st-elem-content'] = wp_kses_post($_POST['3st-elem-content']);
            $metaboxes_data['4st-elem-content'] = wp_kses_post($_POST['4st-elem-content']);
            $metaboxes_data['5st-elem-content'] = wp_kses_post($_POST['5st-elem-content']);
            $metaboxes_data['6st-elem-content'] = wp_kses_post($_POST['6st-elem-content']);
            $metaboxes_data['7st-elem-content'] = wp_kses_post($_POST['7st-elem-content']);
            $metaboxes_data['8st-elem-content'] = wp_kses_post($_POST['8st-elem-content']);
            $metaboxes_data['9st-elem-content'] = wp_kses_post($_POST['9st-elem-content']);
            $metaboxes_data['10st-elem-content'] = wp_kses_post($_POST['10st-elem-content']);
            $metaboxes_data['11st-elem-content'] = wp_kses_post($_POST['11st-elem-content']);
            $metaboxes_data['12st-elem-content'] = wp_kses_post($_POST['12st-elem-content']);
            $metaboxes_data['copy-text'] = wp_kses_post($_POST['copy-text']);
            update_post_meta($post_id, 'footer-metaboxes', $metaboxes_data);
        }


        $tech_slider_example_metaboxes['main-img'] = esc_url_raw($_POST['main-img']);
        $tech_slider_example_metaboxes['text'] = sanitize_text_field($_POST['text']);
        $tech_slider_example_metaboxes['link'] = esc_url_raw($_POST['link']);
        update_post_meta($post_id, 'tech-slider-example-metaboxes', $tech_slider_example_metaboxes);

        $youtube_feedback_metaboxes['link'] = esc_url_raw($_POST['link']);
        update_post_meta($post_id, 'youtube-feedback-metaboxes', $youtube_feedback_metaboxes);
        
        // $mobile_example_metaboxes['main-img'] = esc_url_raw($_POST['main-img']);
        // update_post_meta($post_id, 'mobile-example-metaboxes', $mobile_example_metaboxes);
        

    }
}




function display_entry_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'entry-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для Вводного раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое Вводного раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной параграф</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-p" cols="45" rows="4"><?php if (isset($metaboxes_data['main-p'])) echo $metaboxes_data['main-p']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст кнопки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="button-text" value="<?php if (isset($metaboxes_data['button-text'])) echo $metaboxes_data['button-text']; ?>"></p>
            </div>
        </div>
    </div>
    <?php
}




function display_tech_slider_example_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'tech-slider-example-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение техники</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="main-img" value="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>">
                <input class="imgTitle" type="hidden" name="img-title"
                       value="<?php if (isset($metaboxes_data['main-img-title'])) echo $metaboxes_data['main-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст под изображением (название техники)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="text" value="<?php if (isset($metaboxes_data['text'])) echo $metaboxes_data['text']; ?>"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Адрес ссылки, по которой будет осуществлен переход при клике по слайду</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="link" value="<?php if (isset($metaboxes_data['link'])) echo $metaboxes_data['link']; ?>"></p>
            </div>
        </div>
    </div>
    <?php
}




function display_stat_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'stat-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для 2го раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое 2го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок (используйте шорткод [yellow][/yellow], чтобы выделить содержимое внутри желтым цветом)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 1го элемента списка 2го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок 1го элемента (используйте шорткод [rub], если хотите отобразить иконку рубля) (оставьте заголовок пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-elem-title'])) echo $metaboxes_data['1st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (1й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['1st-elem-icon'])) echo $metaboxes_data['1st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="1st-elem-icon" value="<?php if (isset($metaboxes_data['1st-elem-icon'])) echo $metaboxes_data['1st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="1st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['1st-elem-img-title'])) echo $metaboxes_data['1st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (1й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-elem-text'])) echo $metaboxes_data['1st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 2го элемента списка 2го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок 2го элемента (используйте шорткод [rub], если хотите отобразить иконку рубля) (оставьте заголовок пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-elem-title'])) echo $metaboxes_data['2st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (2й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['2st-elem-icon'])) echo $metaboxes_data['2st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="2st-elem-icon" value="<?php if (isset($metaboxes_data['2st-elem-icon'])) echo $metaboxes_data['2st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="2st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['2st-elem-img-title'])) echo $metaboxes_data['2st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (2й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-elem-text'])) echo $metaboxes_data['2st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 3го элемента списка 2го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок 3го элемента (используйте шорткод [rub], если хотите отобразить иконку рубля) (оставьте заголовок пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-elem-title'])) echo $metaboxes_data['3st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (3й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['3st-elem-icon'])) echo $metaboxes_data['3st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="3st-elem-icon" value="<?php if (isset($metaboxes_data['3st-elem-icon'])) echo $metaboxes_data['3st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="3st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['3st-elem-img-title'])) echo $metaboxes_data['3st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (3й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-elem-text'])) echo $metaboxes_data['3st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 4го элемента списка 2го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок 4го элемента (используйте шорткод [rub], если хотите отобразить иконку рубля) (оставьте заголовок пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-elem-title'])) echo $metaboxes_data['4st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (4й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['4st-elem-icon'])) echo $metaboxes_data['4st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="4st-elem-icon" value="<?php if (isset($metaboxes_data['4st-elem-icon'])) echo $metaboxes_data['4st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="4st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['4st-elem-img-title'])) echo $metaboxes_data['4st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (4й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-elem-text'])) echo $metaboxes_data['4st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 5го элемента списка 2го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок 5го элемента (используйте шорткод [rub], если хотите отобразить иконку рубля) (оставьте заголовок пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-elem-title'])) echo $metaboxes_data['5st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (5й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['5st-elem-icon'])) echo $metaboxes_data['5st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="5st-elem-icon" value="<?php if (isset($metaboxes_data['5st-elem-icon'])) echo $metaboxes_data['5st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="5st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['5st-elem-img-title'])) echo $metaboxes_data['5st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (5й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-elem-text'])) echo $metaboxes_data['5st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 6го элемента списка 2го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок 6го элемента (используйте шорткод [rub], если хотите отобразить иконку рубля) (оставьте заголовок пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="6st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['6st-elem-title'])) echo $metaboxes_data['6st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (6й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['6st-elem-icon'])) echo $metaboxes_data['6st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="6st-elem-icon" value="<?php if (isset($metaboxes_data['6st-elem-icon'])) echo $metaboxes_data['6st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="6st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['6st-elem-img-title'])) echo $metaboxes_data['6st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (6й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="6st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['6st-elem-text'])) echo $metaboxes_data['6st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 7го элемента списка 2го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок 7го элемента (используйте шорткод [rub], если хотите отобразить иконку рубля) (оставьте заголовок пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="7st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['7st-elem-title'])) echo $metaboxes_data['7st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (7й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['7st-elem-icon'])) echo $metaboxes_data['7st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="7st-elem-icon" value="<?php if (isset($metaboxes_data['7st-elem-icon'])) echo $metaboxes_data['7st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="7st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['7st-elem-img-title'])) echo $metaboxes_data['7st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (7й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="7st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['7st-elem-text'])) echo $metaboxes_data['7st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 8го элемента списка 2го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок 8го элемента (используйте шорткод [rub], если хотите отобразить иконку рубля) (оставьте заголовок пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="8st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['8st-elem-title'])) echo $metaboxes_data['8st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (8й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['8st-elem-icon'])) echo $metaboxes_data['8st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="8st-elem-icon" value="<?php if (isset($metaboxes_data['8st-elem-icon'])) echo $metaboxes_data['8st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="8st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['8st-elem-img-title'])) echo $metaboxes_data['8st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (8й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="8st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['8st-elem-text'])) echo $metaboxes_data['8st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}




function display_calc_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'calc-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для третьего раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое третьего раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}




function display_begin_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'begin-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для четвертого раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое четвертого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок (используйте шорткод [yellow][/yellow], чтобы выделить содержимое внутри желтым цветом)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной параграф</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-p" cols="45" rows="4"><?php if (isset($metaboxes_data['main-p'])) echo $metaboxes_data['main-p']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 1го элемента списка 4го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (1й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['1st-elem-icon'])) echo $metaboxes_data['1st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="1st-elem-icon" value="<?php if (isset($metaboxes_data['1st-elem-icon'])) echo $metaboxes_data['1st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="1st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['1st-elem-img-title'])) echo $metaboxes_data['1st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался) (1й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-elem-text'])) echo $metaboxes_data['1st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 2го элемента списка 4го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (2й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['2st-elem-icon'])) echo $metaboxes_data['2st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="2st-elem-icon" value="<?php if (isset($metaboxes_data['2st-elem-icon'])) echo $metaboxes_data['2st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="2st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['2st-elem-img-title'])) echo $metaboxes_data['2st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался) (2й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-elem-text'])) echo $metaboxes_data['2st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 3го элемента списка 4го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (3й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['3st-elem-icon'])) echo $metaboxes_data['3st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="3st-elem-icon" value="<?php if (isset($metaboxes_data['3st-elem-icon'])) echo $metaboxes_data['3st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="3st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['3st-elem-img-title'])) echo $metaboxes_data['3st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался) (3й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-elem-text'])) echo $metaboxes_data['3st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 4го элемента списка 4го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (4й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['4st-elem-icon'])) echo $metaboxes_data['4st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="4st-elem-icon" value="<?php if (isset($metaboxes_data['4st-elem-icon'])) echo $metaboxes_data['4st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="4st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['4st-elem-img-title'])) echo $metaboxes_data['4st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался) (4й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-elem-text'])) echo $metaboxes_data['4st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 5го элемента списка 4го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (5й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['5st-elem-icon'])) echo $metaboxes_data['5st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="5st-elem-icon" value="<?php if (isset($metaboxes_data['5st-elem-icon'])) echo $metaboxes_data['5st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="5st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['5st-elem-img-title'])) echo $metaboxes_data['5st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался) (5й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-elem-text'])) echo $metaboxes_data['5st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 6го элемента списка 4го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (6й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['6st-elem-icon'])) echo $metaboxes_data['6st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="6st-elem-icon" value="<?php if (isset($metaboxes_data['6st-elem-icon'])) echo $metaboxes_data['6st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="6st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['6st-elem-img-title'])) echo $metaboxes_data['6st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался) (6й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="6st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['6st-elem-text'])) echo $metaboxes_data['6st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 7го элемента списка 4го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (7й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['7st-elem-icon'])) echo $metaboxes_data['7st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="7st-elem-icon" value="<?php if (isset($metaboxes_data['7st-elem-icon'])) echo $metaboxes_data['7st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="7st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['7st-elem-img-title'])) echo $metaboxes_data['7st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался) (7й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="7st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['7st-elem-text'])) echo $metaboxes_data['7st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 8го элемента списка 4го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (8й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['8st-elem-icon'])) echo $metaboxes_data['8st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="8st-elem-icon" value="<?php if (isset($metaboxes_data['8st-elem-icon'])) echo $metaboxes_data['8st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="8st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['8st-elem-img-title'])) echo $metaboxes_data['8st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался) (8й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="8st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['8st-elem-text'])) echo $metaboxes_data['8st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}




function display_franchise_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'franchise-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для пятого раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое пятого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок (используйте шорткод [yellow][/yellow], чтобы выделить содержимое внутри желтым цветом)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="form-group container">
        <h5>Верхний слайдер пятого раздела</h5><br><br>
    </div>
    <div class="form-group container">
        <h5>Содержимое 1го слайда верхнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд отображался) (1й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-top-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-top-slide-text'])) echo $metaboxes_data['1st-top-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 2го слайда верхнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд отображался) (2й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-top-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-top-slide-text'])) echo $metaboxes_data['2st-top-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 3го слайда верхнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд отображался) (3й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-top-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-top-slide-text'])) echo $metaboxes_data['3st-top-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 4го слайда верхнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд отображался) (4й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-top-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-top-slide-text'])) echo $metaboxes_data['4st-top-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="form-group container">
        <h5>Нижний слайдер пятого раздела</h5><br><br>
    </div>
    <div class="form-group container">
        <h5>Содержимое 1го слайда нижнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок слайда (используйте шорткод [chevron-left] для создания символа "<") (используйте шорткод [small][/small] для создания мелкого текста) (оставьте пустым, если не хотите, чтобы слайд отображался) (1й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-bottom-slide-title" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-bottom-slide-title'])) echo $metaboxes_data['1st-bottom-slide-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (1й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-bottom-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-bottom-slide-text'])) echo $metaboxes_data['1st-bottom-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 2го слайда нижнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок слайда (используйте шорткод [chevron-left] для создания символа "<") (используйте шорткод [small][/small] для создания мелкого текста) (оставьте пустым, если не хотите, чтобы слайд отображался) (2й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-bottom-slide-title" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-bottom-slide-title'])) echo $metaboxes_data['2st-bottom-slide-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (2й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-bottom-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-bottom-slide-text'])) echo $metaboxes_data['2st-bottom-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 3го слайда нижнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок слайда (используйте шорткод [chevron-left] для создания символа "<") (используйте шорткод [small][/small] для создания мелкого текста) (оставьте пустым, если не хотите, чтобы слайд отображался) (3й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-bottom-slide-title" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-bottom-slide-title'])) echo $metaboxes_data['3st-bottom-slide-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (3й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-bottom-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-bottom-slide-text'])) echo $metaboxes_data['3st-bottom-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 4го слайда нижнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок слайда (используйте шорткод [chevron-left] для создания символа "<") (используйте шорткод [small][/small] для создания мелкого текста) (оставьте пустым, если не хотите, чтобы слайд отображался) (4й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-bottom-slide-title" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-bottom-slide-title'])) echo $metaboxes_data['4st-bottom-slide-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (4й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-bottom-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-bottom-slide-text'])) echo $metaboxes_data['4st-bottom-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 5го слайда нижнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок слайда (используйте шорткод [chevron-left] для создания символа "<") (используйте шорткод [small][/small] для создания мелкого текста) (оставьте пустым, если не хотите, чтобы слайд отображался) (5й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-bottom-slide-title" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-bottom-slide-title'])) echo $metaboxes_data['5st-bottom-slide-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (5й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-bottom-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-bottom-slide-text'])) echo $metaboxes_data['5st-bottom-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 6го слайда нижнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок слайда (используйте шорткод [chevron-left] для создания символа "<") (используйте шорткод [small][/small] для создания мелкого текста) (оставьте пустым, если не хотите, чтобы слайд отображался) (6й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="6st-bottom-slide-title" cols="45" rows="4"><?php if (isset($metaboxes_data['6st-bottom-slide-title'])) echo $metaboxes_data['6st-bottom-slide-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (6й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="6st-bottom-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['6st-bottom-slide-text'])) echo $metaboxes_data['6st-bottom-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 7го слайда нижнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок слайда (используйте шорткод [chevron-left] для создания символа "<") (используйте шорткод [small][/small] для создания мелкого текста) (оставьте пустым, если не хотите, чтобы слайд отображался) (7й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="7st-bottom-slide-title" cols="45" rows="4"><?php if (isset($metaboxes_data['7st-bottom-slide-title'])) echo $metaboxes_data['7st-bottom-slide-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (7й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="7st-bottom-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['7st-bottom-slide-text'])) echo $metaboxes_data['7st-bottom-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 8го слайда нижнего слайдера 5го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок слайда (используйте шорткод [chevron-left] для создания символа "<") (оставьте пустым, если не хотите, чтобы слайд отображался) (8й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="8st-bottom-slide-title" cols="45" rows="4"><?php if (isset($metaboxes_data['8st-bottom-slide-title'])) echo $metaboxes_data['8st-bottom-slide-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (8й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="8st-bottom-slide-text" cols="45" rows="4"><?php if (isset($metaboxes_data['8st-bottom-slide-text'])) echo $metaboxes_data['8st-bottom-slide-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}




function display_projects_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'projects-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для шестого раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое шестого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок (используйте шорткод [yellow][/yellow], чтобы выделить содержимое внутри желтым цветом)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="form-group container">
        <h5>Слайдер шестого раздела</h5><br><br>
    </div>
    <div class="form-group container">
        <h5>Содержимое 1го слайда 6го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Постер (скриншот видео) (1й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['1st-slide-poster'])) echo $metaboxes_data['1st-slide-poster']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="1st-slide-poster" value="<?php if (isset($metaboxes_data['1st-slide-poster'])) echo $metaboxes_data['1st-slide-poster']; ?>">
                <input class="imgTitle" type="hidden" name="1st-slide-poster-title"
                       value="<?php if (isset($metaboxes_data['1st-slide-poster-title'])) echo $metaboxes_data['1st-slide-poster-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Город (1й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-slide-city" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-slide-city'])) echo $metaboxes_data['1st-slide-city']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст ссылки (1й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-slide-link-text" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-slide-link-text'])) echo $metaboxes_data['1st-slide-link-text']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>URL (адрес) ссылки (1й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-slide-link" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-slide-link'])) echo $metaboxes_data['1st-slide-link']; ?></textarea></p>
            </div>
        </div>
        <br><br>
        <h6>Видео (укажите хотя бы для одного формата, чтобы отобразить весь слайд на сайте)</h6>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Видео в формате MP4 (1й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
                <video class="videoPrev" style="width: 50%; text-align: center">
                    <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['1st-slide-mp4'])) echo $metaboxes_data['1st-slide-mp4']; ?>" type="video/mp4">
                </video>
                <br>
                <input class="videoUrl" type="text" placeholder="Видео" name="1st-slide-mp4" value="<?php if (isset($metaboxes_data['1st-slide-mp4'])) echo $metaboxes_data['1st-slide-mp4']; ?>">
                <input class="videoTitle" type="hidden" name="1st-slide-mp4-title"
                       value="<?php if (isset($metaboxes_data['1st-slide-mp4-title'])) echo $metaboxes_data['1st-slide-mp4-title']; ?>">
                <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Видео в формате WEBM (1й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
                <video class="videoPrev" style="width: 50%; text-align: center">
                    <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['1st-slide-webm'])) echo $metaboxes_data['1st-slide-webm']; ?>" type="video/webm">
                </video>
                <br>
                <input class="videoUrl" type="text" placeholder="Видео" name="1st-slide-webm" value="<?php if (isset($metaboxes_data['1st-slide-webm'])) echo $metaboxes_data['1st-slide-webm']; ?>">
                <input class="videoTitle" type="hidden" name="1st-slide-webm-title"
                       value="<?php if (isset($metaboxes_data['1st-slide-webm-title'])) echo $metaboxes_data['1st-slide-webm-title']; ?>">
                <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 2го слайда 6го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Постер (скриншот видео) (2й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['2st-slide-poster'])) echo $metaboxes_data['2st-slide-poster']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="2st-slide-poster" value="<?php if (isset($metaboxes_data['2st-slide-poster'])) echo $metaboxes_data['2st-slide-poster']; ?>">
                <input class="imgTitle" type="hidden" name="2st-slide-poster-title"
                       value="<?php if (isset($metaboxes_data['2st-slide-poster-title'])) echo $metaboxes_data['2st-slide-poster-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Город (2й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-slide-city" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-slide-city'])) echo $metaboxes_data['2st-slide-city']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст ссылки (2й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-slide-link-text" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-slide-link-text'])) echo $metaboxes_data['2st-slide-link-text']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>URL (адрес) ссылки (2й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-slide-link" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-slide-link'])) echo $metaboxes_data['2st-slide-link']; ?></textarea></p>
            </div>
        </div>
        <br><br>
        <h6>Видео (укажите хотя бы для одного формата, чтобы отобразить весь слайд на сайте)</h6>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Видео в формате MP4 (2й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
                <video class="videoPrev" style="width: 50%; text-align: center">
                    <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['2st-slide-mp4'])) echo $metaboxes_data['2st-slide-mp4']; ?>" type="video/mp4">
                </video>
                <br>
                <input class="videoUrl" type="text" placeholder="Видео" name="2st-slide-mp4" value="<?php if (isset($metaboxes_data['2st-slide-mp4'])) echo $metaboxes_data['2st-slide-mp4']; ?>">
                <input class="videoTitle" type="hidden" name="2st-slide-mp4-title"
                       value="<?php if (isset($metaboxes_data['2st-slide-mp4-title'])) echo $metaboxes_data['2st-slide-mp4-title']; ?>">
                <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Видео в формате WEBM (2й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
                <video class="videoPrev" style="width: 50%; text-align: center">
                    <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['2st-slide-webm'])) echo $metaboxes_data['2st-slide-webm']; ?>" type="video/webm">
                </video>
                <br>
                <input class="videoUrl" type="text" placeholder="Видео" name="2st-slide-webm" value="<?php if (isset($metaboxes_data['2st-slide-webm'])) echo $metaboxes_data['2st-slide-webm']; ?>">
                <input class="videoTitle" type="hidden" name="2st-slide-webm-title"
                       value="<?php if (isset($metaboxes_data['2st-slide-webm-title'])) echo $metaboxes_data['2st-slide-webm-title']; ?>">
                <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 3го слайда 6го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Постер (скриншот видео) (3й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['3st-slide-poster'])) echo $metaboxes_data['3st-slide-poster']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="3st-slide-poster" value="<?php if (isset($metaboxes_data['3st-slide-poster'])) echo $metaboxes_data['3st-slide-poster']; ?>">
                <input class="imgTitle" type="hidden" name="3st-slide-poster-title"
                       value="<?php if (isset($metaboxes_data['3st-slide-poster-title'])) echo $metaboxes_data['3st-slide-poster-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Город (3й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-slide-city" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-slide-city'])) echo $metaboxes_data['3st-slide-city']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст ссылки (3й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-slide-link-text" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-slide-link-text'])) echo $metaboxes_data['3st-slide-link-text']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>URL (адрес) ссылки (3й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-slide-link" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-slide-link'])) echo $metaboxes_data['3st-slide-link']; ?></textarea></p>
            </div>
        </div>
        <br><br>
        <h6>Видео (укажите хотя бы для одного формата, чтобы отобразить весь слайд на сайте)</h6>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Видео в формате MP4 (3й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
                <video class="videoPrev" style="width: 50%; text-align: center">
                    <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['3st-slide-mp4'])) echo $metaboxes_data['3st-slide-mp4']; ?>" type="video/mp4">
                </video>
                <br>
                <input class="videoUrl" type="text" placeholder="Видео" name="3st-slide-mp4" value="<?php if (isset($metaboxes_data['3st-slide-mp4'])) echo $metaboxes_data['3st-slide-mp4']; ?>">
                <input class="videoTitle" type="hidden" name="3st-slide-mp4-title"
                       value="<?php if (isset($metaboxes_data['3st-slide-mp4-title'])) echo $metaboxes_data['3st-slide-mp4-title']; ?>">
                <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Видео в формате WEBM (3й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
                <video class="videoPrev" style="width: 50%; text-align: center">
                    <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['3st-slide-webm'])) echo $metaboxes_data['3st-slide-webm']; ?>" type="video/webm">
                </video>
                <br>
                <input class="videoUrl" type="text" placeholder="Видео" name="3st-slide-webm" value="<?php if (isset($metaboxes_data['3st-slide-webm'])) echo $metaboxes_data['3st-slide-webm']; ?>">
                <input class="videoTitle" type="hidden" name="3st-slide-webm-title"
                       value="<?php if (isset($metaboxes_data['3st-slide-webm-title'])) echo $metaboxes_data['3st-slide-webm-title']; ?>">
                <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 4го слайда 6го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Постер (скриншот видео) (4й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['4st-slide-poster'])) echo $metaboxes_data['4st-slide-poster']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="4st-slide-poster" value="<?php if (isset($metaboxes_data['4st-slide-poster'])) echo $metaboxes_data['4st-slide-poster']; ?>">
                <input class="imgTitle" type="hidden" name="4st-slide-poster-title"
                       value="<?php if (isset($metaboxes_data['4st-slide-poster-title'])) echo $metaboxes_data['4st-slide-poster-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Город (4й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-slide-city" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-slide-city'])) echo $metaboxes_data['4st-slide-city']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст ссылки (4й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-slide-link-text" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-slide-link-text'])) echo $metaboxes_data['4st-slide-link-text']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>URL (адрес) ссылки (4й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-slide-link" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-slide-link'])) echo $metaboxes_data['4st-slide-link']; ?></textarea></p>
            </div>
        </div>
        <br><br>
        <h6>Видео (укажите хотя бы для одного формата, чтобы отобразить весь слайд на сайте)</h6>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Видео в формате MP4 (4й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
                <video class="videoPrev" style="width: 50%; text-align: center">
                    <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['4st-slide-mp4'])) echo $metaboxes_data['4st-slide-mp4']; ?>" type="video/mp4">
                </video>
                <br>
                <input class="videoUrl" type="text" placeholder="Видео" name="4st-slide-mp4" value="<?php if (isset($metaboxes_data['4st-slide-mp4'])) echo $metaboxes_data['4st-slide-mp4']; ?>">
                <input class="videoTitle" type="hidden" name="4st-slide-mp4-title"
                       value="<?php if (isset($metaboxes_data['4st-slide-mp4-title'])) echo $metaboxes_data['4st-slide-mp4-title']; ?>">
                <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Видео в формате WEBM (4й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
                <video class="videoPrev" style="width: 50%; text-align: center">
                    <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['4st-slide-webm'])) echo $metaboxes_data['4st-slide-webm']; ?>" type="video/webm">
                </video>
                <br>
                <input class="videoUrl" type="text" placeholder="Видео" name="4st-slide-webm" value="<?php if (isset($metaboxes_data['4st-slide-webm'])) echo $metaboxes_data['4st-slide-webm']; ?>">
                <input class="videoTitle" type="hidden" name="4st-slide-webm-title"
                       value="<?php if (isset($metaboxes_data['4st-slide-webm-title'])) echo $metaboxes_data['4st-slide-webm-title']; ?>">
                <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 5го слайда 6го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Постер (скриншот видео) (5й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['5st-slide-poster'])) echo $metaboxes_data['5st-slide-poster']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="5st-slide-poster" value="<?php if (isset($metaboxes_data['5st-slide-poster'])) echo $metaboxes_data['5st-slide-poster']; ?>">
                <input class="imgTitle" type="hidden" name="5st-slide-poster-title"
                       value="<?php if (isset($metaboxes_data['5st-slide-poster-title'])) echo $metaboxes_data['5st-slide-poster-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Город (5й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-slide-city" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-slide-city'])) echo $metaboxes_data['5st-slide-city']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст ссылки (5й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-slide-link-text" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-slide-link-text'])) echo $metaboxes_data['5st-slide-link-text']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>URL (адрес) ссылки (5й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-slide-link" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-slide-link'])) echo $metaboxes_data['5st-slide-link']; ?></textarea></p>
            </div>
        </div>
        <br><br>
        <h6>Видео (укажите хотя бы для одного формата, чтобы отобразить весь слайд на сайте)</h6>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Видео в формате MP4 (5й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
                <video class="videoPrev" style="width: 50%; text-align: center">
                    <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['5st-slide-mp4'])) echo $metaboxes_data['5st-slide-mp4']; ?>" type="video/mp4">
                </video>
                <br>
                <input class="videoUrl" type="text" placeholder="Видео" name="5st-slide-mp4" value="<?php if (isset($metaboxes_data['5st-slide-mp4'])) echo $metaboxes_data['5st-slide-mp4']; ?>">
                <input class="videoTitle" type="hidden" name="5st-slide-mp4-title"
                       value="<?php if (isset($metaboxes_data['5st-slide-mp4-title'])) echo $metaboxes_data['5st-slide-mp4-title']; ?>">
                <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Видео в формате WEBM (5й слайд)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
                <video class="videoPrev" style="width: 50%; text-align: center">
                    <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['5st-slide-webm'])) echo $metaboxes_data['5st-slide-webm']; ?>" type="video/webm">
                </video>
                <br>
                <input class="videoUrl" type="text" placeholder="Видео" name="5st-slide-webm" value="<?php if (isset($metaboxes_data['5st-slide-webm'])) echo $metaboxes_data['5st-slide-webm']; ?>">
                <input class="videoTitle" type="hidden" name="5st-slide-webm-title"
                       value="<?php if (isset($metaboxes_data['5st-slide-webm-title'])) echo $metaboxes_data['5st-slide-webm-title']; ?>">
                <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
    </div>
    <?php
}




function display_presence_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'presence-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для седьмого раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое седьмого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок (используйте шорткод [yellow][/yellow], чтобы выделить содержимое внутри желтым цветом)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="form-group container">
        <h5>Города присутствия</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Верхний список (используйте тег &lt;li&gt;&lt;/li&gt; для каждого города)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="cities-top" cols="45" rows="4"><?php if (isset($metaboxes_data['cities-top'])) echo $metaboxes_data['cities-top']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Нижний список (используйте тег &lt;li&gt;&lt;/li&gt; для каждого города)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="cities-bottom" cols="45" rows="4"><?php if (isset($metaboxes_data['cities-bottom'])) echo $metaboxes_data['cities-bottom']; ?></textarea></p>
            </div>
        </div>
    </div>
    <br><br>
    <?php
}




function display_pack_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'pack-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для восьмого раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое восьмого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок (используйте шорткод [yellow][/yellow], чтобы выделить содержимое внутри желтым цветом)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст справа от Главного заголовка (десктоп)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-p" cols="45" rows="4"><?php if (isset($metaboxes_data['main-p'])) echo $metaboxes_data['main-p']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст снизу от Главного заголовка (десктоп)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="additional-p" cols="45" rows="4"><?php if (isset($metaboxes_data['additional-p'])) echo $metaboxes_data['additional-p']; ?></textarea></p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="form-group container">
        <h5>Слайдер восьмого раздела</h5><br><br>
    </div>
    <div class="form-group container">
        <h5>Содержимое 1го слайда 8го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд был отображен на сайте) (допустимо использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-slide-content" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-slide-content'])) echo $metaboxes_data['1st-slide-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 2го слайда 8го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд был отображен на сайте) (допустимо использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-slide-content" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-slide-content'])) echo $metaboxes_data['2st-slide-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 3го слайда 8го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд был отображен на сайте) (допустимо использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-slide-content" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-slide-content'])) echo $metaboxes_data['3st-slide-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 4го слайда 8го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд был отображен на сайте) (допустимо использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-slide-content" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-slide-content'])) echo $metaboxes_data['4st-slide-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 5го слайда 8го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд был отображен на сайте) (допустимо использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-slide-content" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-slide-content'])) echo $metaboxes_data['5st-slide-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 6го слайда 8го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд был отображен на сайте) (допустимо использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="6st-slide-content" cols="45" rows="4"><?php if (isset($metaboxes_data['6st-slide-content'])) echo $metaboxes_data['6st-slide-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 7го слайда 8го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд был отображен на сайте) (допустимо использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="7st-slide-content" cols="45" rows="4"><?php if (isset($metaboxes_data['7st-slide-content'])) echo $metaboxes_data['7st-slide-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 8го слайда 8го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст слайда (оставьте пустым, если не хотите, чтобы слайд был отображен на сайте) (допустимо использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="8st-slide-content" cols="45" rows="4"><?php if (isset($metaboxes_data['8st-slide-content'])) echo $metaboxes_data['8st-slide-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}




function display_rent_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'rent-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для девятого раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое девятого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок (используйте шорткод [yellow][/yellow], чтобы выделить содержимое внутри желтым цветом)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="form-group container">
        <h5>Список девятого раздела</h5><br><br>
    </div>
    <div class="form-group container">
        <h5>Содержимое 1го элемента списка 9го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (1й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['1st-elem-icon'])) echo $metaboxes_data['1st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="1st-elem-icon" value="<?php if (isset($metaboxes_data['1st-elem-icon'])) echo $metaboxes_data['1st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="1st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['1st-elem-img-title'])) echo $metaboxes_data['1st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок (оставьте пустым, если не хотите, чтобы элемент был отображен на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-elem-title'])) echo $metaboxes_data['1st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст параграфа под заголовком</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-elem-text'])) echo $metaboxes_data['1st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 2го элемента списка 9го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (2й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['2st-elem-icon'])) echo $metaboxes_data['2st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="2st-elem-icon" value="<?php if (isset($metaboxes_data['2st-elem-icon'])) echo $metaboxes_data['2st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="2st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['2st-elem-img-title'])) echo $metaboxes_data['2st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок (оставьте пустым, если не хотите, чтобы элемент был отображен на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-elem-title'])) echo $metaboxes_data['2st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст параграфа под заголовком</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-elem-text'])) echo $metaboxes_data['2st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 3го элемента списка 9го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (3й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['3st-elem-icon'])) echo $metaboxes_data['3st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="3st-elem-icon" value="<?php if (isset($metaboxes_data['3st-elem-icon'])) echo $metaboxes_data['3st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="3st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['3st-elem-img-title'])) echo $metaboxes_data['3st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок (оставьте пустым, если не хотите, чтобы элемент был отображен на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-elem-title'])) echo $metaboxes_data['3st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст параграфа под заголовком</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-elem-text'])) echo $metaboxes_data['3st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 4го элемента списка 9го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (4й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['4st-elem-icon'])) echo $metaboxes_data['4st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="4st-elem-icon" value="<?php if (isset($metaboxes_data['4st-elem-icon'])) echo $metaboxes_data['4st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="4st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['4st-elem-img-title'])) echo $metaboxes_data['4st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок (оставьте пустым, если не хотите, чтобы элемент был отображен на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-elem-title'])) echo $metaboxes_data['4st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст параграфа под заголовком</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-elem-text'])) echo $metaboxes_data['4st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 5го элемента списка 9го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (5й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['5st-elem-icon'])) echo $metaboxes_data['5st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="5st-elem-icon" value="<?php if (isset($metaboxes_data['5st-elem-icon'])) echo $metaboxes_data['5st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="5st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['5st-elem-img-title'])) echo $metaboxes_data['5st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок (оставьте пустым, если не хотите, чтобы элемент был отображен на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-elem-title'])) echo $metaboxes_data['5st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст параграфа под заголовком</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-elem-text'])) echo $metaboxes_data['5st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 6го элемента списка 9го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (6й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['6st-elem-icon'])) echo $metaboxes_data['6st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="6st-elem-icon" value="<?php if (isset($metaboxes_data['6st-elem-icon'])) echo $metaboxes_data['6st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="6st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['6st-elem-img-title'])) echo $metaboxes_data['6st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок (оставьте пустым, если не хотите, чтобы элемент был отображен на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="6st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['6st-elem-title'])) echo $metaboxes_data['6st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст параграфа под заголовком</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="6st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['6st-elem-text'])) echo $metaboxes_data['6st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 7го элемента списка 9го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (7й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['7st-elem-icon'])) echo $metaboxes_data['7st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="7st-elem-icon" value="<?php if (isset($metaboxes_data['7st-elem-icon'])) echo $metaboxes_data['7st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="7st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['7st-elem-img-title'])) echo $metaboxes_data['7st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок (оставьте пустым, если не хотите, чтобы элемент был отображен на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="7st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['7st-elem-title'])) echo $metaboxes_data['7st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст параграфа под заголовком</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="7st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['7st-elem-text'])) echo $metaboxes_data['7st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 8го элемента списка 9го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки (8й элемент)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['8st-elem-icon'])) echo $metaboxes_data['8st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="8st-elem-icon" value="<?php if (isset($metaboxes_data['8st-elem-icon'])) echo $metaboxes_data['8st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="8st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['8st-elem-img-title'])) echo $metaboxes_data['8st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок (оставьте пустым, если не хотите, чтобы элемент был отображен на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="8st-elem-title" cols="45" rows="4"><?php if (isset($metaboxes_data['8st-elem-title'])) echo $metaboxes_data['8st-elem-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст параграфа под заголовком</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="8st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['8st-elem-text'])) echo $metaboxes_data['8st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}




function display_feedback_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'feedback-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для десятого раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое десятого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок (используйте шорткод [yellow][/yellow], чтобы выделить содержимое внутри желтым цветом)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст ссылки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="link-text" cols="45" rows="4"><?php if (isset($metaboxes_data['link-text'])) echo $metaboxes_data['link-text']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>URL (адрес) ссылки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="link-url" cols="45" rows="4"><?php if (isset($metaboxes_data['link-url'])) echo $metaboxes_data['link-url']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}




function display_youtube_feedback_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'youtube-feedback-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>URL (адрес) ссылки для видео на Youtube</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="link" cols="45" rows="4"><?php if (isset($metaboxes_data['link'])) echo $metaboxes_data['link']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}




function display_support_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'support-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для одиннадцатого раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое одиннадцатого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок (используйте шорткод [yellow][/yellow], чтобы выделить содержимое внутри желтым цветом)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной текст (под Главным заголовком)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-p" cols="45" rows="4"><?php if (isset($metaboxes_data['main-p'])) echo $metaboxes_data['main-p']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Список одиннадцатого раздела (до восьми элементов)</h5><br><br>
    </div>
    <div class="form-group container">
        <h5>Содержимое 1го элемента списка 11го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['1st-elem-icon'])) echo $metaboxes_data['1st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="1st-elem-icon" value="<?php if (isset($metaboxes_data['1st-elem-icon'])) echo $metaboxes_data['1st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="1st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['1st-elem-img-title'])) echo $metaboxes_data['1st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-elem-text'])) echo $metaboxes_data['1st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 2го элемента списка 11го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['2st-elem-icon'])) echo $metaboxes_data['2st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="2st-elem-icon" value="<?php if (isset($metaboxes_data['2st-elem-icon'])) echo $metaboxes_data['2st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="2st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['2st-elem-img-title'])) echo $metaboxes_data['2st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-elem-text'])) echo $metaboxes_data['2st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 3го элемента списка 11го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['3st-elem-icon'])) echo $metaboxes_data['3st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="3st-elem-icon" value="<?php if (isset($metaboxes_data['3st-elem-icon'])) echo $metaboxes_data['3st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="3st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['3st-elem-img-title'])) echo $metaboxes_data['3st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-elem-text'])) echo $metaboxes_data['3st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 4го элемента списка 11го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['4st-elem-icon'])) echo $metaboxes_data['4st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="4st-elem-icon" value="<?php if (isset($metaboxes_data['4st-elem-icon'])) echo $metaboxes_data['4st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="4st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['4st-elem-img-title'])) echo $metaboxes_data['4st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-elem-text'])) echo $metaboxes_data['4st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 5го элемента списка 11го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['5st-elem-icon'])) echo $metaboxes_data['5st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="5st-elem-icon" value="<?php if (isset($metaboxes_data['5st-elem-icon'])) echo $metaboxes_data['5st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="5st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['5st-elem-img-title'])) echo $metaboxes_data['5st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-elem-text'])) echo $metaboxes_data['5st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 6го элемента списка 11го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['6st-elem-icon'])) echo $metaboxes_data['6st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="6st-elem-icon" value="<?php if (isset($metaboxes_data['6st-elem-icon'])) echo $metaboxes_data['6st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="6st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['6st-elem-img-title'])) echo $metaboxes_data['6st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="6st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['6st-elem-text'])) echo $metaboxes_data['6st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 7го элемента списка 11го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['7st-elem-icon'])) echo $metaboxes_data['7st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="7st-elem-icon" value="<?php if (isset($metaboxes_data['7st-elem-icon'])) echo $metaboxes_data['7st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="7st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['7st-elem-img-title'])) echo $metaboxes_data['7st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="7st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['7st-elem-text'])) echo $metaboxes_data['7st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 8го элемента списка 11го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['8st-elem-icon'])) echo $metaboxes_data['8st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="8st-elem-icon" value="<?php if (isset($metaboxes_data['8st-elem-icon'])) echo $metaboxes_data['8st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="8st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['8st-elem-img-title'])) echo $metaboxes_data['8st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="8st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['8st-elem-text'])) echo $metaboxes_data['8st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}




function display_patronage_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'patronage-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для двенадцатого раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое двенадцатого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок (используйте шорткод [yellow][/yellow], чтобы выделить содержимое внутри желтым цветом)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Список двенадцатого раздела (до восьми элементов)</h5><br><br>
    </div>
    <div class="form-group container">
        <h5>Содержимое 1го элемента списка 12го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['1st-elem-icon'])) echo $metaboxes_data['1st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="1st-elem-icon" value="<?php if (isset($metaboxes_data['1st-elem-icon'])) echo $metaboxes_data['1st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="1st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['1st-elem-img-title'])) echo $metaboxes_data['1st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-elem-text'])) echo $metaboxes_data['1st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 2го элемента списка 12го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['2st-elem-icon'])) echo $metaboxes_data['2st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="2st-elem-icon" value="<?php if (isset($metaboxes_data['2st-elem-icon'])) echo $metaboxes_data['2st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="2st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['2st-elem-img-title'])) echo $metaboxes_data['2st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-elem-text'])) echo $metaboxes_data['2st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 3го элемента списка 12го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['3st-elem-icon'])) echo $metaboxes_data['3st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="3st-elem-icon" value="<?php if (isset($metaboxes_data['3st-elem-icon'])) echo $metaboxes_data['3st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="3st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['3st-elem-img-title'])) echo $metaboxes_data['3st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-elem-text'])) echo $metaboxes_data['3st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 4го элемента списка 12го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['4st-elem-icon'])) echo $metaboxes_data['4st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="4st-elem-icon" value="<?php if (isset($metaboxes_data['4st-elem-icon'])) echo $metaboxes_data['4st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="4st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['4st-elem-img-title'])) echo $metaboxes_data['4st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-elem-text'])) echo $metaboxes_data['4st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 5го элемента списка 12го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['5st-elem-icon'])) echo $metaboxes_data['5st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="5st-elem-icon" value="<?php if (isset($metaboxes_data['5st-elem-icon'])) echo $metaboxes_data['5st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="5st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['5st-elem-img-title'])) echo $metaboxes_data['5st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-elem-text'])) echo $metaboxes_data['5st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 6го элемента списка 12го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['6st-elem-icon'])) echo $metaboxes_data['6st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="6st-elem-icon" value="<?php if (isset($metaboxes_data['6st-elem-icon'])) echo $metaboxes_data['6st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="6st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['6st-elem-img-title'])) echo $metaboxes_data['6st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="6st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['6st-elem-text'])) echo $metaboxes_data['6st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 7го элемента списка 12го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['7st-elem-icon'])) echo $metaboxes_data['7st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="7st-elem-icon" value="<?php if (isset($metaboxes_data['7st-elem-icon'])) echo $metaboxes_data['7st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="7st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['7st-elem-img-title'])) echo $metaboxes_data['7st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="7st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['7st-elem-text'])) echo $metaboxes_data['7st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 8го элемента списка 12го раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение иконки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['8st-elem-icon'])) echo $metaboxes_data['8st-elem-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="8st-elem-icon" value="<?php if (isset($metaboxes_data['8st-elem-icon'])) echo $metaboxes_data['8st-elem-icon']; ?>">
                <input class="imgTitle" type="hidden" name="8st-elem-img-title"
                       value="<?php if (isset($metaboxes_data['8st-elem-img-title'])) echo $metaboxes_data['8st-elem-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст элемента (оставьте пустым, если не хотите, чтобы элемент отображался на сайте)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="8st-elem-text" cols="45" rows="4"><?php if (isset($metaboxes_data['8st-elem-text'])) echo $metaboxes_data['8st-elem-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}




function display_to_know_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'to-know-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для тринадцатого раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое тринадцатого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок (используйте шорткод [yellow][/yellow], чтобы выделить содержимое внутри желтым цветом)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
    </div><br><br>
    <h6>Видео</h6>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h6>Постер (скриншот видео) (1й слайд)</h6>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <p><p>Предпросмотр</p>
            <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['video-poster'])) echo $metaboxes_data['video-poster']; ?>" alt="Предпросмотр"><br>
            <input class="imgUrl" type="text" placeholder="Изображение" name="video-poster" value="<?php if (isset($metaboxes_data['video-poster'])) echo $metaboxes_data['video-poster']; ?>">
            <input class="imgTitle" type="hidden" name="video-poster-title"
                   value="<?php if (isset($metaboxes_data['video-poster-title'])) echo $metaboxes_data['video-poster-title']; ?>">
            <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h6>Видео в формате MP4</h6>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
            <video class="videoPrev" style="width: 50%; text-align: center">
                <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['video-mp4'])) echo $metaboxes_data['video-mp4']; ?>" type="video/mp4">
            </video>
            <br>
            <input class="videoUrl" type="text" placeholder="Видео" name="video-mp4" value="<?php if (isset($metaboxes_data['video-mp4'])) echo $metaboxes_data['video-mp4']; ?>">
            <input class="videoTitle" type="hidden" name="video-mp4-title"
                   value="<?php if (isset($metaboxes_data['video-mp4-title'])) echo $metaboxes_data['video-mp4-title']; ?>">
            <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h6>Видео в формате WEBM</h6>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <p><p>Предпросмотр (сохраните изменения для предпросмотра)</p>
            <video class="videoPrev" style="width: 50%; text-align: center">
                <source class="videoPrevSrc" src="<?php if (isset($metaboxes_data['video-webm'])) echo $metaboxes_data['video-webm']; ?>" type="video/webm">
            </video>
            <br>
            <input class="videoUrl" type="text" placeholder="Видео" name="video-webm" value="<?php if (isset($metaboxes_data['video-webm'])) echo $metaboxes_data['video-webm']; ?>">
            <input class="videoTitle" type="hidden" name="video-webm-title"
                   value="<?php if (isset($metaboxes_data['video-webm-title'])) echo $metaboxes_data['video-webm-title']; ?>">
            <button type="button" class="upload-video-btn btn btn-info">Выбрать</button></p>
        </div>
    </div>
    <?php
}




function display_get_plan_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'get-plan-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для четырнадцатого раздела (используется на странице редактирования Главного меню и Меню подвала сайта)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое четырнадцатого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной текст</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-p" cols="45" rows="4"><?php if (isset($metaboxes_data['main-p'])) echo $metaboxes_data['main-p']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}




function display_footer_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'footer-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для пятнадцатого раздела (подвал сайта) (используется на странице редактирования Главного меню и Меню подвала сайта) </p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое пятнадцатого раздела</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст кнопки заявки обратного звонка</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="button-text" cols="45" rows="4"><?php if (isset($metaboxes_data['button-text'])) echo $metaboxes_data['button-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="form-group container">
        <h5>Список подвала сайта (до 12ти элементов)</h5><br><br>
    </div>
    <div class="form-group container">
        <h5>Содержимое 1го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="1st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['1st-elem-content'])) echo $metaboxes_data['1st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 2го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="2st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['2st-elem-content'])) echo $metaboxes_data['2st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 3го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="3st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['3st-elem-content'])) echo $metaboxes_data['3st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 4го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="4st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['4st-elem-content'])) echo $metaboxes_data['4st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 5го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="5st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['5st-elem-content'])) echo $metaboxes_data['5st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 6го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="6st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['6st-elem-content'])) echo $metaboxes_data['6st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 7го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="7st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['7st-elem-content'])) echo $metaboxes_data['7st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 8го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="8st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['8st-elem-content'])) echo $metaboxes_data['8st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 9го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="9st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['9st-elem-content'])) echo $metaboxes_data['9st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 10го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="10st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['10st-elem-content'])) echo $metaboxes_data['10st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 11го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="11st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['11st-elem-content'])) echo $metaboxes_data['11st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Содержимое 12го элемента подвала сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое (допускается использование html-тегов)</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="12st-elem-content" cols="45" rows="4"><?php if (isset($metaboxes_data['12st-elem-content'])) echo $metaboxes_data['12st-elem-content']; ?></textarea></p>
            </div>
        </div>
    </div><br><br>
    <div class="form-group container">
        <h5>Копирайт сайта</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Содержимое копирайта</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="copy-text" cols="45" rows="4"><?php if (isset($metaboxes_data['copy-text'])) echo $metaboxes_data['copy-text']; ?></textarea></p>
            </div>
        </div>
    </div>
    <?php
}