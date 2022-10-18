<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alibaba
 */

get_header();
?>

    <main class="landing__main w flex">
        <div class="landing__main__left">
            <h1 class="landing__main__header">
                Profesjonalne wsparcie
            </h1>
            <div class="landing__main__content">
                <p>
                    Zapewniamy kompleksowe wsparcie klienta w zakresie serwisu, zarządzania i&nbsp;konserwacji szeroko pojętej infrastruktury informatycznej.
                </p>
                <p>
                    Specjalizujemy się w usługach serwisowych i&nbsp;instalacyjnych na miejscu u klienta.
                </p>
                <p>
                    Naszym celem jest zapewnienie bezpieczeństwa i&nbsp;ciągłości pracy urządzeń i&nbsp;systemów tak aby nasi klienci mogli skupić się na rozwijaniu swojego biznesu.
                </p>
            </div>

            <div class="landing__buttons flex">
                <a href="<?php echo get_page_link( get_page_by_title( 'Oferta serwisowa' )->ID ); ?>" class="btn btn--landing">
                    Oferta serwisowa
                </a>
                </a>
                <a href="<?php echo get_page_link( get_page_by_title( 'Oferta handlowa' )->ID ); ?>" class="btn btn--landing btn--landing--white">
                    Oferta handlowa
                </a>
            </div>
        </div>

        <div class="landing__main__right landing__main__right--main">
            <figure class="landing__main__right__img1">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/land1.png'; ?>" alt="alibaba1" />
            </figure>
            <div class="landing__main__right__bottom flex">
                <figure class="landing__main__right__img2">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/landing2.png'; ?>" alt="alibaba1" />
                </figure>
                <figure class="landing__main__right__img3">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/land3.png'; ?>" alt="alibaba1" />
                </figure>
            </div>
        </div>
    </main>
    </div>

    <div class="aboutUs" id="o-firmie">
        <div class="w">
            <h2 class="aboutUs__header">
                Poznaj naszą firmę
            </h2>
            <div class="flex flex--start">
                <div class="aboutUs__item">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/about1.svg'; ?>" alt="o-nas" />
                    <h3 class="aboutUs__item__header">
                        Doświadczenie
                    </h3>
                    <button class="aboutUs__item__btn" onclick="toggleCompanyContent(0)">
                        <span>
                            Rozwiń
                        </span>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-down.svg'; ?>" alt="arrow" />
                    </button>
                    <p class="aboutUs__item__text">
                        Realizujemy usługi serwisowe od 2004 roku. Wspieramy naszych klientów na każdym etapie współpracy. Przez prawie 20 lat zrealizowaliśmy setki wymagających projektów, wykonaliśmy setki tysięcy napraw u klienta. Jesteśmy zawsze tam, gdzie potrzebują tego klienci. Nieustannie poszerzamy swoje kompetencje, aby oferować usługi na najwyższym poziomie.
                    </p>
                </div>
                <div class="aboutUs__item">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/about2.svg'; ?>" alt="o-nas" />
                    <h3 class="aboutUs__item__header">
                        Kompleksowa usługa
                    </h3>
                    <button class="aboutUs__item__btn" onclick="toggleCompanyContent(1)">
                        <span>
                            Rozwiń
                        </span>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-down.svg'; ?>" alt="arrow" />
                    </button>
                    <p class="aboutUs__item__text">
                        Oferujemy dostarczanie rozwiązań, usług utrzymaniowych oraz szeroko pojętego serwisu urządzeń informatycznych. Dzięki umowom i autoryzacjom największych producentów, wykorzystujemy najnowsze technologie wspierające biznes naszych klientów. Posiadamy kompetencje instalacyjne oraz elektryczne. Współpracujemy z siecią partnerów tak, aby zaoferować naszym klientom prawdziwie kompletne usługi.
                    </p>
                </div>
                <div class="aboutUs__item">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/about3.svg'; ?>" alt="o-nas" />
                    <h3 class="aboutUs__item__header">
                        170+ osób w 3 krajach
                    </h3>
                    <button class="aboutUs__item__btn" onclick="toggleCompanyContent(2)">
                        <span>
                            Rozwiń
                        </span>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-down.svg'; ?>" alt="arrow" />
                    </button>
                    <p class="aboutUs__item__text">
                        Pracuje dla nas zespół ponad 170 osób. Większość z nich to wysoko wykwalifikowani i doświadczeni informatycy. Obsługujemy przede wszystkim klientów o rozproszonej strukturze – firmy wielooddziałowe, sieci sklepowe, ale również mniejsze firmy lokalne. Każdy klient jest dla nas tak samo ważny, a każda naprawa wyjątkowo istotna.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="serviceCenter" id="centrum-serwisowe">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/centrum-serwisowe.png'; ?>" alt="centrum-serwisowe" />
        <div class="w">
            <h3 class="serviceCenter__header">
                Centrum serwisowe
            </h3>
            <div class="serviceCenter__main flex">
                <div class="serviceCenter__main__item">
                    <span class="serviceCenter__main__item__number">
                        98 843
                    </span>
                    <span class="serviceCenter__main__item__header">
                        incydentów
                    </span>
                    <span class="serviceCenter__main__item__text">
                        99% to naprawy OnSite
                    </span>
                </div>
                <div class="serviceCenter__main__item">
                    <span class="serviceCenter__main__item__number">
                        150
                    </span>
                    <span class="serviceCenter__main__item__header">
                        techników
                    </span>
                    <span class="serviceCenter__main__item__text">
                        Zespół specjalistów pracujących na terenie Polski, Czech i Słowacji.
                    </span>
                </div>
                <div class="serviceCenter__main__item">
                    <span class="serviceCenter__main__item__number">
                        24 h
                    </span>
                    <span class="serviceCenter__main__item__header">
                        na dobe
                    </span>
                    <span class="serviceCenter__main__item__text">
                        Dostęp do naszych usług jest możliwy również całodobowo. W ramach podpisanych umów gwarantujemy ciągłe wsparcie krytycznych elementów infrastruktury IT.
                    </span>
                </div>
            </div>

            <div class="serviceCenter__main__item serviceCenter__main__item--last">
                    <span class="serviceCenter__main__item__number">
                        4 h
                    </span>
                <span class="serviceCenter__main__item__header">
                        na reakcję
                    </span>
                <span class="serviceCenter__main__item__text">
                        W porozumieniu z klientem uzgadniamy zakres wykonywanych czynności oraz terminy rozwiązania poszczególnych incydentów. W zależności od kategorii usterki możemy zagwarantować rozpoczęcie naprawy na miejscu już w ciągu 4 godzin od podjęcia zgłoszenia.
                    </span>
            </div>
        </div>
    </div>

    <div class="section section--service" id="uslugi-handlowe">
        <div class="w">
            <h3 class="section__header">
                Usługi handlowe
            </h3>
            <div class="flex flex--start">
                <div class="section__images">
                    <figure class="section__images__img--1">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/uslugi-handlowe-1.png'; ?>" alt="uslugi" />
                    </figure>
                    <figure class="section__images__img--2">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/uslugi-handlowe-2.png'; ?>" alt="uslugi" />
                    </figure>
                    <figure class="section__images__img--3">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/uslugi-handlowe-3.png'; ?>" alt="uslugi" />
                    </figure>
                </div>
                <div class="section__text justify">
                    <p class="bold">
                        Posiadamy pełną ofertę sprzętu i oprogramowania. Zachęcamy do skontaktowania się z naszym działem handlowym, który zaproponuje najbardziej odpowiednie rozwiązanie. Dostawa sprzętu możliwa jest na terenie całej Polski, oferujemy również opiekę serwisową oraz szkolenia dla nowych użytkowników.
                    </p>
                    <p class="bold">
                        Nieodłącznym elementem naszej działalności serwisowej jest handlowe wsparcie działów IT:
                    </p>
                    <p>
                        zapewniamy fachowe doradztwo w zakresie doboru rozwiązań, sprzętu i oprogramowania,oferujemy produkty m.in.:<br/>
                        Fujitsu, Hewlett Packard, Dell, IBM, Cisco, Lenovo, Microsoft, FortiGate, 3COM, Adobe, Corel, Stormshield,
                        posiadamy autoryzacje: HP Gold Partner, Fujitsu Select Expert Partner, Cisco SMB Partner,
                        na życzenie klienta dostarczymy dowolny sprzęt,zapewniamy dostawy materiałów eksploatacyjnych, jesteśmy autoryzowanym dystrybutorem oprogramowania Faronics dla działów IT (http://www.faronics.pl).
                    </p>

                    <a href="<?php echo get_page_link( get_page_by_title( 'Oferta handlowa' )->ID ); ?>" class="btn btn--landing btn--landing--white">
                        Oferta handlowa
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section section--grey">
        <div class="section__icons flex">
            <div class="section__icons__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/icon1.png'; ?>" alt="icon" />
                <h4 class="section__icons__item__text">
                    Partnerskie relacje z wiodącymi producentami.
                </h4>
            </div>
            <div class="section__icons__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/icon2.png'; ?>" alt="icon" />
                <h4 class="section__icons__item__text">
                    Wyłącznie oryginalne produkty.
                </h4>
            </div>
            <div class="section__icons__item">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/icon3.png'; ?>" alt="icon" />
                <h4 class="section__icons__item__text">
                    Dobór optymalnych rozwiązań.
                </h4>
            </div>
        </div>
    </div>

    <div class="serviceCenter serviceCenter--2">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/proces-zamowienia.png'; ?>" alt="centrum-serwisowe" />
        <div class="w">
            <h3 class="process__header">
                Opis procesu zamówienia
            </h3>
            <div class="process__icons flex">
                <div class="process__icons__item">
                    <span>
                        Zapytanie klienta
                    </span>
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/proces-icon1.svg'; ?>" alt="icon" />
                </div>
                <div class="process__icons__item process__icons__item--2">
                    <span>
                        Dopasowanie rozwiązania
                    </span>
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/proces-icon2.svg'; ?>" alt="icon" />
                </div>
                <div class="process__icons__item process__icons__item--3">
                    <span>
                        Finalizacja projektu
                    </span>
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/proces-icon3.svg'; ?>" alt="icon" />
                </div>
            </div>

            <div class="lines">
                <span class="line line--1">
                    <span class="dot dot--1"></span>
                </span>
                <span class="line line--2">
                    <span class="dot dot--2"></span>
                </span>
                <span class="line line--3">
                    <span class="dot dot--3"></span>
                </span>
                <span class="line line--4">
                    <span class="dot dot--4"></span>
                </span>
            </div>

            <div class="process__icons--secondRow flex">
                <div class="process__icons__item process__icons__item--4">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/proces-icon4.svg'; ?>" alt="icon" />
                    <span>
                        Analiza<br/> potrzeb klienta
                    </span>
                </div>
                <div class="process__icons__item process__icons__item--5">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/proces-icon5.svg'; ?>" alt="icon" />
                    <span>
                        Etap zamówienia<br/> i jego realizacja
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="section section--onSite">
        <div class="w">
            <h3 class="process__header process__header--blue">
                Proces OnSite
            </h3>

            <div class="onSite__main flex">
                <span class="onSite__main__line">

                </span>

                <div class="onSite__main__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/onsite1.png'; ?>" alt="img" />
                    </figure>
                    <p class="onSite__main__item__text">
                        Zgłoszenie problemu na Helpdesk
                    </p>
                </div>
                <div class="onSite__main__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/onsite2.png'; ?>" alt="img" />
                    </figure>
                    <p class="onSite__main__item__text">
                        Analiza problemu
                        przez koordynatora
                    </p>
                </div>
                <div class="onSite__main__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/onsite3.png'; ?>" alt="img" />
                    </figure>
                    <p class="onSite__main__item__text">
                        Wysyłka sprzętu do
                        lokalnego magazynu
                    </p>
                </div>

                <figure class="longLine">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/long-line.png'; ?>" alt="long-line" />
                </figure>
            </div>

            <div class="onSite__main onSite__main--2 flex">
                <span class="onSite__main__line">

                </span>
                <div class="onSite__main__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/onsite5.png'; ?>" alt="img" />
                    </figure>
                    <p class="onSite__main__item__text">
                        Kontakt z klientem
                        przed realizacją
                    </p>
                </div>
                <div class="onSite__main__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/onsite4.png'; ?>" alt="img" />
                    </figure>
                    <p class="onSite__main__item__text">
                        Rozwiązanie problemu
                        OnSite
                    </p>
                </div>
                <div class="onSite__main__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/onsite6.png'; ?>" alt="img" />
                    </figure>
                    <p class="onSite__main__item__text">
                        Potwierdzenie zakończenia
                        prac przez klienta
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="serviceCenter serviceCenter--partners">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/partner-background.png'; ?>" alt="centrum-serwisowe" />
        <div class="partners w">
            <h2 class="partners__header">
                Poznaj partnerów
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo-footer.png'; ?>" alt="logo" />
            </h2>
            <figure class="partners__img">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/partnerzy.png'; ?>" alt="partnerzy" />
            </figure>
        </div>
    </div>

    <div class="section section--points">
        <h3 class="section__header section__header--desktop w">
            <span>
                Co nas wyróżnia na tle konkurencji?
            </span>
        </h3>
        <div class="w flex flex--start">
            <div class="section--points__main">
                <h3 class="section__header section__header--mobile w">
                    <span>
                        Co nas wyróżnia na tle konkurencji?
                    </span>
                </h3>

                <div class="section--points__item">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                    <h4 class="section--points__item__header">
                        Jedna jakość na terenie całego kraju.
                    </h4>
                    <p class="section--points__item__text">
                        Jest wiele firm które posiadają podobne umiejętności, niewiele jest za to takich które mogą realizować zadania z taką samą jakością na terenie całej Polski.
                    </p>
                </div>
                <div class="section--points__item">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                    <h4 class="section--points__item__header">
                        Połączenie sprzedaży i
                        serwisu (autoryzowanego)
                        – jeden partner bez
                        pośredników.
                    </h4>
                    <p class="section--points__item__text">
                        Posiadanie jednego partnera który sprzedaje oraz serwisuje urządzenia jest bardzo wygodne, optymalizuje czas oraz koszty.
                    </p>
                </div>
                <div class="section--points__item">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                    <h4 class="section--points__item__header">
                        Chcemy się rozwijać i jesteśmy bardzo elastyczni.
                    </h4>
                    <p class="section--points__item__text">
                        Nie boimy się nowych zadań, mamy wielu kreatywnych oraz ambitnych pracowników. Czekamy na nowe wyzwania - tak właśnie postrzegamy naszą pracę, jako pomaganie naszym partnerom.
                    </p>
                </div>
                <div class="section--points__item">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/check.png'; ?>" alt="check" />
                    <h4 class="section--points__item__header">
                        Struktura organizacyjna bardzo mocno skraca czas na podejmowanie decyzji.
                    </h4>
                    <p class="section--points__item__text">
                        Nie jesteśmy korporacją, potrafimy działać szybko i zwinnie. Jeżeli jest taka potrzeba to np. w krótkim czasie możemy przygotować ofertę.
                    </p>
                </div>
            </div>

            <div class="section--points__right section--points__right--2">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/points-img.png?n=1'; ?>" alt="img" />
                <div class="section--points__right__person">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/monika.png'; ?>" alt="person" />
                    </figure>
                    <div class="section--points__right__person__content">
                        <h5>
                            Monika Rydyger
                        </h5>
                        <h6>
                            Usługi handlowe
                        </h6>
                        <p>
                            Nasi technicy to wyjątkowi ludzie na których zawsze można polegać.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section--man">
        <div class="w flex">
            <div class="section__left">
                <h3 class="section__header">
                    W jaki sposób pracuje
                    nasz zespół?
                </h3>
                <p class="text justify">
                    W porozumieniu z klientem uzgadniamy zakres wykonywanych czynności, oraz terminy rozwiązania poszczególnych incydentów. W zależności od kategorii usterki możemy zagwarantować naprawę nawet w ciągu 2 godzin od zgłoszenia. Standardem dla nas są naprawy wykonywane w 4 godziny lub na następny dzień roboczy. Według naszej filozofii, czas naprawy, to jest czas doprowadzenia urządzenia do pełnej sprawności lub podstawienie urządzenia zastępczego.
                </p>
                <a href="#kontakt" class="btn btn--landing btn--landing--white">
                    Skontaktuj się z nami
                </a>
            </div>
            <figure class="man">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/zespol.png'; ?>" alt="man" />
            </figure>
        </div>
    </div>

    <div class="section section--map">
        <div class="w flex flex--start">
            <div class="map__left">
                <h2 class="section--map__header">
                    Nasze lokalizacje w 3 Państwach
                </h2>
                <p class="map__text">
                    Posiadamy zespól 150 wykfalfikowanych techników na terenie Polski, Czech i Słowacji
                </p>
                <p class="map__text">
                    Tak złożony zespół specjalistów
                    pozwala na efektywną obsługę
                    klientów o nawet bardzo rozproszonej strukturze.
                </p>
                <div class="section--points__right__person map__person">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/dariusz.png'; ?>" alt="person" />
                    </figure>
                    <div class="section--points__right__person__content">
                        <h5>
                            Dariusz Padyjasek
                        </h5>
                        <h6>
                            Centrum serwisowe
                        </h6>
                        <p>
                            Zespól złożony jest z najwyższej
                            klasy specjalistów w trosce o dobro
                            Twoje i Twojej firmy
                        </p>
                    </div>
                </div>
            </div>
            <div class="mapWrapper">
                <figure class="map">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/mapa.png'; ?>" alt="mapa" />
                </figure>
                <h3 class="blogHeader">
                    Zobacz o czym piszemy na naszym blogu
                </h3>
            </div>
        </div>
    </div>

    <div class="blogSection w flex">
        <span id="blog"></span>
        <div class="blog__item">
            <figure>
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/blog.png'; ?>" alt="blog" />
            </figure>
            <h4 class="blog__item__header">
                Projekt instalacji monitorów
                reklamowych w 600 sklepach.
            </h4>
            <p class="blog__item__text justify">
                Projekt polegał na instalacji i konfiguracji monitorów reklamowych w sklepach Rossmann. Do naszych zadań należało wykonanie fizycznej instalacji totemów wraz z monitorami na witrynach oraz uchwytów
            </p>
            <button class="blog__item__btn">
                Więcej
            </button>
        </div>
        <div class="blog__item">
            <figure>
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/blog.png'; ?>" alt="blog" />
            </figure>
            <h4 class="blog__item__header">
                Projekt instalacji monitorów
                reklamowych w 600 sklepach.
            </h4>
            <p class="blog__item__text">
                Projekt polegał na instalacji i konfiguracji monitorów reklamowych w sklepach Rossmann. Do naszych zadań należało wykonanie fizycznej instalacji totemów wraz z monitorami na witrynach oraz uchwytów
            </p>
            <button class="blog__item__btn">
                Więcej
            </button>
        </div>
        <div class="blog__item">
            <figure>
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/blog.png'; ?>" alt="blog" />
            </figure>
            <h4 class="blog__item__header">
                Projekt instalacji monitorów
                reklamowych w 600 sklepach.
            </h4>
            <p class="blog__item__text">
                Projekt polegał na instalacji i konfiguracji monitorów reklamowych w sklepach Rossmann. Do naszych zadań należało wykonanie fizycznej instalacji totemów wraz z monitorami na witrynach oraz uchwytów
            </p>
            <button class="blog__item__btn">
                Więcej
            </button>
        </div>
        <div class="blog__item">
            <figure>
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/blog.png'; ?>" alt="blog" />
            </figure>
            <h4 class="blog__item__header">
                Projekt instalacji monitorów
                reklamowych w 600 sklepach.
            </h4>
            <p class="blog__item__text">
                Projekt polegał na instalacji i konfiguracji monitorów reklamowych w sklepach Rossmann. Do naszych zadań należało wykonanie fizycznej instalacji totemów wraz z monitorami na witrynach oraz uchwytów
            </p>
            <button class="blog__item__btn">
                Więcej
            </button>
        </div>

        <a href="/" class="btn btn--landing btn--blog">
            Nasz blog
        </a>
    </div>

    <div class="section section--references section--noscroll">
        <h3 class="section__header text-center">
            Opinie naszych klientów
        </h3>

        <div class="references w flex">
            <div class="references__item">
                <img class="img--top" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/cytat.png'; ?>" alt="cytat" />

                <div class="references__item__text">
                    <p>
                        Od wielu lat współpracujemy z firmą ALIBABA Centrum Serwisowe Sp. z o.o. z Łodzi. Jako partner zapewnia nam kompleksową i rzetelną obsługę. Wdrożyliśmy wspólnie szereg rozwiązań które poprawiły funkcjonowanie naszej organizacji. Na co dzień korzystamy z pomocy technicznej która pozwala na nieprzerwaną i stabilną pracę naszych pracowników.
                    </p>
                    <p>
                        Jesteśmy bardzo zadowoleni z przebiegu współpracy, sprawności działania oraz dobrej komunikacji z pracownikami firmy ALIBABA Centrum Serwisowe Sp. z o.o. Polecamy ich jako profesjonalnego partnera z doświadczeniem i ciekawymi pomysłami, który zawsze rzetelnie podchodzi do powierzonych projektów.
                    </p>
                </div>

                <img class="img--stars" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/gwiazdki.png'; ?>" alt="stars" />
            </div>
            <div class="references__item references__item--center">
                <img class="img--top" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/cytat.png'; ?>" alt="cytat" />

                <div class="references__item__text">
                    <p>
                        Od wielu lat współpracujemy z firmą ALIBABA Centrum Serwisowe Sp. z o.o. z Łodzi. Jako partner zapewnia nam kompleksową i rzetelną obsługę. Wdrożyliśmy wspólnie szereg rozwiązań które poprawiły funkcjonowanie naszej organizacji. Na co dzień korzystamy z pomocy technicznej która pozwala na nieprzerwaną i stabilną pracę naszych pracowników.
                    </p>
                    <p>
                        Jesteśmy bardzo zadowoleni z przebiegu współpracy, sprawności działania oraz dobrej komunikacji z pracownikami firmy ALIBABA Centrum Serwisowe Sp. z o.o. Polecamy ich jako profesjonalnego partnera z doświadczeniem i ciekawymi pomysłami, który zawsze rzetelnie podchodzi do powierzonych projektów.
                    </p>
                </div>

                <img class="img--stars" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/gwiazdki.png'; ?>" alt="stars" />
            </div>
            <div class="references__item">
                <img class="img--top" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/cytat.png'; ?>" alt="cytat" />

                <div class="references__item__text">
                    <p>
                        Od wielu lat współpracujemy z firmą ALIBABA Centrum Serwisowe Sp. z o.o. z Łodzi. Jako partner zapewnia nam kompleksową i rzetelną obsługę. Wdrożyliśmy wspólnie szereg rozwiązań które poprawiły funkcjonowanie naszej organizacji. Na co dzień korzystamy z pomocy technicznej która pozwala na nieprzerwaną i stabilną pracę naszych pracowników.
                    </p>
                    <p>
                        Jesteśmy bardzo zadowoleni z przebiegu współpracy, sprawności działania oraz dobrej komunikacji z pracownikami firmy ALIBABA Centrum Serwisowe Sp. z o.o. Polecamy ich jako profesjonalnego partnera z doświadczeniem i ciekawymi pomysłami, który zawsze rzetelnie podchodzi do powierzonych projektów.
                    </p>
                </div>

                <img class="img--stars" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/gwiazdki.png'; ?>" alt="stars" />
            </div>
        </div>

        <div class="landing__buttons landing__buttons--references flex">
            <a href="<?php echo get_page_link( get_page_by_title( 'Branża logistyczna' )->ID ); ?>" class="btn btn--landing">
                Oferta serwisowa
            </a>
            <a href="<?php echo get_page_link( get_page_by_title( 'Oferta handlowa' )->ID ); ?>" class="btn btn--landing btn--landing--white">
                Oferta handlowa
            </a>
        </div>
    </div>

    <div class="serviceCenter serviceCenter--3">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/vision.jpeg'; ?>" alt="centrum-serwisowe" />
        <div class="w">
            <h3 class="bigHeader">
                Korzystając z naszych usług
                otwierasz nowe
                możliwości
            </h3>
            <h4 class="smallHeader">
                Cieszymy się że możemy wypełnic swoje zadanie
            </h4>
        </div>
    </div>

    <div class="faq">
        <div class="w">
            <h3 class="faq__header">
                Najczęściej zadawane pytania
            </h3>
            <div class="faq__main">
                <div class="faq__item">
                    <h4 class="faq__item__header">
                        Jakie posiadacie autoryzacje serwisowe?
                    </h4>
                    <p class="faq__item__text">
                        • DELL – komputery PC, Serwery i Macierze<br/>
                        • HP - komputery PC<br/>
                        • ELZAB – Urządzenia fiskalne<br/>
                        • POSNET – Urządzenia fiskalne<br/>
                        • NOVITUS – Urządzenia fiskalne<br/>
                    </p>
                </div>
                <div class="faq__item">
                    <h4 class="faq__item__header">
                        Jakie czasy SLA proponujecie? Czy czas SLA to czas naprawy?
                    </h4>
                    <p class="faq__item__text">
                        Czas reakcji lub naprawy dobierany jest indywidualnie do każdego projektu. Część urządzeń wymaga interwencji błyskawicznej np. Serwery. Inne jak np. automaty do wydawania różnych towarów posiadają kilkudniowy czas SLA.
                        Minimalny czas reakcji to 4 godziny od przyjęcia zgłoszenia. Należy rozgraniczyć czas naprawy od czasu reakcji, to dwa zupełnie inne parametry. Naprawa oznacza usunięcie awarii i przywrócenie sprawności.
                    </p>
                </div>
                <div class="faq__item">
                    <h4 class="faq__item__header">
                        Czy macie Helpdesk?
                    </h4>
                    <p class="faq__item__text">
                        Tak posiadamy zespół ludzi którzy na bieżąco przyjmują zgłoszenia, dokonują kwalifikacji i rozwiązują problemy które można załatwić zdalnie. W różnych projektach pełnimy różne rolę.
                        Często klienci posiadają włąsne zespoły, my jesteśmy w takim przypadku serwisem terenowym.
                    </p>
                </div>
                <div class="faq__item">
                    <h4 class="faq__item__header">
                        Jak mogę zgłosić awarię?
                    </h4>
                    <p class="faq__item__text">
                        Posiadamy system zgłoszeniowy SDesk - https://sdesk.alibaba.pl/ za pomocą którego każdy klient z którym mamy podpisaną umowę może zgłosić awarię. Dodatkowo zgłoszenia przyjmowane są drogą e-mailową oraz telefonicznie.
                    </p>
                </div>
                <div class="faq__item">
                    <h4 class="faq__item__header">
                        Jakie regiony obsługujecie?
                    </h4>
                    <p class="faq__item__text">
                        Posiadamy sieć oddziałów i serwisantów którzy pracują na terenie całej Polski, Czech oraz Słowacji.
                        Usługi świadczone są na tym samym poziomie, z tym samym czasem SLA w każdym miejscu.
                    </p>
                </div>

                <div class="section--points__right__person section--points__right__person--faq">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/points-person.png'; ?>" alt="person" />
                    </figure>
                    <div class="section--points__right__person__content">
                        <h5>
                            Monika Rydyger
                        </h5>
                        <h6>
                            Usługi handlowe
                        </h6>
                        <p>
                            Nasi technicy to wyjątkowi ludzie na których zawsze można polegać.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="experts">
        <h3 class="experts__header w">
            Skontaktuj się<br/>
            z naszymi ekspertami
        </h3>
        <div class="experts__main flex">
            <div class="experts__item">
                <div class="experts__item__top">
                    <figure class="experts__item__figure">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/monika.png'; ?>" alt="monika" />
                    </figure>
                    <h4 class="experts__item__name">
                        Monika Rydyger
                    </h4>
                    <h5 class="experts__item__position">
                        Usługi handlowe
                    </h5>
                </div>
                <div class="experts__item__bottom">
                    <a class="experts__item__bottom__item" href="mailto:m.rydyger@alibaba.pl">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/mail-icon.png'; ?>" alt="mail" />
                        <span>
                            m.rydyger@alibaba.pl
                        </span>
                    </a>
                    <a class="experts__item__bottom__item" href="tel:+48510088640">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/contact-icon.png'; ?>" alt="mail" />
                        <span>
                            +48 510 088 640
                        </span>
                    </a>
                </div>
            </div>

            <div class="experts__item experts__item--middle">
                <div class="experts__item__top">
                    <figure class="experts__item__figure">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/dariusz.png'; ?>" alt="monika" />
                    </figure>
                    <h4 class="experts__item__name">
                        Dariusz Padyjasek
                    </h4>
                    <h5 class="experts__item__position">
                        Centrum serwisowe
                    </h5>
                </div>
                <div class="experts__item__bottom">
                    <a class="experts__item__bottom__item" href="mailto:d.padyjasek@alibaba.pl">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/mail-icon.png'; ?>" alt="mail" />
                        <span>
                            d.padyjasek@alibaba.pl
                        </span>
                    </a>
                    <a class="experts__item__bottom__item" href="tel:+48510088644">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/contact-icon.png'; ?>" alt="mail" />
                        <span>
                            +48 510 088 644
                        </span>
                    </a>
                </div>
            </div>

            <div class="experts__item">
                <div class="experts__item__top">
                    <figure class="experts__item__figure">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo-a.png'; ?>" alt="monika" />
                    </figure>
                    <h4 class="experts__item__name">
                        Obsługa klienta
                    </h4>
                    <h5 class="experts__item__position">
                        Centrala
                    </h5>
                </div>
                <div class="experts__item__bottom">
                    <a class="experts__item__bottom__item" href="mailto:info@alibaba.pl">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/mail-icon.png'; ?>" alt="mail" />
                        <span>
                            info@alibaba.pl
                        </span>
                    </a>
                    <a class="experts__item__bottom__item" href="tel:+48422059090">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/contact-icon.png'; ?>" alt="mail" />
                        <span>
                            (42)  205 90 90
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="contact" id="kontakt">
        <div class="w">
            <h3 class="contact__header">
                Formularz kontaktowy
            </h3>
            <div class="contact__form">
                <div class="contact__form__inner">

                    <?php
                        echo do_shortcode('[contact-form-7 id="14" title="Formularz 1"]');
                    ?>

<!--                    <div class="contact__form__left">-->
<!--                        <label class="contact__form__label">-->
<!--                            Imię i nazwisko-->
<!--                            <input class="input" />-->
<!--                        </label>-->
<!--                        <label class="contact__form__label">-->
<!--                            Nazwa firmy-->
<!--                            <input class="input" />-->
<!--                        </label>-->
<!---->
<!--                        <label class="contact__form__label d-900">-->
<!--                            Email-->
<!--                            <input class="input" />-->
<!--                        </label>-->
<!--                        <label class="contact__form__label d-900">-->
<!--                            Temat-->
<!--                            <input class="input" />-->
<!--                        </label>-->
<!---->
<!--                        <label class="contact__form__label">-->
<!--                            Wiadomość-->
<!--                            <textarea class="input input--textarea"></textarea>-->
<!--                        </label>-->
<!--                        <button class="btn btn--landing btn--formSubmit">-->
<!--                            Wyślij formularz-->
<!--                        </button>-->
<!--                        <label class="contact__form__checkbox">-->
<!--                            <input type="checkbox" />-->
<!--                            Wyrażam zgodę na przetwarzanie moich danych-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="contact__form__right">-->
<!--                        <label class="contact__form__label">-->
<!--                            Email-->
<!--                            <input class="input" />-->
<!--                        </label>-->
<!--                        <label class="contact__form__label">-->
<!--                            Temat-->
<!--                            <input class="input" />-->
<!--                        </label>-->
<!--                    </div>-->
                </div>

                <div class="contact__info">
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
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
?>