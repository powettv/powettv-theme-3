<?php get_header(); ?>

<div id="Main">

<?php get_sidebar(); ?>

<?php get_template_part('top-ad'); ?>

<div id="ContentWrapper"><div id="Content">

<?php if (have_posts()) : ?>

<?php 
// Get Author
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>

<h2>
<?php
// NOTE: Only get the Category that is currently being listed (VERY IMPORTANT!)
$objCurCat = get_category(get_query_var('cat'));
// Print out a) Parent categories (with links), current category, and page #!
echo 
//  get_category_parents($objCurCat->category_parent, true, ' >> ') 
  get_category_parents(get_query_var('cat'), true, ' >> ') 
//. $objCurCat->cat_name 
. ' Page ' . ((get_query_var('paged')) != 0 ? get_query_var('paged') : 1);
?>
</h2>

<?php 
$strCategoryLinks = '';

if(is_category('games')){
    $strCategoryLinks = 'links_games';
}
else if(is_category('powet-alphabet')){
    $strCategoryLinks = 'links_powet-alphabet';
}

if($strCategoryLinks != ''){
?>
<?php get_template_part($strCategoryLinks); ?>
    <div>
        <br />
    </div>
<?php
}
?>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h2 class="pageTitle">Entries Tagged &#8216;<?php single_tag_title(); ?>&#8217;:</h2>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2 class="pageTitle">Archive for <?php the_time('F jS, Y'); ?></h2>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 class="pageTitle">Archive for <?php the_time('F, Y'); ?>:</h2>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2 class="pageTitle">Archive for <?php the_time('Y'); ?>:</h2>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2 class="pageTitle">Sweet Powet.TV entries by <?= $curauth->nickname; ?></h2>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2 class="pageTitle">Blog Archives</h2>
<?php } ?>

<?php get_template_part('post-loop'); ?>

<?php else : ?>

    <div class="post">
    <h2 class="postTitle">Not Found</h2>
    <div class="postContent"><p>Sorry, but you are looking for something that isn't here.</p></div>
    </div> <!-- Closes Post -->

<?php endif; ?>

<div id="NextPrevious">
    <div class="alignleft"><?php next_posts_link('&laquo; Older Entries', 0); ?></div>
    <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;', 0) ?></div>
</div>

</div></div> <!-- Closes Content -->
<div class="cleared"></div>    
</div> <!-- Closes Main -->

<?php get_footer(); ?>
