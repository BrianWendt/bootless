<div <?php comment_class(empty($args['has_children']) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>" >
    <div id="div-comment-<?php comment_ID() ?>" class="comment-heading">
        <div class="comment-author vcard">
            <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size']); ?>
            <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()); ?>
        </div>
        <?php if ($comment->comment_approved == '0') { ?>
            <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.'); ?></em>
        <?php } ?>
    </div>
    <div class="comment-body">
        <?php comment_text(); ?>
    </div>
    <div class="comment-footer">
        <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
                <?php
                /* translators: 1: date, 2: time */
                printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time());
                ?></a><?php edit_comment_link(__('(Edit)'), '  ', '');
                ?>
        </div>
        <div class="comment-reply">
            <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
        </div>
        
    </div>
</div>