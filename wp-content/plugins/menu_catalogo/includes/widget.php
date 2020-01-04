<?php

class menu_catalogo extends WP_Widget {

    //class constructor
    public function __construct() {

        $widget_ops = array(
            'classname' => 'menu_catalogo',
            'description' => 'Menu Categoria',
        );

        parent::__construct( 'menu_catalogo', 'Menu Catalog', $widget_ops );

    }

    // output the widget content on the front-end
    public function widget( $args, $instance ) {
        $cate = get_queried_object();
        $cateID = $cate->term_id;
        $all_categories = get_categories( $this->getArgs() );
        echo '<div class="main_menu_category">';
        echo '<input type="hidden" id="current_cat_id" value="'.$cateID.'" />';
        echo '<h4 id="h4_menu_category" class="main_category_sidebar main_active">'.__('Categories').'<span class="side_bar_row_plus"></span></h4>';

        $this->tree($all_categories, 0, 0);
        echo '</div>';
    }

    private function tree(&$all_categories, $parendId){
        $_nameNode = ($parendId==0)?'parent':'child_'.$parendId;
        $classUl = ($parendId==0)?'cat_parent':'cat_child';
        $classA = ($parendId==0)?'a_parent':'a_child';
        echo '<ul id="ul_'.$classUl.'_'.$parendId.'" class="ul_'.$classUl.'" >';
        if($parendId==0){
            $linkPath = home_url( '/' ).'catalogo';
            echo '<li class="li_cat_parent">';
            echo '<a href="'.$linkPath.'" class="a_parent">'.__('All').'</a>';
            echo '</li>';
        }
        foreach($all_categories as $key=>$item){
            if($item->category_parent==$parendId){
                $dataItem = $item->to_array();
                $count = $this->countTree($all_categories, $item->cat_ID);
                $link = ($count>0)?'href="javascript:void(0)"': ' href="'.get_term_link( $item->cat_ID, 'product_cat' ).'"';
                echo '<li id="li_'.$item->cat_ID.'"  class="li_'.$classUl.'" >';
                 echo '<a '.$link.' id="item_'.$item->cat_ID.'" class="'.$classA.'">';
                 echo $dataItem['cat_name'];
                 if($count>0){
                     echo '<span id="span_'.$item->cat_ID.'" class="side_bar_row_down"></span>';
                 }
                 echo '</a>';
                unset($all_categories[$key]);
                $this->tree($all_categories, $item->cat_ID);
                echo '</li>';
            }
        }
        echo '</ul>';
      return ;
    }

    private function countTree($all_categories, $parendId){
        $index=0;
        foreach($all_categories as $key=>$item){
            if($item->category_parent==$parendId){
                $index++;
            }
        }
        return $index;
    }


    // output the option form field in admin Widgets screen
    public function form( $instance ) {

    }

    // save options
    public function update( $new_instance, $old_instance ) {}

    private function getArgs(){
        $list_args          = array(
            'show_count'    => 0,
            'hierarchical'  => 1,
            'taxonomy'      => 'product_cat',
            'hide_empty'    => 0,
            'menu_order'    => false,
            'depth'         => 0,
            'orderby'       => 'meta_value_num',
            'meta_key'      => 'order',
            'pad_counts'    => 1,
            'current_category'=> '',
            'max_depth' => 0
        );
        return $list_args;
    }

}

?>