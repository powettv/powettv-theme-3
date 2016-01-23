<?php if (have_posts()) : ?>

<?php get_template_part('post-loop'); ?>

<?php else : ?>

<div class="post">
<h2 class="postTitle">Not Found</h2>
<div class="postContent"><p>Sorry, but you are looking for something that isn't here.</p></div>
</div> <!-- Closes Post -->

<?php endif; ?>
