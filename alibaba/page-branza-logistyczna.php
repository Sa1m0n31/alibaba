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
        <div class="landing__main__left landing__main__left--3">
            <div class="landing__main__content landing__main__content--page">
                <p>
                    Rozwiązania IT są nieodłączną częścią nowoczesnego centrum logistycznego, magazynu, lub dowolnego elementu infrastruktury logistycznej. Rynek oczekuje szybkich, będących na stałym poziomie usług – dostawy same-day stają się coraz bardziej popularne. Rosnąca ilość urządzeń które odpowiadają za prawidłowe działanie różnorodnych procesów i czynności stawia nowe wyzwania przed osobami zarządzającymi często  bardzo rozproszoną infrastrukturą, składającą się z setek urządzeń.
                </p>
            </div>
        </div>

        <div class="landing__main__right landing__main__right--page2">
            <h4 class="landing--page__points__header">
                Proponujemy współpracę która odciąży dział IT od konieczności wykonywania napraw OnSite:
            </h4>

            <div class="landing--page__points landing--page__points--3">
                    <span class="landing--page__points__item">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="it" />
                        <span>
                            mniejsze koszty utrzymania działu IT
                        </span>
                    </span>
                <span class="landing--page__points__item">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="it" />
                        <span>
                            większa elastyczność
                        </span>
                    </span>
                <span class="landing--page__points__item">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="it" />
                        <span>
                            szybkość reakcji – SLA 4h
                        </span>
                    </span>
                <span class="landing--page__points__item">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="it" />
                        <span>
                            wysoka jakość obsługi
                        </span>
                    </span>
                <span class="landing--page__points__item">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="it" />
                        <span>
                            doświadczeni specjaliści od pierwszego dnia rozpoczęcia współpracy
                        </span>
                    </span>
            </div>
        </div>
    </main>


    </div>

    <div class="landing__after landing__after--page2 w">
        <div class="flex">
            <figure class="landing__after__img">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/trans-1.png'; ?>" alt="it" />
            </figure>
            <figure class="landing__after__img">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/trans-2.png'; ?>" alt="it" />
            </figure>
            <figure class="landing__after__img">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/trans-3.png'; ?>" alt="it" />
            </figure>
        </div>
    </div>

    <div class="page__header">
        <h1 class="page__header__header">
            Opis usług
        </h1>
    </div>

    <div class="pagewp page--1">
        <div class="w flex">
            <div class="section--points__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Urządzenia fiskalne
                </h4>
                <p class="section--points__item__text">
                    Pracujemy z markami takimi jak Posnet, Novitus, ELZAB. Posiadamy uprawnienia do fiskalizowania i naprawiania urządzeń. Wdrażamy, serwisujemy drukarki i kasy fiskalne w drogeriach, aptekach i innych punktach detalicznych na terenie Polski. Zapewniamy pełną obsługę od zakupu poprzez instalację, fiskalizację, przeglądy serwisowe, odczyty oraz bieżące naprawy,  dodatkowo zapewniamy dostawy materiałów eksploatacyjnych.
                </p>
            </div>
            <div class="section--points__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Laptopy i komputery stacjonarne
                </h4>
                <p class="section--points__item__text">
                    Od kilkunastu lat jesteśmy autoryzowanym partnerem serwisowym firmy Dell, HP. Jako uzupełnienie oferty możemy zapewnić również sprzedaż i doradztwo w zakresie zakupu sprzętu.
                </p>
            </div>
            <div class="section--points__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Digital Signage
                </h4>
                <p class="section--points__item__text">
                    Współpracujemy z kilkoma czołowymi producentami monitorów (IIYAMA, Samsung) oraz systemów do wyświetlania treści. Pomagamy zaprojektować, wdrożyć (fizycznie zamontować i skonfigurować) a później obsługiwać wyświetlanie treści reklamowych, informacyjnych.
                </p>
            </div>
            <div class="section--points__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Systemy zasilania awaryjnego
                </h4>
                <p class="section--points__item__text">
                    UPS – instalacje które zapewniają podtrzymanie zasilania, głównie na stanowiskach kasowych oraz w części magazynowej sklepów wielkopowierzchniowych. Zapewniamy naprawę, wymianę baterii, weryfikację sprawności.
                </p>
            </div>
            <div class="section--points__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Automaty self-service
                </h4>
                <p class="section--points__item__text">
                    Prowadzimy kompleksową obsługę automatów do wydawania paczek. Od etapu audytu lokalizacji, przygotowania terenu, uzbrojenia w potrzebne media, instalacji, konfiguracji do serwisowania i konserwacji. Naszymi głównymi partnerami są firma Modern-Expo (projekt Allegro) oraz Swipbox (projekt DPD).
                </p>
            </div>
            <div class="section--points__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Usługi instalacyjne
                </h4>
                <p class="section--points__item__text">
                    Prowadzimy szereg projektów w których odpowiedzialni jesteśmy za montaż i konfigurację różnorodnych urządzeń w zakresie instalacji niskoprądowych:
                    <br/><br/>
                    •	Sieci LAN – urządzenia przewodowe i bezprzewodowe;<br/>
                    •	Wyświetlacze Digital Signange;<br/>
                    •	Kasy samoobsługowe, boksy kasowe.

                </p>
            </div>
        </div>
    </div>

<?php
get_footer();
?>