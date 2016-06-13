<?php get_header(); ?>
<div class="row">
    <div class="<?php echo Bootless::option('content_class') ?>">
        <section id="content" role="main">
            <header class="header">
                <h1 class="entry-title"><?php _e('Tag Archives: ', 'blankslate'); ?><?php single_tag_title(); ?></h1>
            </header>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part('entry'); ?>
                    <?php
                endwhile;
            endif;
            ?>
            <?php get_template_part('nav', 'below'); ?>
        </section>
    </div>
    <div class="<?php echo Bootless::option('sidebar_class') ?>">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>