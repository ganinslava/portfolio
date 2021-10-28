<?php

function sp_admin_menus() {
    add_menu_page(
        'Страница Опций Темы',
        'Опции Темы',
        'edit_theme_options',
        'sp_theme_opts',
        'sp_theme_opts_page'
    );
}