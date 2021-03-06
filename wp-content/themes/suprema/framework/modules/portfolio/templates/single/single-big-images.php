<div class="qodef-big-image-holder">
    <?php
    $media = suprema_qodef_get_portfolio_single_media();

    if(is_array($media) && count($media)) : ?>
        <div class="qodef-portfolio-media">
            <?php foreach($media as $single_media) : ?>
                <div class="qodef-portfolio-single-media">
                    <?php suprema_qodef_portfolio_get_media_html($single_media); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<div class="qodef-two-columns-75-25 clearfix">
    <div class="qodef-column1">
        <div class="qodef-column-inner">
            <h3><?php the_title(); ?></h3>
        </div>
    </div>
</div>
<div class="qodef-two-columns-75-25 clearfix">
    <div class="qodef-column1">
        <div class="qodef-column-inner">
            <div class="qodef-portfolio-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <div class="qodef-column2">
        <div class="qodef-column-inner">
            <div class="qodef-portfolio-info-holder">
                <?php
                //get portfolio custom fields section
                suprema_qodef_portfolio_get_info_part('custom-fields');

                //get portfolio date section
                suprema_qodef_portfolio_get_info_part('date');

                //get portfolio categories section
                suprema_qodef_portfolio_get_info_part('categories');

                //get portfolio tags section
                suprema_qodef_portfolio_get_info_part('tags');

                //get portfolio share section
                suprema_qodef_portfolio_get_info_part('social');
                ?>
            </div>
        </div>
    </div>
</div>