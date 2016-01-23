<?php get_header(); ?>

<div id="Main">

    <?php get_sidebar(); ?>

    <?php get_template_part('top-ad'); ?>

    <div id="ContentWrapper"><div id="Content">
        
    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <div class="post">
        <h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <div class="postContent"><?php the_content('[Read the rest of this entry...]'); ?></div>
        <p class="comments"><?php comments_popup_link('Leave a Comment', 'Comments (1)', 'Comments (%)'); ?> <?php edit_post_link(__('Edit This')); ?></p>
        </div> <!-- Closes Post -->

    <?php endwhile; ?>

    <?php else : ?>

        <div class="post">
        <h2 class="postTitle">Not Found</h2>
        <div class="postContent"><p>Sorry, but you are looking for something that isn't here.</p></div>
        </div> <!-- Closes Post -->

    <?php endif; ?>
    
    </div></div> <!-- Closes Content -->
    <div class="cleared"></div>
</div> <!-- Closes Main -->

<?php get_footer(); ?>
