<section class="entry-meta">
    <div class="author-avatar"><?php echo get_avatar(get_the_author_id()) ?></div>
    <div class="author-vcard"><?php the_author_posts_link(); ?></div>
    <div class="entry-date"><?php the_time(get_option('date_format')); ?></div>
    <div class="clearfix"></div>
</section>