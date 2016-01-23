<?php /*
Example template
Author: Archon Digital (Jonathan Cuevas) http://archondigital.com/
   Place in theme folder
*/
?>
<h3>Possibly Related Posts</h3>
<?php if ($related_query->have_posts()):?>
<ul class="related-posts">
    <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
    <li>  <?php $postimageurl = has_post_thumbnail(); if ($postimageurl) { ?>
	    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo the_post_thumbnail( array(100,100) ); ?></a>
	    <?php } else { ?>
	    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/default.jpg" alt="<?php the_title(); ?>" width="100" height="100"/></a>
	    <?php } ?>
	    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
</ul>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
<div style="clear: both">&nbsp;</div>
<br/><br/>