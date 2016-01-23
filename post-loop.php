<?php while (have_posts()) : the_post(); ?>

<div class="post">
<h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<p class="postMeta">by <?php the_author_posts_link() ?>, filed in <?php the_category(', '); ?> on <?php the_time('M.d, Y') ?></p>
<div class="postContent">
<?php the_content('[Read the rest of this entry...]'); ?>
</div>
<div style="background: #EEEEEE;">
<p class="tags"><?php the_tags('Tags: ', ', ', ''); ?></p>
<p class="comments"><?php comments_popup_link('Leave a Comment', 'Comments (1)', 'Comments (%)'); ?> <?php edit_post_link(__('Edit This')); ?></p>
</div>
<div style="clear: both;"></div>
</div><!-- Closes Post -->
<div>
    <hr />
    <br />
</div>

<?php endwhile; ?>