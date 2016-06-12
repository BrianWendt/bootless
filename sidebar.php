<aside id="sidebar" role="complementary">
    <?php if (is_active_sidebar('primary-widget-area')) : ?>
        <div id="primary-widgets" class="widget-area">
            <ul class="widgets-list">
                <?php dynamic_sidebar('primary-widget-area'); ?>
            </ul>
        </div>
    <?php endif; ?>
</aside>