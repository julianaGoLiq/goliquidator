<?php
/**
Plugin Name: Chat Flotante
Plugin URI: http://wordpress.org/extend/plugins/#
Description: muestra el chat floatnet de messenger y whatsapp
Author: yo
Version: 1.0
Author URI: http://example.com/
*/

defined( 'ABSPATH' ) || exit;


add_action( 'widgets_init', function(){
    include_once(plugin_dir_path( __FILE__ ).'/includes/widget.php');
    register_widget('chat_flotante');
});

add_action('wp_enqueue_scripts','chat_flotante_header');

function chat_flotante_header() {
    wp_enqueue_style( 'chat_flotante', plugin_dir_url( __FILE__ ) . 'assets/css/chat_flotante.css');
    wp_enqueue_style( 'font_awesome', plugin_dir_url( __FILE__ ) . 'assets/css/all.min.css');
}
