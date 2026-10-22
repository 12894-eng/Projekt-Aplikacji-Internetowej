<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawozdanie</title>
    <link rel="stylesheet" href="style2.css">
    <script src="javascript.js"></script>
</head>
<body>
    <?php
        $pol = mysqli_connect('localhost', 'root', '', 'sprawozdanie');
    ?>

    <header>
        <h1>Edmund McMillen — Twórca Gier</h1><br>
        <img width= "100%", height= "100%", src="Edmund.jpg" alt="menu">
    </header>

    <nav>
        <h3>Źródła informacji:</h3><br>
            <a href="https://en.wikipedia.org/wiki/Edmund_McMillen">Wikipedia</a>
            <a href="https://store.steampowered.com/search/?developer=Edmund%20McMillen&ndl=1">Steam</a>
    </nav>


    <div id="sekcja1">
                <h2 >Biografia</h2>
                <p>McMillen urodził się 2 marca 1980 roku w rodzinie „odrodzonych chrześcijan” pochodzenia meksykańskiego. Całe życie mieszkał w Watsonville w hrabstwie Santa Cruz w Kalifornii, uczęszczał do liceum Soquel.<br>
                     Lubi rysować, a jego ulubionym tematem są potwory. McMillen spędził większość dzieciństwa ze swoją babcią, którą uważa za największe źródło wsparcia w swoich twórczych przedsięwzięciach.<br>
                      Później, w swoim życiu, McMillen otrzymał od babci pudełko, które zawierało wszystkie jego rysunki z dzieciństwa. Wiele z tych rysunków można zobaczyć, odblokowując Pudełko w jednej z jego gier — „Aether” — która jest częścią The Basement Collection.<br>
                    Jego dzieciństwo jest reprezentowane w wielu jego własnych grach, szczególnie w The Binding of Isaac: Rebirth. W wywiadzie dla Indie Game: The Movie wyjaśnia, że ​​jego rodzina była stale nękana uzależnieniem od narkotyków i alkoholu.</p>
            </div>
            <div id="sekcja2">
                <h2 >Wczesna Kariera</h2>
                <p>Początkowe prace graficzne McMillena dotyczyły komiksów niezależnych. Chociaż w dużej mierze porzucił tę dziedzinę na rzecz gier wideo, wydał serię komiksów z Meat Boyem, tytułowym bohaterem gry wideo Super Meat Boy, jako promocyjny dodatek do gry.<br>
                    Jego najbardziej znane gry to oparta na technologii Flash gra Meat Boy i jej kontynuacja Super Meat Boy, która została wydana na PC, Xbox 360 i PlayStation 4. McMillen jest również znany z gier Gish, Aether, The Binding of Isaac i Coil.<br>
                     Gish zdobyła nagrodę Game Tunnel w kategorii Przygodowa Gra Roku 2004, a także niezależna Gra Roku. Jego gra Coil była nominowana do nagrody Innovation Award na Independent Games Festival w 2009 roku.<br>
                      McMillen był oryginalnym artystą postaci i animatorem w Braid, zanim te zasoby zostały zastąpione pracą Davida Hellmana. Gra Braid zdobyła nagrodę Innovation Award na Independent Games Festival w 2006 roku, jeszcze przed jej wydaniem, a także kilka nagród w 2008 roku,<br>
                       w tym nagrodę GameSpot za najlepszą platformówkę i najlepszą oryginalną grę konsolową do pobrania oraz nagrodę Academy of Interactive Arts & Sciences Awards za grę casualową roku.<br>
                        Jego gra Aether była finalistą IndieCade w 2009 roku i otrzymała wyróżnienie honorowe.</p>
            </div>

            <div id="sekcja3">
                <h2 >Super Meat Boy</h2>
                <p>McMillen i programista Tommy Refenes założyli Team Meat, niezależną firmę produkującą gry, z zamiarem, aby nigdy nie korzystać z usług zewnętrznego wydawcy. Ich pierwsza gra, Super Meat Boy, została wydana 20 października 2010 roku na konsolę Xbox 360 za pośrednictwem usługi Xbox Live Arcade oraz 30 listopada 2010 roku na cyfrowym systemie dystrybucji Steam firmy Valve.<br>
                     Planowano wydanie gry na konsolę Nintendo Wii, ale zostało ono anulowane. Według serwisu Kotaku problemy wynikały z ograniczeń rozmiaru pliku kanału WiiWare dla konsoli Wii. Wersja pudełkowa gry została wydana 5 kwietnia 2011 roku.<br> <br>
                      Z powodu początkowego braku zainteresowania grą ze strony Sony, Team Meat podpisało umowy, które zabraniają wydania gry na konsolę Sony PlayStation 3. McMillen i Refenes odpowiedzieli na sukces Super Meat Boy i niemożność stworzenia kontynuacji w krótkim oświadczeniu, w którym napisali: „Czujemy, że zrobiliśmy to dobrze za pierwszym razem”.<br>
                       Rozwój Super Meat Boya przez McMillena i Refenesa został zaprezentowany w filmie Indie Game: The Movie.</p>
            </div>
            <div id="sekcja4">
                <h2>The Binding of Isaac</h2>
                <p>
                    The Binding of Isaac to niezależna gra typu roguelike, zaprojektowana przez Edmunda McMillena i Floriana Himsla, wydana pierwotnie w 2011 roku na system Microsoft Windows; później gra została przeniesiona na systemy operacyjne OS X i Linux. Tytuł i fabuła gry inspirowane są biblijną historią o The Binding of Isaac. W grze matka Isaaca otrzymuje od Boga wiadomość z żądaniem życia syna jako dowodu wiary. Isaac ucieka do pełnej potworów piwnicy ich domu, gdzie musi walczyć o przetrwanie. Gracze kontrolują Isaaca lub jedną z 33 innych odblokowanych postaci w proceduralnie generowanym lochu w stylu roguelike, wzorowanym na The Legend of Zelda, pokonując potwory w czasie rzeczywistym, jednocześnie zbierając przedmioty i power-upy, aby pokonać bossów i ostatecznie matkę Isaaca.
                </p>
                <p>
                    Gra była efektem tygodniowego game jamu pomiędzy McMillenem i Himslem, mającego na celu stworzenie roguelike'a inspirowanego The Legend of Zelda, który pozwolił McMillenowi wyrazić swoje odczucia dotyczące zarówno pozytywnych, jak i negatywnych aspektów religii, które odkrył dzięki konfliktom między członkami swojej rodziny wyznania katolickiego a odrodzonymi chrześcijanami w dzieciństwie. McMillen uważał ten tytuł za ryzykowny, ale taki, który mógł podjąć po sukcesie finansowym Super Meat Boy, i wydał go bez większego rozgłosu na Steamie we wrześniu 2011 roku, nie spodziewając się dużej sprzedaży. Gra szybko zyskała popularność, częściowo dzięki różnym filmom Let's Play prezentującym tytuł. McMillen i Himsl wydali rozszerzenie „Wrath of the Lamb” w maju 2012 roku, ale nie mogli go dalej rozszerzać ze względu na ograniczenia platformy Flash. Współpracę z Nintendo rozpoczęli w 2012 roku, aby wydać wersję na 3DS, ale Nintendo później wycofało się z umowy, powołując się na kontrowersje związane z tematyką religijną gry.
                </p>
                <p>
                    Deweloper Nicalis współpracował z McMillenem w 2014 roku, aby ukończyć remake gry, The Binding of Isaac: Rebirth, wprowadzając dodatkowe funkcje zaplanowane przez McMillena, wykraczające poza ograniczenia Flasha, a także poprawiając grafikę gry i umożliwiając porty na inne platformy niż komputery osobiste (w tym PlayStation 4 i Vita, Xbox One, Wii U, Nintendo 3DS i Nintendo Switch). The Binding of Isaac: Rebirth doczekało się trzech rozszerzeń, z których każde zawierało więcej bossów, przedmiotów i obszarów. Pierwsze rozszerzenie, The Binding of Isaac: Afterbirth, ukazało się 30 października 2015 r., drugie rozszerzenie, The Binding of Isaac: Afterbirth+, wydano 3 stycznia 2017 r., a trzecie i ostatnie rozszerzenie, The Binding of Isaac: Repentance, wydano 31 marca 2021 r.
                </p>
                        <a href="javascript:void(0)" id="home">
                            <img id="menuImg" src="on.jpg" alt="logo" />
                </a>
                <p>
                    W 2016 roku McMillen zapowiedział prequel do The Binding of Isaac zatytułowany The Legend of Bum-bo, opracowany niezależnie przez programistę Jamesa Interactive i jego samego. Gra była produkowana przez cztery lata, bez działającego prototypu stworzonego w trakcie jej powstawania. The Legend of Bum-bo została wydana cyfrowo na platformie Steam 12 listopada 2019 roku, spotykając się z mieszanymi recenzjami. Gra została przeniesiona na iOS 7 grudnia 2020 roku, a następnie na Epic Games Store, GOG.com, Nintendo Switch, PlayStation 5 oraz Xbox Series X i Series S przez Nicalis w 2022 roku.
                </p>
            </div>
            <div id="sekcja5">
                <h2>The End is Nigh</h2>
                <p>The End Is Nigh to przygodowa gra platformowa stworzona przez Edmunda McMillena i Tylera Glaiela. Gra została wydana 12 lipca 2017 roku na platformę Microsoft Windows za pośrednictwem platformy Steam. Porty gry ukazały się 15 sierpnia 2017 roku na macOS oraz 12 grudnia 2017 roku na Linuksa i Nintendo Switch, a w przygotowaniu jest port na PlayStation 4 i PlayStation Vita. Gra jest określana jako duchowy następca gry Super Meat Boy autorstwa McMillena.</p>
                <p>Tematy w grze zostały zainspirowane osobistymi i zawodowymi doświadczeniami z okresu powstawania gry, takimi jak groźby pozwów sądowych, ciąża żony i agorafobia, które McMillen określił jako „najciemniejszy” moment w swojej karierze. McMillen rozważał, czy chce kontynuować tworzenie gier, a te przemyślenia zainspirowały treść gry.</p>
                <p>McMillen twierdził, że w przeciwieństwie do motywu Super Meat Boy, który polega na stawianiu sobie wyzwań, bo „warto”, The End is Nigh zostało zaprojektowane tak, aby gracze nieustannie zastanawiali się, czy wyzwania gry ostatecznie ich nagrodzą. McMillen opisał The End is Nigh jako „nieustanne czekanie, aż spadnie drugi but, ale ten nigdy nie spadnie” i opisał zmagania głównego bohatera (Asha) jako „rozpadające się życie”.</p>
            </div>
            <div id="sekcja6">
                <h2>Mewgenics</h2>
                <p>Po sukcesie wcześniejszych tytułów niezależnych, Edmund McMillen rozpoczął pracę nad Mewgenics, grą skupiającą się na hodowli, kolekcjonowaniu i walce kotów. Projekt, pierwotnie zapowiedziany w 2012 roku, był rozwijany we współpracy z Tommym Refenesem w ramach ich studia Team Meat. Gra miała być dziwaczną i humorystyczną symulacją łączącą elementy strategii, genetyki i walki turowej.</p>
                <p>Jednak prace nad Mewgenics okazały się trudne, a postępy w pracach nad nią z czasem znacznie spadły. Ponieważ Edmund McMillen i Tommy Refenes skupili się na innych projektach, gra została ostatecznie wstrzymana i po cichu anulowana około 2016 roku. W tym czasie Edmund McMillen opuścił Team Meat, co oznaczało koniec jego współpracy ze studiem i kres pierwotnej wersji gry.</p>
                <p>Kilka lat później Mewgenics zostało reaktywowane jako nowy projekt przez Edmunda McMillena, tym razem we współpracy z programistą Tylerem Glaielem. Odświeżona wersja gry przekształciła się w turową, taktyczną grę RPG z elementami roguelike, jednocześnie zachowując nacisk na hodowlę kotów o unikalnych cechach i zdolnościach. Odświeżona wersja charakteryzuje się mroczniejszym tonem, głębszą mechaniką i bardziej ustrukturyzowanym systemem rozgrywki w porównaniu z pierwotną koncepcją.</p>
                <p>Mewgenics jest uważane za jeden z najbardziej nietypowych i ambitnych projektów Edmunda McMillena, łączący rozgrywkę strategiczną z dziwacznym humorem i proceduralnym generowaniem gier. Po latach przeróbek, gra została wydana 10 lutego 2026 roku. W ciągu pierwszych 6 godzin, Mewgenics sprzedała około 150 tys. kopi, a w przeciągu tygodnia sprzedała, aż milion.</p>
                <button onClick="Meow()">MEOW!</button>
            </div>
    <div id="sekcja7">
        <h2>Gry Edmunda McMillena</h2>
        <table>
            <thead>
                <tr>
                    <th>Nazwa</th>
                    <th>Platforma</th>
                    <th>Współtwórca</th>
                    <th>Wydawca</th>
                    <th>Rok</th>
                    <th>Uwagi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM gry_edmunda ORDER BY rok_wydania";
                    $wynik = mysqli_query($pol, $sql);

                    if (!$pol) {
                        die("Błąd połączenia: " . mysqli_connect_error());
                            }

                        if (!$wynik) {
                            die("Błąd zapytania: " . mysqli_error($pol));
                        }
                    while ($row = mysqli_fetch_array($wynik)) {
                        $wspoltworca = $row['wspoltworca'] ? $row['wspoltworca'] : '—';
                        $wydawca = $row['wydawca'] ? $row['wydawca'] : '—';
                        $uwagi = $row['uwagi'] ? $row['uwagi'] : '—';
                        echo "<tr>
                                <td>{$row['nazwa']}</td>
                                <td>{$row['platforma']}</td>
                                <td>{$wspoltworca}</td>
                                <td>{$wydawca}</td>
                                <td>{$row['rok_wydania']}</td>
                                <td>{$uwagi}</td>
                              </tr>";
                    }
                    
                ?>
            </tbody>
        </table>
    </div>

    <aside>
        <p><a href="#sekcja1">Bigorafia</a></p>
            <p><a href="#sekcja2">Wczesna Kariera</a></p>
            <p><a href="#sekcja3">Super Meat Boy</a></p>
            <p><a href="#sekcja4">The Binding Of Isaac</a></p>
            <p><a href="#sekcja5">The End is Nigh</a></p>
            <p><a href="#sekcja6">Mewgenics</a></p>
            <p><a href="#sekcja7">Lista gier</a></p>
    </aside>


    <footer>
        <p>Sprawozdanie Gut Piotr Ciechanów 2026r. - Gry Edmunda McMillena</p>
    </footer>

    

    <?php
        mysqli_close($pol);
    ?>
</body>
</html>
