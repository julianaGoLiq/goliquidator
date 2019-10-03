<?php
/*
Plugin Name: Select Core
Description: Plugin that adds all post types needed by our theme
Author: Select Themes
Version: 1.2.1
*/

require_once 'load.php';

use QodeCore\CPT;
use QodeCore\Lib;

add_action('after_setup_theme', array(CPT\PostTypesRegister::getInstance(), 'register'));

Lib\ShortcodeLoader::getInstance()->load();

if(!function_exists('qode_core_activation')) {
    /**
     * Triggers when plugin is activated. It calls flush_rewrite_rules
     * and defines suprema_qodef_core_on_activate action
     */
    function qode_core_activation() {
        do_action('suprema_qodef_core_on_activate');

        QodeCore\CPT\PostTypesRegister::getInstance()->register();
        flush_rewrite_rules();
    }

    register_activation_hook(__FILE__, 'qode_core_activation');
}

if(!function_exists('qode_core_text_domain')) {
    /**
     * Loads plugin text domain so it can be used in translation
     */
    function qode_core_text_domain() {
        load_plugin_textdomain('select-core', false, QODE_CORE_REL_PATH.'/languages');
    }

    add_action('plugins_loaded', 'qode_core_text_domain');
}

if(!function_exists('qode_core_themename_theme_menu')) {
    /**
     * Function that generates admin menu for options page.
     * It generates one admin page per options page.
     */
    function qode_core_themename_theme_menu() {
        if (qode_core_theme_installed()) {

            global $suprema_qodef_Framework;
            suprema_qodef_init_theme_options();

            $page_hook_suffix = add_menu_page(
                'Select Options',                   // The value used to populate the browser's title bar when the menu page is active
                'Select Options',                   // The text of the menu in the administrator's sidebar
                'administrator',                  // What roles are able to access the menu
                'suprema_qodef_theme_menu',                // The ID used to bind submenu items to this menu
                array($suprema_qodef_Framework->getSkin(), 'renderOptions'), // The callback function used to render this menu
                $suprema_qodef_Framework->getSkin()->getMenuIcon('options'),             // Icon For menu Item
                $suprema_qodef_Framework->getSkin()->getMenuItemPosition('options')            // Position
            );

            foreach ($suprema_qodef_Framework->qodeOptions->adminPages as $key=>$value ) {
                $slug = "";

                if (!empty($value->slug)) {
                    $slug = "_tab".$value->slug;
                }

                $subpage_hook_suffix = add_submenu_page(
                    'suprema_qodef_theme_menu',
                    'Select Options - '.$value->title,                   // The value used to populate the browser's title bar when the menu page is active
                    $value->title,                   // The text of the menu in the administrator's sidebar
                    'administrator',                  // What roles are able to access the menu
                    'suprema_qodef_theme_menu'.$slug,                // The ID used to bind submenu items to this menu
                    array($suprema_qodef_Framework->getSkin(), 'renderOptions')
                );

                add_action('admin_print_scripts-'.$subpage_hook_suffix, 'suprema_qodef_enqueue_admin_scripts');
                add_action('admin_print_styles-'.$subpage_hook_suffix, 'suprema_qodef_enqueue_admin_styles');
            };

            add_action('admin_print_scripts-'.$page_hook_suffix, 'suprema_qodef_enqueue_admin_scripts');
            add_action('admin_print_styles-'.$page_hook_suffix, 'suprema_qodef_enqueue_admin_styles');

        }
    }

    add_action( 'admin_menu', 'qode_core_themename_theme_menu');
}