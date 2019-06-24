<?php
// Header toevoegen.
get_header();
?>

<div class="container">
    <main>
        <div>

            <?php
            // Wordpress loop
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>

                    <article class="bericht">

                        <h2><?php the_title() ?></h2>
                        <?php the_content() ?>

                    </article>
                    <div class="postmetaData">
                        Geplaasts door:
                        <?php the_author(); ?>
                        <br>
                        op:
                        <?php the_date(); ?>
                        <br>
                        in de catogorie:
                        <?php the_category(); ?>
                    </div>
                    <!-- einde container -->
                <?php endwhile;
            else :
                echo "<p>Er zijn geen berichten gevonden</p>";
            endif;
            // Einde wordpress loop
            comments_template("", true)
            ?>
        </div>
        <!--    De aside    -->
        <aside>
            <?php dynamic_sidebar('widget_aside '); ?>
            <h4>Vorig bericht</h4>
            <?php
            $previous_post = get_previous_post();
            if (!empty($previous_post)): ?>
                <a href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>"><?php echo esc_attr($previous_post->post_title); ?></a>
            <?php endif; ?>
            <h4>Volgende bericht</h4>
            <?php
            $next_post = get_next_post();
            if (!empty($next_post)): ?>
                <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo esc_attr($next_post->post_title); ?></a>
            <?php endif; ?>
        </aside>
    </main>
</div>
<?php
// footer toevoegen
get_footer();
?>
