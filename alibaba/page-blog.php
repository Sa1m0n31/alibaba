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

    <main class="landing__main landing__main--page w flex">
    </main>

    </div>

    <div class="blogSection blogSection--page w flex">
        <span id="blog"></span>

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 300
        );

        $post_query = new WP_Query($args);

        if($post_query->have_posts() ) {
            while($post_query->have_posts() ) {
                $post_query->the_post();
                $post_id = get_the_ID();
                ?>
                <div class="blog__item">
                    <figure>
                        <?php
                        echo get_the_post_thumbnail();
                        ?>
                    </figure>
                    <h4 class="blog__item__header">
                        <?php echo the_title(); ?>
                    </h4>
                    <div class="blog__item__text justify">
                        <?php
                        echo the_excerpt();
                        ?>
                    </div>
                    <a href="<?php the_permalink() ?>" class="blog__item__btn">
                        Więcej
                    </a>
                </div>
                <?php
            }
        }
        ?>
    </div>

<?php
get_footer();
?>