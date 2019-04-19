<?php
// Header toevoegen.
get_header();

// Wordpress loop
if (have_posts()) :
    while ( have_posts()) : the_post();
        ?>
        <article class="bericht">
         <div class="container">
             <a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
             <?php the_content() ?>
         </div>
        </article>
        <!-- einde container -->
    <?php endwhile;
else :
    echo "<p>Er zijn geen berichten gevonden</p>";
endif;
// Einde wordpress loop

// footer toevoegen
get_footer();
?>
