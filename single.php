<?php get_header(); ?>

<div id="Main">

    <?php get_sidebar(); ?>

    <?php get_template_part('top-ad'); ?>

    <div id="ContentWrapper"><div id="Content">
        
    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        
        <div class="post">
        <h1 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        <p class="postMeta">by <?php the_author_posts_link() ?>, filed in <?php the_category(', '); ?> on <?php the_time('M.d, Y') ?></p>
        <div class="postContent"><?php the_content('[Read the rest of this entry...]'); ?></div>
        <div style="background: #EEEEEE;">
        <p class="tags"><?php the_tags('Tags: ', ', ', ''); ?></p>
        </div>
        <?php edit_post_link(__('Edit This')); ?>
        </div> <!-- Closes Post -->
        <div class="comment" style="margin-left: 5px; margin-right: 5px;">
        <?php comments_template(); ?>
        </div> <!-- Closes Comments -->

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
