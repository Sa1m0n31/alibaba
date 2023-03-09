<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alibaba
 */

get_header();
?>

    </div>
    <main id="primary" class="site-main site-main--single">

        <?php
        while ( have_posts() ) {
            the_post();

            ?>

            <h1 class="single__title">
                <?php
                echo the_title();
                ?>
            </h1>

            <article class="single__content">
                <?php
                echo the_content();
                ?>
            </article>

            <?php
        }
        ?>

    </main><!-- #main -->

<?php
get_footer();
?>