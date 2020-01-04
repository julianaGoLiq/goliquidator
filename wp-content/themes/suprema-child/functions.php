<?php

/*** Child Theme Function  ***/
if ( ! function_exists( 'suprema_qodef_child_theme_enqueue_scripts' ) ) {
	function suprema_qodef_child_theme_enqueue_scripts()
	{

		$parent_style = 'suprema-qodef-default-style';

		wp_enqueue_style('suprema-qodef-child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
	}

	add_action('wp_enqueue_scripts', 'suprema_qodef_child_theme_enqueue_scripts');
}

/*
* Author: Sebas Escobar Dev.
*/ 

function mis_estilos()
{
     wp_enqueue_style( 'child-theme-css', '[URL_CSS_PARENT]' );
}
add_action( 'wp_enqueue_scripts', 'mis_estilos' );


function custom_colors() {
   echo '<style type="text/css">
 
         </style>';
}

add_action('admin_head', 'custom_colors');

//upload script files
function my_theme_scripts_function() {

	wp_enqueue_script( 'JSBootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
	wp_enqueue_style( 'CSSBootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_script( 'JSDatepicker', 'https://cdn.jsdelivr.net/npm/flatpickr');
	wp_enqueue_style( 'CSSDatepicker', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css');
	wp_enqueue_script( 'JSAwesome', 'https://kit.fontawesome.com/bfa2e8f487.js');
	wp_enqueue_script( 'JSebas', get_stylesheet_directory_uri() . '/js/JSebas.js?v=0.1.7');
	wp_enqueue_style( 'CSSebas', get_stylesheet_directory_uri() . '/css/CSSebas.css?v=0.5.5');
    wp_enqueue_style( 'Sidebar', get_stylesheet_directory_uri() . '/css/sidebar.css');

}

add_action('wp_enqueue_scripts','my_theme_scripts_function');


function wpdocs_enqueue_custom_admin_style() {
	wp_register_style( 'custom_wp_admin_css', get_stylesheet_directory_uri() . '/css/JQury.css', false, '1.0.1' );
	wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );


remove_action('suprema_qodef_woocommerce_shop_loop_item_categories', 'suprema_qodef_woocommerce_shop_loop_categories');

function wpb_hook_javascript() {
    ?>
    <script>
        jQuery(document).ready(function($) {

            $("ul.product-categories li").each(function(){
                $(this).addClass( "parent_li" );
            });

            $('ul.product-categories li.cat-parent >a').removeAttr("href");
            $('li.parent_li >a').addClass( "parent_category" );

            $('ul.product-categories li.cat-parent >ul.children').hide();

            $('ul.product-categories li.cat-parent ul.children li.cat-item a').addClass( "children_category" );

            $('ul.product-categories li.cat-parent >a').append('<span class="side_bar_row_down"></span>');

            $('ul.product-categories li.cat-parent >a').on( "click", function() {
                var elem = $( this ).parent();
                var rowSpan = $( this ).find('span');

                if(elem.hasClass( "parent_active" )){
                    elem.find('ul.children').hide(500);
                    elem.removeClass( "parent_active" );
                    rowSpan.removeClass('side_bar_row_up');
                    rowSpan.addClass('side_bar_row_down');
                }else{
                    elem.find('ul.children').show(500);
                    elem.addClass( "parent_active" );
                    rowSpan.removeClass('side_bar_row_down');
                    rowSpan.addClass('side_bar_row_up');
                }

            });

            $('.widget_product_categories h4').addClass( "main_category_sidebar" );
            $('.widget_product_categories h4').addClass( "main_active" );
            $('.widget_product_categories h4').append('<span class="side_bar_row_plus"></span>');

            $('.main_category_sidebar').on( "click", function() {
                if($( this ).hasClass( "main_active" )){
                    $('.product-categories').removeClass('inactive').addClass( "active" );
                    $('.widget_product_categories h4 span').removeClass('side_bar_row_plus').addClass( "side_bar_row_less" );
                    $( this ).removeClass('main_active');
                }else{
                    $('.product-categories').removeClass('active').addClass( "inactive" );
                    $( this ).addClass('main_active');
                    $('.widget_product_categories h4 span').removeClass('side_bar_row_less').addClass( "side_bar_row_plus" );
                }
            });
        });
    </script>
    <?php
}
//add_action('wp_head', 'wpb_hook_javascript');

//add subtitle to product

add_action('woocommerce_after_shop_loop_item_title', 'suprema_child_after_shop_loop_item_title', 6 );

function suprema_child_after_shop_loop_item_title(){
    global $post;
    $_subtitle = the_field('subtitulo', $post->ID);
    echo sprintf('<span class="child_subtitle">%s</span>', $_subtitle);
}
//show message
    add_filter('woocommerce_get_price_html', 'suprema_child_get_price_html', 10, 2);
function suprema_child_get_price_html($price, $product){
    global $post;
    if(!$price){
        $_alternativo_al_precio = the_field('alternativo_al_precio', $post->ID);
        echo sprintf('<span class="child_alt_price">%s</span>', $_alternativo_al_precio);

    }
    return $price;
}

//

add_filter( 'woocommerce_get_settings_products', 'suprema_child_get_settings_products', 10, 2 );
function suprema_child_get_settings_products( $settings, $current_section ) {

    $settings[] = array(
        'name'     => __( 'Product label price', 'product-label-price' ),
        'desc_tip' => __( 'Texto alternativo al precio' ),
        'id'       => 'wcslider_alt_price',
        'type'     => 'text',
    );
    return $settings;
}
/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

/**
Remove tabs
 **/
add_filter('woocommerce_product_tabs', 'suprema_child_remove_product_tabs', 11, 1);
function suprema_child_remove_product_tabs($tabs){
    unset($tabs['additional_information']);
    unset($tabs['reviews']);
    return $tabs;
}
add_filter('woocommerce_product_description_heading', 'suprema_child_description_product_tabs', 10, 1);
function suprema_child_description_product_tabs($titulo){
    if(get_locale()=='es_ES'){
        return __('Información Adicional');
    }else{
        return __('Additional information');
    }
}

/**
remove add to cart
 **/

add_filter( 'woocommerce_is_purchasable', '__return_false');
/** SKU */

add_action( 'woocommerce_single_product_summary', 'suprema_child__show_sku',19 );
function suprema_child__show_sku(){
    global $product;
    echo '<hr /><div class="child_subtitle_sku"><span class="sku">SKU: </span><span class="sku-info">' . $product->get_sku().'</span></div>';
}

/** tab */
add_filter('woocommerce_product_tabs','suprema_child_wc_product_tabs_contact_form7',10,1);
function suprema_child_wc_product_tabs_contact_form7($tabs){
    $tabs['product_form'] = array(
        'title'    => __( 'Enquiry', 'woocommerce' ),
        'priority' => 20,
        'callback' => 'wc_product_contact_form7_tab'
    );
    return $tabs;
}
function wc_product_contact_form7_tab(){
    global $product;
    $subject    =   $product->post->post_title;
    echo do_shortcode('[contact-form-7 id="557" title="'.$subject.']');
}

//add_filter( 'wp_nav_menu_items', 'suprema_child_add_wsp', 10, 2 );
function suprema_child_add_wsp( $menu, $args ) {
    if ( 'main-navigation' !== $args->theme_location )
        return $menu;
    if(strpos($menu, "sticky-nav-menu-item")!== false){
        return $menu;
    }
    if(strpos($menu, "mobile-menu-item-")!== false){
        return $menu;
    }
    $menu .= '<li class="nav-menu-item-wsp">' . '<a href="https://api.whatsapp.com/send?phone=13059274105" target="_blank" ><div class="logo-whatsapp"><i class="fab fa-whatsapp"></i></div></a>'. '</li>';
    return $menu;
}

//add_filter( 'wp_nav_menu_items', 'suprema_child_add_search', 10, 2 );

function suprema_child_add_search( $menu, $args ) {
    if ( 'main-navigation' !== $args->theme_location )
        return $menu;

    if(strpos($menu, "sticky-nav-menu-item")!== false){
        return $menu;
    }
    if(strpos($menu, "mobile-menu-item-")!== false){
        return $menu;
    }
    $form = '<form id="searchform-search" role="search" action="' . esc_url( home_url( '/' ) ) . '" method="get" style="display:none">'.
        '<input id="s_input" name="s" type="text" value="' . get_search_query() . '" placeholder="' . __( 'Buscar producto', 'woocommerce' ) . '" />'.
        '<input id="searchsubmit_input" type="submit" value="&#x55;" />'.
        '<input name="post_type" type="hidden" value="product" />'.
        '</form>'.
        ' <script type="text/javascript">'.
        'function showSearchbox(){
    if (jQuery("#searchform-search").is(":visible")) {
        jQuery("#searchform-search").css("display", "none");
    } else {
        jQuery("#searchform-search").css("display", "block");
    }
}'.
        '</script>';

    $menu .= '<li class="nav-menu-item-search">' .
        '<a href="javascript:void(0)" onclick="showSearchbox()" >'.
       '<span class="item_outer"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon blank fa" aria-hidden="true"></i></span><span class="item_text"><span aria-hidden="true" class="qodef-icon-font-elegant icon_search "></span> </span></span></span>'.
        '</a>'.
        $form.
        '</li>';
    return $menu;
}

add_action('wp_head', 'wpb_hook_javascript_footer');
function wpb_hook_javascript_footer() {
    ?>
    <script>
        jQuery(document).ready(function($) {
            var parentT2= $('#text-2').parent().parent();
            if($(parentT2)){
                $(parentT2).addClass('mobile_fotter_2');
            }
            var parentT3= $('#text-3').parent().parent();
           if($(parentT3)){
               $(parentT3).addClass('mobile_fotter_3');
           }
            var parentT4= $('#text-4').parent().parent();
            if($(parentT4)){
                $(parentT4).addClass('mobile_fotter_4');
            }
            var parentT5= $('#text-5').parent().parent();
            if($(parentT5)){
                $(parentT5).addClass('mobile_fotter_5');
            }

            if($('#porque_comprar_image_space_id')){
                $('#porque_comprar_image_space_id').parent().parent().parent().addClass("porque_comprar_background");
            }
        });

    </script>
    <?php
}

