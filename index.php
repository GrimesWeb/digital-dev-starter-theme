<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<div id="primary">
    <main id="main" class="site-main" role="main">
        <section>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <?php the_content(); ?>
                        <footer class="article-footer">
                            <div class="authorbox">
                                <ul>
                                    <li>Posted by: <a href="<?php //echo get_author_posts_url($post->post_author);
                                                            ?>"><?php the_author(); ?></a></li>
                                    <li>Date: <?php the_time('M. j, Y'); ?></li>
                                    <li>Categories: <?php the_category(', '); ?></li>
                                    <li>Tags: <?php the_tags('', ', ', ''); ?></li>
                                </ul>
                            </div>
                            </header>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <?php get_template_part('page-templates/content', 'none'); ?>
            <?php endif; ?>

        </section>
    </main>
    <!-- #main -->

</div>
<!-- #primary -->
<?php get_sidebar(); ?>
<!-- #sidebar -->
<!-- Nothing below here -->
<?php get_footer(); ?>