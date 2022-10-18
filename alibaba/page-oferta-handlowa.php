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
        <div class="landing__main__left">
            <div class="landing__main__content landing__main__content--page landing__main__content--page--2 landing__main__content--page--4">
                <p class="nobold">
                    Posiadamy pełną ofertę sprzętu i oprogramowania. Zachęcamy do skontaktowania się z naszym działem handlowym, który zaproponuje najbardziej odpowiednie rozwiązanie. Dostawa sprzętu możliwa jest na terenie całej Polski, oferujemy również opiekę serwisową oraz szkolenia dla nowych użytkowników.
                </p>
            </div>
        </div>

        <div class="landing__main__right landing__main__right--page2 landing__main__right--page4">
            <div class="landing--page__points">
                    <span class="landing--page__points__item">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="it" />
                        <span>
                            zapewniamy fachowe doradztwo w zakresie doboru rozwiązań, sprzętu i oprogramowania,
                        </span>
                    </span>
                <span class="landing--page__points__item">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="it" />
                        <span>
                            oferujemy produkty m.in.: Fujitsu, Hewlett Packard, Dell, IBM, Cisco, Lenovo, Microsoft, FortiGate, 3COM, Adobe, Corel, Stormshield,
                        </span>
                    </span>
                <span class="landing--page__points__item">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="it" />
                        <span>
                            posiadamy autoryzacje: HP Gold Partner, Fujitsu Select Expert Partner, Cisco SMB Partner,
                        </span>
                    </span>
                <span class="landing--page__points__item">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="it" />
                        <span>
                            na życzenie klienta dostarczymy dowolny sprzęt,
                        </span>
                    </span>
                <span class="landing--page__points__item">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="it" />
                        <span>
                            zapewniamy dostawy materiałów eksploatacyjnych,
                        </span>
                    </span>
                <span class="landing--page__points__item">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="it" />
                        <span>
                            jesteśmy autoryzowanym dystrybutorem oprogramowania Faronics dla działów IT
                        </span>
                    </span>
            </div>
        </div>
    </main>


    </div>

    <div class="landing__after landing__after--page2 w">
        <div class="flex">
            <figure class="landing__after__img">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/han1.jpeg'; ?>" alt="it" />
            </figure>
            <figure class="landing__after__img">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/han2.jpeg'; ?>" alt="it" />
            </figure>
        </div>
    </div>

<?php
get_footer();
?>