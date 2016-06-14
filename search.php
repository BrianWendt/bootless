<?php get_header(); ?>
<div class="row">
    <div class="<?php echo Bootless::option('content_class') ?>">
        <section id="content" role="main">
            <?php if (have_posts()) : ?>
                <header class="header">
                    <h1 class="entry-title page-header"><?php printf(__('Search Results for: %s', 'bootless'), get_search_query()); ?></h1>
                </header>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('entry'); ?>
                <?php endwhile; ?>
                <?php get_template_part('nav', 'below'); ?>
            <?php else : ?>
                <article id="post-0" class="post no-results not-found">
                    <header class="header">
                        <h2 class="entry-title"><?php _e('Nothing Found', 'bootless'); ?></h2>
                    </header>
                    <section class="entry-content">
                        <p><?php _e('Sorry, nothing matched your search. Please try again.', 'bootless'); ?></p>
                        <?php get_search_form(); ?>
                    </section>
                </article>
            <?php endif; ?>
        </section>
    </div>
    <div class="<?php echo Bootless::option('sidebar_class') ?>">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>