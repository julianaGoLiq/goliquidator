<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="qode-core-portfolio-content">
        <div class="qode-core-portfolio-title-holder">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php if(has_post_thumbnail()) { ?>
            <div class="qode-core-portfolio-thumb-holder">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php } ?>
        <div class="qode-core-portfolio-content">
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>