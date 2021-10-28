<?php

function sp_custom_post_types_init()
{

    // Регистрация пользовательского типа записи
    $labels = array(
        'name' => 'Техника (верхний слайдер)',
        'singular_name' => 'Пример техники',
        'menu_name' => 'Примеры техники (верхний слайдер)',
        'name_admin_bar' => 'Примеры техники',
        'add_new' => 'Добавить',
        'add_new_item' => 'Добавить новый пример техники',
        'new_item' => 'Новый пример техники',
        'edit_item' => 'Редактировать пример техинки',
        'view_item' => 'Просмотерть пример техники',
        'all_items' => 'Все примеры техники',
        'search_items' => 'Искать примеры техники',
        'parent_item_colon' => '',
        'not_found' => 'Примеры техники не найдены',
        'not_found_in_trash' => 'Примеры техники не найдены в Корзине'
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Кастомный тип записи для примеров техники в верхнем слайдере сайта', 'tech-slider-example'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'tech-slider-example'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'taxonomies' => array(),
        'exclude_from_search' => true
    );
    register_post_type('tech-slider-example', $args);

    // Регистрация пользовательского типа записи
    $labels = array(
        'name' => 'Видеоотзывы (слайдер)',
        'singular_name' => 'Видеоотзыв',
        'menu_name' => 'Видеоотзывы (слайдер)',
        'name_admin_bar' => 'Видеоотзывы',
        'add_new' => 'Добавить',
        'add_new_item' => 'Добавить видеоотзыв',
        'new_item' => 'Новый видеоотзыв',
        'edit_item' => 'Редактировать видеоотзыв',
        'view_item' => 'Просмотерть видеоотзыв',
        'all_items' => 'Все видеоотзывы',
        'search_items' => 'Искать видеоотзывы',
        'parent_item_colon' => '',
        'not_found' => 'Видеоотзывы не найдены',
        'not_found_in_trash' => 'Видеоотзывы не найдены в Корзине'
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Кастомный тип записи для видеоотзывов с Youtube', 'youtube-feedback'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'youtube-feedback'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'taxonomies' => array(),
        'exclude_from_search' => true
    );
    register_post_type('youtube-feedback', $args);
    
}