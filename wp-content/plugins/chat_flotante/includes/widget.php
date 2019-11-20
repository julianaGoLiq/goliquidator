<?php

class chat_flotante extends WP_Widget {

    //class constructor
    public function __construct() {

        $widget_ops = array(
            'classname' => 'chat_flotante',
            'description' => 'Chat Flotante whatsapp messenger',
        );

        parent::__construct( 'chat_flotante', 'Chat Flotante', $widget_ops );

    }

    // output the widget content on the front-end
    public function widget( $args, $instance ) {
        ?>
        <div class="chat_flotante_wsp_messenger">
            <a href="https://api.whatsapp.com/send?phone=13059274105" class="whatsapp" target="_blank">
                <img alt="WHATSAPP CHAT" src="<?php echo plugin_dir_url( __FILE__ ) . '../assets/images/whatsapp_chatweb.png' ?>" />
            </a>

            <a href="https://m.me/goliquidator" class="messenger" target="_blank" onclick="window.open(this.href, this.target, 'width=900,height=600,top=100,left=300,scrollbars=NO,menubar=NO,titlebar= NO,status=NO,toolbar=NO'); return false;">
                <img alt="MESSENGER CHAT" src="<?php echo plugin_dir_url( __FILE__ ) . '../assets/images/messenger_chatweb.png' ?>" />
            </a>
        </div>


<?php

    }

    // output the option form field in admin Widgets screen
    public function form( $instance ) {

    }

    // save options
    public function update( $new_instance, $old_instance ) {}
}

?>