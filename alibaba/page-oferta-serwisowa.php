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
<main class="page--options pagewp flex">
    <a class="page--options__item" href="<?php echo get_page_link( get_page_by_title( 'Sieci handlowe i usługowe' )->ID ); ?>">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/networking.svg'; ?>" alt="img" />
        Sieci handlowe i usługowe
    </a>
    <a class="page--options__item" href="<?php echo get_page_link( get_page_by_title( 'Producenci urządzeń IT' )->ID ); ?>">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/computer.svg'; ?>" alt="img" />
        Producenci urządzeń IT
    </a>
    <a class="page--options__item" href="<?php echo get_page_link( get_page_by_title( 'Branża logistyczna' )->ID ); ?>">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/distributed.svg'; ?>" alt="img" />
        Branża logistyczna
    </a>
</main>

<?php
get_footer();
?>