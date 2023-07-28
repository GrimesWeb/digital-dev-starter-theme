<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1><?php the_title(); ?></h1>
        <div class="byline">
            <?php if (!is_page()) : ?>
                <?php esc_html_e('Author: ', 'thedd'); ?> <?php the_author(); ?>
            <?php endif; ?>
        </div>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>

</article>