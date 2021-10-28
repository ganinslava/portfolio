<?php

function r_custom_post_types_init()
{

    // Регистрация пользовательского типа записи
    $labels = array(
        'name' => 'Рецепт',
        'singular_name' => 'Рецепты',
        'menu_name' => 'Рецепты',
        'name_admin_bar' => 'Рецепты',
        'add_new' => 'Добавить',
        'add_new_item' => 'Добавить новый рецепт',
        'new_item' => 'Новый рецепт',
        'edit_item' => 'Редактировать рецепт',
        'view_item' => 'Просмотерть рецепт',
        'all_items' => 'Все рецепты',
        'search_items' => 'Искать рецепты',
        'parent_item_colon' => '',
        'not_found' => 'Рецепты не найдены',
        'not_found_in_trash' => 'Рецепты не найдены в Корзине'
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Кастомный тип записи', 'recipe'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'recipe'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'taxonomies' => array(),
        'exclude_from_search' => true,
        'show_in_rest' => true,
        'supports' => array('editor')
    );
    register_post_type('recipe', $args);

}