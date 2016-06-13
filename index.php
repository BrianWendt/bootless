<?php get_header(); ?>
<div class="row">
    <div class="<?php echo Bootless::option('content_class') ?>">
        <section id="content" role="main">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part('entry'); ?>
                    <?php comments_template(); ?>
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