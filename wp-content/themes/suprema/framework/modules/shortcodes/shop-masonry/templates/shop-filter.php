<div class = "qodef-shop-filter-holder qodef-masonry-filter">
    <div class = "qodef-shop-filter-holder-inner">
        <?php
        if(is_array($filter_categories) && count($filter_categories)){ ?>
            <ul>
                <li class="filter" data-filter="*"><span><?php esc_html_e('All', 'suprema') ?></span></li>
                <?php foreach($filter_categories as $cat){
                    $rand_number = rand();
                    ?>
                    <li data-class="filter filter_<?php echo suprema_qodef_get_module_part($rand_number); ?>" class="filter_<?php echo suprema_qodef_get_module_part($rand_number); ?>" data-filter = ".product_cat-<?php echo suprema_qodef_get_module_part($cat->term_id); ?>">
                    <span>
                        <?php echo suprema_qodef_get_module_part($cat->name); ?>
                    </span>
                    </li>
                <?php } ?>
            </ul>
        <?php }?>
    </div>
</div>