<?php get_header() ?>
    <?php if (have_posts()) :?>
        <?php while (have_posts()) : the_post(); ?>

<?php get_template_part("template-parts/index", "hero") ?>

<?php get_template_part("template-parts/index", "amenities") ?>

<?php get_template_part("template-parts/index", "testimonials") ?>

        <?php endwhile; ?>
    <?php endif ; ?>
<?php get_footer() ?>