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
                    Stanowiska kasowe
                </h4>
                <p class="section--points__item__text">
                    Posiadamy kompetencję do kompleksowej obsługi stanowiska kasowego, instalację, serwisowanie, modyfikowanie   zarówno   tradycyjnych jak i wersji samoobsługowych.
                </p>
            </div>
            <div class="section--points__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Drukarki laserowe
                </h4>
                <p class="section--points__item__text">
                    Instalujemy i naprawiamy różnego rodzaju urządzenia drukujące (HP, Lexmark, Canon), dodatkowo możemy zaproponować pełną usługę druku w ramach której dostarczamy urządzenia oraz materiały, klient płaci za wydruk.
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
                    Automaty  self-service
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
            <div class="section--points__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                <h4 class="section--points__item__header">
                    Utylizację sprzętu
                </h4>
                <p class="section--points__item__text">
                    Posiadamy możliwość, utylizacji i zarządzania starym sprzętem elektronicznym. Zapewniamy logistykę, inwentaryzację wraz z przekazaniem elektrośmieci do   specjalistycznych firm utylizacyjnych.
                    Prowadzimy utylizację sprzętu, współpracując z firmami które przetwarzają odpady i wykorzystują ponownie surowce. Dbajmy wspólnie o nasze otoczenie!
                </p>
            </div>
        </div>
    </div>

<?php
get_footer();
?>