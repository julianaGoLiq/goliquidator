<?php
/**
Plugin Name: Menu Catalogo
Plugin URI: http://wordpress.org/extend/plugins/#
Description: muestra el menu catalogo
Author: yo
Version: 1.0
Author URI: http://example.com/
*/

defined( 'ABSPATH' ) || exit;


add_action( 'widgets_init', function(){
    include_once(plugin_dir_path( __FILE__ ).'/includes/widget.php');
    register_widget('menu_catalogo');
});

add_action('wp_enqueue_scripts','menu_category_header');

function menu_category_header() {
    wp_enqueue_style( 'menu_categoria', plugin_dir_url( __FILE__ ) . 'assets/css/menu_categoria.css');
}

function catalogo_menu_javascript() {
    $cate = get_queried_object();
    $cateID = $cate->term_id;
    $hierarchical_slugs = array();
    $ancestors          = get_ancestors( $cateID, 'product_cat', 'taxonomy' );
    foreach ( (array) $ancestors as $ancestor ) {
        $ancestor_term        = get_term( $ancestor, 'product_cat' );
        $hierarchical_slugs[] = $ancestor_term->name;
    }
    $nameAncestor=implode( ' / ', $hierarchical_slugs );
    $bread=$nameAncestor.' / '.$cate->name;
    ?>
    <script>
        jQuery(document).ready(function($) {
            $('.a_parent').on( "click", function() {
                var elemet = $(this).attr("id");
                var id=elemet.replace('item_','');
                if(id){
                    var ulElement = $('#ul_cat_child_'+id);
                    if(ulElement.hasClass( "ul_cat_child" )){
                        ulElement.show(500);
                        ulElement.removeClass('ul_cat_child');
                        $('#span_'+id).removeClass('side_bar_row_down').addClass( "side_bar_row_up" );
                    }else{
                        ulElement.addClass( "ul_cat_child" );
                        ulElement.hide(500);
                        $('#span_'+id).removeClass('side_bar_row_up').addClass( "side_bar_row_down" );
                    }
                }
            });
            $('#h4_menu_category').on( "click", function() {
                if($( this ).hasClass( "main_active" )){
                    $('#ul_cat_parent_0').removeClass('inactive').addClass( "active" );
                    $('#h4_menu_category span').removeClass('side_bar_row_plus').addClass( "side_bar_row_less" );
                    $( this ).removeClass('main_active');
                }else{
                    $('#ul_cat_parent_0').removeClass('active').addClass( "inactive" );
                    $( this ).addClass('main_active');
                    $('#h4_menu_category span').removeClass('side_bar_row_less').addClass( "side_bar_row_plus" );

                }
            });

        });
        jQuery(document).ready(function($) {
            var currentElement = $('#current_cat_id').val();
            if(currentElement){
                $ulItem =$('#li_'+currentElement).parent();
                $ulItem.show();
                $('#item_'+currentElement).css({'color':'#78ad2b'});
                var iduldata = $ulItem.attr("id");
                if(iduldata){
                    var idaux=iduldata.replace('ul_cat_child_','');
                    $('#span_'+idaux).removeClass('side_bar_row_down').addClass( "side_bar_row_up" );
                }
                $('.qodef-title-subtitle-holder-inner h1 span').html('<?php echo $bread ?>');
            }
        });
    </script>
    <?php
}

add_action('wp_head', 'catalogo_menu_javascript');