<?php 
/*
Template Name: Full Width
*/ 
?>
<?php
$sidebar = suprema_qodef_sidebar_layout(); ?>

<?php get_header(); ?>
<?php suprema_qodef_get_title(); ?>
<?php get_template_part('slider'); ?>

<div class="qodef-full-width">
<div class="qodef-full-width-inner">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if(($sidebar == 'default')||($sidebar == '')) : ?>
			<?php the_content(); ?>
			<?php do_action('suprema_qodef_page_after_content'); ?>
		<?php elseif($sidebar == 'sidebar-33-right' || $sidebar == 'sidebar-25-right'): ?>
			<div <?php echo suprema_qodef_sidebar_columns_class(); ?>>
				<div class="qodef-column1 qodef-content-left-from-sidebar">
					<div class="qodef-column-inner">
						<?php the_content(); ?>
						<?php do_action('suprema_qodef_page_after_content'); ?>
					</div>
				</div>
				<div class="qodef-column2">
					<?php get_sidebar(); ?>
				</div>
			</div>
		<?php elseif($sidebar == 'sidebar-33-left' || $sidebar == 'sidebar-25-left'): ?>
			<div <?php echo suprema_qodef_sidebar_columns_class(); ?>>
				<div class="qodef-column1">
					<?php get_sidebar(); ?>
				</div>
				<div class="qodef-column2 qodef-content-right-from-sidebar">
					<div class="qodef-column-inner">
						<?php the_content(); ?>
						<?php do_action('suprema_qodef_page_after_content'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>