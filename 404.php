<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<?php get_header(); ?>

<div id="primary">
    <main id="main" class="site-main" role="main">
        <section>
            <?php get_template_part('template-parts/content', 'none'); ?>
        </section>
    </main>
    <!-- #main -->

</div>
<!-- #primary -->
<?php get_sidebar(); ?>
<!-- #sidebar -->
<!-- Nothing below here -->
<?php get_footer(); ?>