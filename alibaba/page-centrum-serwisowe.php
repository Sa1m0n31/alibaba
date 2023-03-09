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
            <div class="landing__main__content landing__main__content--page">
                <p>
                    W ramach współpracy oferujemy pomoc techniczną, serwis sprzętu
                    elektronicznego, instalacje i&nbsp;konfiguracje  systemów informatycznych.
                </p>
            </div>
        </div>

        <div class="landing__main__right landing__main__right--page1">
            <figure class="landing__main__right__img1 landing__main__right__img1--network">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/sieci-1.png'; ?>" alt="alibaba1" />
            </figure>
            <div class="landing__main__right__bottom landing__main__right__bottom--network flex">
                <figure class="landing__main__right__img2">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/sieci1.jpeg'; ?>" alt="alibaba1" />
                </figure>
                <figure class="landing__main__right__img3">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/sieci2.jpeg'; ?>" alt="alibaba1" />
                </figure>
            </div>
        </div>
    </main>
    </div>

    <div class="landing__after w">
        <p class="landing__after__text">
            Pracujemy z czołowymi producentami różnorodnych technologii, posiadamy kilkunastoletnie doświadczenie oraz bazę
            ponad 150 techników na terenie Polski, Czech oraz Słowacji.
            Miesięcznie przeprowadzamy ponad 10 tys. interwencji.
        </p>
        <p class="landing__after__text">
            Wiele oddziałów rozsianych po całym kraju powoduje wiele wyzwań natury logistycznej. Nasi partnerzy dzięki nam oszczędzają
            czas i pieniądze.
        </p>
    </div>

    <div class="landing__after landing__after--page2 w">
        <div class="flex">
            <figure class="landing__after__img">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/it1.jpeg'; ?>" alt="it" />
            </figure>
            <figure class="landing__after__img">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/it2.jpeg'; ?>" alt="it" />
            </figure>
        </div>
        <div class="landing__after__bottom flex landing__after__bottom--flexStart">
            <h3 class="landing__after__bottom__header">
                Jakie korzyści daje outsourcing serwisu urządzeń?
            </h3>
            <div class="landing__after__bottom__points landing__after__bottom__points--2">
                <div class="landing__after__bottom__points__item">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="check" />
                    <span>
                        brak konieczności budowania struktur od zera
                    </span>
                </div>
                <div class="landing__after__bottom__points__item">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="check" />
                    <span>
                        mniejsze koszty prowadzenia serwisu, optymalne wykorzystanie czasu pracy serwisantów
                    </span>
                </div>
                <div class="landing__after__bottom__points__item">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="check" />
                    <span>
                        większa elastyczność
                    </span>
                </div>
                <div class="landing__after__bottom__points__item">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check-background.png'; ?>" alt="check" />
                    <span>
                        brak rozbudowanej struktury organizacyjnej, HR, logistyka itd
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="landing__after">
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

    <div class="landing__after landing__after--page2 w">
        <div class="flex">
            <figure class="landing__after__img">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/log1.jpeg'; ?>" alt="it" />
            </figure>
            <figure class="landing__after__img">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/log2.jpeg'; ?>" alt="it" />
            </figure>
        </div>
    </div>

    <div class="page__header">
        <h1 class="page__header__header">
            Opis usług
        </h1>
    </div>

    <div class="pagewp page--1 page--main">
        <div class="w flex">
            <a class="section--points__item" href="<?php echo get_page_link(get_page_by_title('Serwis urzadzen elektronicznych OnSite')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Serwis urządzeń elektronicznych OnSite
                </h4>
                <span class="btn btn--landing btn--formSubmit">
                    Więcej
                </span>
            </a>
            <a class="section--points__item" href="<?php echo get_page_link(get_page_by_title('Serwis rozproszonych srodowisk IT')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Serwis rozproszonych środowisk IT
                </h4>
                <span class="btn btn--landing btn--formSubmit">
                    Więcej
                </span>
            </a>
            <a class="section--points__item" href="<?php echo get_page_link(get_page_by_title('Sprzedarz i konfiguracja urzadzen elektronicznych')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Sprzedaż i konfiguracja urządzeń elektronicznych
                </h4>
                <span class="btn btn--landing btn--formSubmit">
                    Więcej
                </span>
            </a>
            <a class="section--points__item" href="<?php echo get_page_link(get_page_by_title('Sprzedaz i serwis urzadzen fiskalnych')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Sprzedaż i serwis urządzeń fiskalnych
                </h4>
                <span class="btn btn--landing btn--formSubmit">
                    Więcej
                </span>
            </a>
            <a class="section--points__item" href="<?php echo get_page_link(get_page_by_title('Sprzedaz i serwis drukarek w firmach')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Sprzedaż i serwis drukarek w firmach
                </h4>
                <span class="btn btn--landing btn--formSubmit">
                    Więcej
                </span>
            </a>
            <a class="section--points__item" href="<?php echo get_page_link(get_page_by_title('Serwis laptopow i komputerow stacjonarnych w firmach')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Serwis laptopów i komputerów stacjonarnych w firmach
                </h4>
                <span class="btn btn--landing btn--formSubmit">
                    Więcej
                </span>
            </a>
            <a class="section--points__item" href="<?php echo get_page_link(get_page_by_title('Wdrazanie i obsluga ekranow reklamowych')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Wdrażanie i obsługa ekranów reklamowych
                </h4>
                <span class="btn btn--landing btn--formSubmit">
                    Więcej
                </span>
            </a>
            <a class="section--points__item" href="<?php echo get_page_link(get_page_by_title('Serwis systemow zarzadzania awaryjnego')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Serwis systemów zarządzania awaryjnego
                </h4>
                <span class="btn btn--landing btn--formSubmit">
                    Więcej
                </span>
            </a>
            <a class="section--points__item" href="<?php echo get_page_link(get_page_by_title('Obsluga automatow self-service')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Obsługa automatów self-service
                </h4>
                <span class="btn btn--landing btn--formSubmit">
                    Więcej
                </span>
            </a>
            <a class="section--points__item" href="<?php echo get_page_link(get_page_by_title('Doradztwo doboru sprzetu dla firm')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Doradztwo doboru sprzętu dla firm
                </h4>
                <span class="btn btn--landing btn--formSubmit">
                    Więcej
                </span>
            </a>
            <a class="section--points__item" href="<?php echo get_page_link(get_page_by_title('Uslugi instalacyjne')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Usługi instalacyjne
                </h4>
                <span class="btn btn--landing btn--formSubmit">
                    Więcej
                </span>
            </a>
        </div>
    </div>

<?php
get_footer();
?>