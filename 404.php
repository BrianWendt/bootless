<?php get_header(); ?>
<div class="row">
    <div class="<?php echo Bootless::option('content_class') ?>">
        <section id="content" role="main">
            <article id="post-0" class="post not-found">
                <header class="header">
                    <h1 class="entry-title"><?php _e('Not Found', 'bootless'); ?></h1>
                </header>
                <section class="entry-content">
                    <p><?php _e('Nothing found for the requested page. Try a search instead?', 'bootless'); ?></p>
                    <?php get_search_form(); ?>
                </section>
            </article>
        </section>
    </div>
    <div class="<?php echo Bootless::option('sidebar_class') ?>">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>