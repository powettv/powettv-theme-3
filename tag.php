<?php get_header(); ?>

<div id="Main">

    <?php get_sidebar(); ?>

    <?php get_template_part('top-ad'); ?>

    <div id="ContentWrapper"><div id="Content">

    <?php if (have_posts()) : ?>
    
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    
<?php 
    // If this is a Powet Alphabet tag
    if(is_tag(array( 
        'a-is-for', 'b-is-for', 'c-is-for', 'd-is-for', 'e-is-for', 
        'f-is-for', 'g-is-for', 'h-is-for', 'i-is-for', 'j-is-for', 
        'k-is-for', 'l-is-for', 'm-is-for', 'n-is-for', 'o-is-for', 
        'p-is-for', 'q-is-for', 'r-is-for', 's-is-for', 't-is-for', 
        'u-is-for', 'v-is-for', 'w-is-for', 'x-is-for', 'y-is-for', 
        'z-is-for'
    ))){ 
?>

    <h3 class="pageTitle">
        <a style="color: #888888; font-weight: bold;" href="http://powet.tv/powetblog/category/articles">Articles</a>
        >> <a style="color: #888888; font-weight: bold;" href="http://powet.tv/powetblog/category/articles/powet-alphabet">Powet Alphabet</a>
        >> &#8216;<?php single_tag_title(); ?>&#8217;
    </h3>

    <?php get_template_part('links_powet-alphabet'); ?>
    <div>
        <br />
    </div>

<?php 
    }
    // If this is a Powet Alphabet tag
    elseif(is_tag(array( 
        'xbox-360', 'ps3', 'wii', 'ds',
        'pc', 'iphone'
    ))){ 
?>

    <h3 class="pageTitle">
        <a style="color: #888888; font-weight: bold;" href="http://powet.tv/powetblog/category/news">News</a>
        >> <a style="color: #888888; font-weight: bold;" href="http://powet.tv/powetblog/category/news/games">Games</a>
        >> &#8216;<?php single_tag_title(); ?>&#8217;
    </h3>

    <?php get_template_part('links_games'); ?>
    <div>
        <br />
    </div>
    
<?php 
    }
    else {
?>

    <h2 class="pageTitle">Entries Tagged &#8216;<?php single_tag_title(); ?>&#8217;:</h2>
    
<?php 
    }
?>

        <?php while (have_posts()) : the_post(); ?>

        <div class="post">
        <h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <p class="postMeta">by <?php the_author() ?>, filed in <?php the_category(', '); ?> on <?php the_time('M.d, Y') ?></p>
        <div class="postContent"><?php the_content('[Read the rest of this entry...]'); ?></div>
        <p class="tags"><?php the_tags('Tags: ', ', ', ''); ?></p>
        <p class="comments"><?php comments_popup_link('Leave a Comment', 'Comments (1)', 'Comments (%)'); ?> <?php edit_post_link(__('Edit This')); ?></p>
        </div><!-- Closes Post -->
        <div>
            <hr />
            <br />
        </div>

    <?php endwhile; ?>

    <?php else : ?>

        <div class="post">
        <h2 class="postTitle">Not Found</h2>
        <div class="postContent"><p>Sorry, but you are looking for something that isn't here.</p></div>
        </div> <!-- Closes Post -->

    <?php endif; ?>

    <div id="nextprevious">
        <div class="alignleft"><?php next_posts_link('&laquo; Older Entries', 0); ?></div>
        <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;', 0) ?></div>
    </div>

    </div></div> <!-- Closes Content -->
    <div class="cleared"></div>
</div> <!-- Closes Main -->

<?php get_footer(); ?>
