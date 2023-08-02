<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer">
        <div class="authorbox">
            <ul>
                <li>Posted by: <a href="<?php //echo get_author_posts_url($post->post_author);
                                        ?>"><?php the_author(); ?></a></li>
                <li>Date: <?php the_time('M. j, Y'); ?></li>
                <li>Categories: <?php the_category(', '); ?></li>
                <li>Tags: <?php the_tags('', ', ', ''); ?></li>
            </ul>
        </div>
    </footer>
</article>