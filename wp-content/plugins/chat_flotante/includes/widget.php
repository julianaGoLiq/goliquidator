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
            <a href="https://api.whatsapp.com/send?phone=<?php echo  $instance["whatsapp_input"];?>" class="whatsapp" target="_blank">
                <img alt="WHATSAPP CHAT" src="<?php echo plugin_dir_url( __FILE__ ) . '../assets/images/whatsapp_chatweb.png' ?>" />
            </a>

            <a href="https://m.me/<?php echo  $instance["messenger_input"];?>" class="messenger" target="_blank" onclick="window.open(this.href, this.target, 'width=900,height=600,top=100,left=300,scrollbars=NO,menubar=NO,titlebar= NO,status=NO,toolbar=NO'); return false;">
                <img alt="MESSENGER CHAT" src="<?php echo plugin_dir_url( __FILE__ ) . '../assets/images/messenger_chatweb.png' ?>" />
            </a>
        </div>
<?php

    }

    // output the option form field in admin Widgets screen
    public function form( $instance ) {
?>
        <p>
            <label for="<?php echo $this->get_field_id('whatsapp_input'); ?>">Whatsapp Number</label>
            <input class="widefat" id="<?php echo $this->get_field_id('whatsapp_input'); ?>" name="<?php echo $this->get_field_name('whatsapp_input'); ?>" type="text" value="<?php echo esc_attr($instance["whatsapp_input"]); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('messenger_input'); ?>">Messenger Code</label>
            <input class="widefat" id="<?php echo $this->get_field_id('messenger_input'); ?>" name="<?php echo $this->get_field_name('messenger_input'); ?>" type="text" value="<?php echo esc_attr($instance["messenger_input"]); ?>" />
        </p>
  <?php
    }

    // save options
    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;
        $instance["whatsapp_input"] = strip_tags($new_instance["whatsapp_input"]);
        $instance["messenger_input"] = strip_tags($new_instance["messenger_input"]);
        return $instance;

    }
}

?>