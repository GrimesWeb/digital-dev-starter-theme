<?php
/** Template used for Blog Page */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<div id="primary">
    <main id="main" class="site-main" role="main">
        <h1><?php wp_title(''); ?></h1>
        <section>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>

        </section>

        <?php echo paginate_links(); ?>
    </main>
    <!-- #main -->

</div>
<!-- #primary -->
<?php get_sidebar(); ?>
<!-- #sidebar -->
<!-- Nothing below here -->
<?php get_footer(); ?>