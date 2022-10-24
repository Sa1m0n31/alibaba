<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
