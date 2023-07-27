<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>

<?php
    // Check if sidebar is active (contains widgets)
    // If not, don't show sidebar
    if(! is_active_sidebar( 'first-sidebar' )) {
        return;
    }
?>
<aside id="secondary" class="widget-area" role="complementary">
    <?php dynamic_sidebar('first-sidebar'); ?>
</aside>