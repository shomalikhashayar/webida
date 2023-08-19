<?php

/*
Template Name: Blog template
*/

?>

<?php get_header('blog'); ?>

<div class="">
    <h1 class="bg-primary"><?php the_title(); ?></h1>
    <?php get_template_part('includes/section', 'content'); ?>
</div>


<?php get_footer(); ?>