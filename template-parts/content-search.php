<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<?php $post_type = get_post_type( $post );?>
<article id="post-<?php the_ID(); ?>" class="<?php echo $post_type; ?>">
    <header class="entry-header">
        <h2 class="search-title"><a href="<?php the_permalink(); ?>"><?php echo $post_type . ': '; the_title(); ?></a></h2>
        <div class="byline">
            <?php if (!is_page()) : ?>
                <?php esc_html_e('Author: ', 'thedd'); ?> <?php the_author(); ?>
            <?php endif; ?>
        </div>
    </header>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>

</article>
