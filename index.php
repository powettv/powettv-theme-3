<?php get_header(); ?>

<div id="Main">

    <?php get_sidebar(); ?>
    
    <?php get_template_part('top-ad'); ?>

    <div id="ContentWrapper"><div id="Content">

    <?php get_template_part('posts'); ?>    

    <div id="nextprevious">
        <div class="alignleft"><?php next_posts_link('&laquo; Older Entries', 0); ?></div>
        <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;', 0) ?></div>
    </div>
    
    </div></div> <!-- Closes Content -->
    <div class="cleared"></div>
</div> <!-- Closes Main -->

<?php get_footer(); ?>
