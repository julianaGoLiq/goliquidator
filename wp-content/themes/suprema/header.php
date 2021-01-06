<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php
    /**
     * @see suprema_qodef_header_meta() - hooked with 10
     * @see qode_user_scalable - hooked with 10
     */
    ?>
	<?php if (!suprema_qodef_is_ajax_request()) do_action('suprema_qodef_header_meta'); ?>

	<?php if (!suprema_qodef_is_ajax_request()) wp_head(); ?>
</head>

<body <?php body_class();?>>
<?php if (!suprema_qodef_is_ajax_request()) suprema_qodef_get_side_area(); ?>


<?php 
if((!suprema_qodef_is_ajax_request()) && suprema_qodef_options()->getOptionValue('preloading_effect') == "yes") {
    $ajax_class = 'qodef-mimic-ajax';
?>
<div class="qodef-smooth-transition-loader <?php echo esc_attr($ajax_class); ?>">
    <div class="qodef-st-loader">
        <div class="qodef-st-loader1">
            <?php suprema_qodef_loading_spinners(); ?>
        </div>
    </div>
</div>
<?php if ((!suprema_qodef_is_ajax_request()) && suprema_qodef_options()->getOptionValue('smooth_wipe_effect') == "yes") { ?>
<div class="qodef-wipe-holder">
    <div class="qodef-wipe-1"></div>
    <div class="qodef-wipe-2"></div>
</div>
<?php } ?>
<?php } ?>

<div class="qodef-wrapper">
    <div class="qodef-wrapper-inner">

    <?php if((!suprema_qodef_is_ajax_request()) && suprema_qodef_options()->getOptionValue('smooth_page_transitions') == "yes") { ?>
        <div class="qodef-fader"></div>
    <?php } ?>

        <?php if (!suprema_qodef_is_ajax_request()) suprema_qodef_get_header(); ?>

        <?php if ((!suprema_qodef_is_ajax_request()) && suprema_qodef_options()->getOptionValue('show_back_button') == "yes") { ?>
            <a id='qodef-back-to-top'  href='#'>
                <span class="qodef-icon-stack">
                     <?php
                        suprema_qodef_icon_collections()->getBackToTopIcon('font_elegant');
                    ?>
                </span>
            </a>
        <?php } ?>
        <?php if (!suprema_qodef_is_ajax_request()) suprema_qodef_get_full_screen_menu(); ?>

        <div class="qodef-content" <?php suprema_qodef_content_elem_style_attr(); ?>>
            <div class="qodef-content-inner">