<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alibaba
 */

?>

<footer class="footer">
    <div class="w flex">
        <div class="footer__col">
            <a href="<?php echo home_url(); ?>" class="footer__col__logo">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo-footer.png'; ?>" alt="alibaba" />
            </a>
            <h6 class="footer__copyright">
                Copyright@ Alibaba Serwis techniczny
            </h6>
        </div>
        <div class="footer__col">
            <h5 class="footer__col__header">
                Nawigacja strony
            </h5>
            <ul class="footer__col__menu">
                <li><a href="<?php echo home_url(); ?>">Start</a></li>
                <li><a href="<?php echo home_url(); ?>#o-firmie">O firmie</a></li>
                <li><a href="<?php echo home_url(); ?>#centrum-serwisowe">Centrum serwisowe</a></li>
                <li><a href="<?php echo get_page_link( get_page_by_title( 'Sieci handlowe i usługowe' )->ID ); ?>">Sieci handlowe i usługowe</a></li>
                <li><a href="<?php echo get_page_link( get_page_by_title( 'Producenci urządzeń IT' )->ID ); ?>">Producenci IT</a></li>
                <li><a href="<?php echo get_page_link( get_page_by_title( 'Branża logistyczna' )->ID ); ?>">Branża logistyczna</a></li>
                <li><a href="<?php echo home_url(); ?>#uslugi-handlowe">Uslugi handlowe</a></li>
                <li><a href="<?php echo home_url(); ?>#blog">Blog</a></li>
                <li><a href="<?php echo home_url(); ?>#kontakt">Kontakt</a></li>
                <li><a href="<?php echo get_page_link( get_page_by_title( 'Polityka prywatności' )->ID ); ?>">Polityka prywatności</a></li>
            </ul>
        </div>
        <div class="footer__col">
            <h5 class="footer__col__header">
                Kontakt
            </h5>
            <a class="footer__col__item" href="mailto:info@alibaba.pl">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/mail-icon.png'; ?>" alt="mail" />
                <span>
                        info@alibaba.pl
                    </span>
            </a>
            <a class="footer__col__item" href="tel:+48422059090">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/contact-icon.png'; ?>" alt="mail" />
                <span>
                        (42)  205 90 90
                    </span>
            </a>
            <div class="footer__col__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/nip.png'; ?>" alt="mail" />
                <span>
                        NIP: 726-253-30-37
                    </span>
            </div>
            <div class="footer__col__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/location.png'; ?>" alt="mail" />
                <span>
                        Adres: Św. Teresy 91,<br/>
                        91 - 341 Łódż
                    </span>
            </div>

            <div class="footer__col__bottom flex">
                <a href="https://www.facebook.com/profile.php?id=100076471621791" target="_blank" class="footer__col__bottom__link">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/fb-footer.png'; ?>" alt="facebook" />
                </a>
                <a href="https://www.linkedin.com/company/alibabapl/mycompany/" target="_blank" class="footer__col__bottom__link">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/linkedin-footer.png'; ?>" alt="facebook" />
                </a>
                <a href="https:/allegro.pl" target="_blank" class="footer__col__bottom__link footer__col__bottom__link--allegro">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/allegro.png'; ?>" alt="facebook" />
                </a>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
