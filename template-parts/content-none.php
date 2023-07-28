<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1><?php esc_html_e('404', 'thedd'); ?></h1>
    </header>
    <div class="entry-content">
        <p><?php esc_html_e('Sorry! No content found', 'thedd'); ?></p>
    </div>

</article>