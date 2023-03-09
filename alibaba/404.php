<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container container--404">
    <div class="landing">
        <div class="topBar w">
            <a class="topBar__socialMediaLink"
               target="_blank"
               rel="noreferrer"
               href="https://www.facebook.com/profile.php?id=100076471621791">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/fb-new.svg'; ?>" alt="fb" />
            </a>
            <a class="topBar__socialMediaLink"
               target="_blank"
               rel="noreferrer"
               href="https://www.linkedin.com/company/alibabapl/mycompany/">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/linkedin-new.svg'; ?>" alt="instagram" />
            </a>
            <a class="topBar__socialMediaLink topBar__socialMediaLink--allegro"
               target="_blank"
               rel="noreferrer"
               href="https://allegro.pl/uzytkownik/AlibabaPL">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/allegro-new.svg'; ?>" alt="fb" />
            </a>
        </div>

        <div class="mobileMenu d-mobile">
            <div class="mobileMenu__inner">
                <a href="<?php echo home_url(); ?>" class="topMenu__logo">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo.svg?n=1'; ?>" alt="logo" />
                </a>

                <button class="topMenu__menuBtn d-mobile" onclick="closeMobileMenu()">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/mobile-menuClose.png'; ?>" alt="menu" />
                </button>

                <div class="mobileMenu__main">
                    <div class="mobileMenu__list">
                        <ul class="footer__col__menu">
                            <li><a href="<?php echo home_url(); ?>">Start</a></li>
                            <li><a href="<?php echo home_url(); ?>#o-firmie">O firmie</a></li>
                            <li><a href="<?php echo home_url(); ?>#centrum-serwisowe">Centrum serwisowe</a></li>
                            <li><a href="<?php echo get_page_link( get_page_by_title( 'Sieci handlowe i usługowe' )->ID ); ?>">Sieci handlowe i usługowe</a></li>
                            <li><a href="<?php echo get_page_link( get_page_by_title( 'Producenci urządzeń IT' )->ID ); ?>">Producent urządzeń</a></li>
                            <li><a href="<?php echo get_page_link( get_page_by_title( 'Branża logistyczna' )->ID ); ?>">Branża logistyczna</a></li>
                            <li><a href="<?php echo get_page_link( get_page_by_title( 'Oferta handlowa' )->ID ); ?>">Uslugi handlowe</a></li>
                            <li><a href="<?php echo home_url(); ?>#blog">Blog</a></li>
                            <li><a href="<?php echo home_url(); ?>#kontakt">Kontakt</a></li>
                            <li><a href="<?php echo get_page_link( get_page_by_title( 'Polityka prywatności' )->ID ); ?>">Polityka prywatności</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer__col__bottom flex">
                    <a href="https://www.facebook.com/profile.php?id=100076471621791" target="_blank" class="footer__col__bottom__link">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/fb-new.svg'; ?>" alt="facebook" />
                    </a>
                    <a href="https://www.linkedin.com/company/alibabapl/mycompany/" target="_blank" class="footer__col__bottom__link">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/linkedin-new.svg'; ?>" alt="facebook" />
                    </a>
                    <a href="https://allegro.pl" target="_blank" class="footer__col__bottom__link footer__col__bottom__link--allegro">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/allegro-new.svg'; ?>" alt="facebook" />
                    </a>
                </div>
            </div>
        </div>

        <div class="topMenu w flex">
            <a href="<?php echo home_url(); ?>" class="topMenu__logo">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo-biale.png'; ?>" alt="logo" />
            </a>

            <button class="topMenu__menuBtn d-mobile" onclick="openMobileMenu()">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/mobile-menu.png'; ?>" alt="menu" />
            </button>

            <menu class="topMenu__menu flex">
                <a href="<?php echo home_url(); ?>" class="topMenu__menu__item">
                    Start
                </a>
                <a href="<?php echo home_url(); ?>#o-firmie" class="topMenu__menu__item">
                    O firmie
                </a>
                <span class="topMenu__menu__item">
                    Centrum serwisowe
                    <span class="topMenu__menu__item__dropdown">
                        <a href="<?php echo get_page_link( get_page_by_title( 'Sieci handlowe i usługowe' )->ID ); ?>" class="topMenu__menu__item">
                            Sieci handlowe i usługowe
                        </a>
                        <a href="<?php echo get_page_link( get_page_by_title( 'Producenci urządzeń IT' )->ID ); ?>" class="topMenu__menu__item">
                            Producent urządzeń
                        </a>
                        <a href="<?php echo get_page_link( get_page_by_title( 'Branża logistyczna' )->ID ); ?>" class="topMenu__menu__item">
                            Branża logistyczna
                        </a>
                    </span>
                </span>
                <a href="<?php echo get_page_link( get_page_by_title( 'Oferta handlowa' )->ID ); ?>" class="topMenu__menu__item">
                    Usługi handlowe
                </a>
                <a href="<?php echo home_url(); ?>#blog" class="topMenu__menu__item">
                    Blog
                </a>
                <a href="<?php echo home_url(); ?>#kontakt" class="topMenu__menu__item">
                    Kontakt
                </a>
            </menu>

            <div class="topMenu__contacts">
                <div class="topMenu__contacts__item flex">
                    <figure class="topMenu__contacts__item__figure">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/dariusz.png'; ?>" alt="kontakt" />
                    </figure>
                    <div class="topMenu__contacts__item__content">
                        <h3 class="topMenu__contacts__item__header">
                            Dariusz Padyjasek
                        </h3>
                        <p class="topMenu__contacts__item__post">
                            Centrum serwisowe
                            <span class="topMenu__contacts__item__phoneNumber">
                                +48 510 088 644
                            </span>
                        </p>
                    </div>
                </div>
                <div class="topMenu__contacts__item flex">
                    <figure class="topMenu__contacts__item__figure">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/monika.png'; ?>" alt="kontakt" />
                    </figure>
                    <div class="topMenu__contacts__item__content">
                        <h3 class="topMenu__contacts__item__header">
                            Monika Rydyger
                        </h3>
                        <p class="topMenu__contacts__item__post">
                            Usługi handlowe
                            <span class="topMenu__contacts__item__phoneNumber">
                                +48 510 088 640
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <main id="primary" class="site-main site-main--404">

		<h1 class="notFound__header">
            404
        </h1>
        <h2 class="notFound__subheader">
            Niestety, ta strona nie istnieje
        </h2>

        <a class="notFound__button"
           href="<?php echo home_url(); ?>">
            Strona główna
        </a>

	</main><!-- #main -->
    </div>
</div>
</body>
</html>