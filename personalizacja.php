<?php session_start(); ?>
<html>

<head>
    <script src="zmiana_koloru_panel_personalizacji.js"></script>
    <script src="wybor_obiektu_zmiana_koloru.js"></script>
    <script src="pobierz_kolor_komorki.js"></script>
    <link rel="stylesheet" type="text/css" href="styl.css">
    <meta charset="utf-8">
    <title>Personalizacja - Brick Game</title>
</head>

<body onload="zmiana_koloru_panel_personalizacji()">
    <div id="obudowa" style="position: absolute; left: 150px; top: 30px">

        <div id="kwadraty">
            <table id="tab1" onclick="styl_kwadratow()">
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpelny"></td>
                </tr>

            </table>

            <div id="ramka" onclick="styl_ramki()">
                <text id="super" onclick="styl_super(); event.stopPropagation();">SUPER</text>
                <div id="ekran">
                </div>
            </div>
            <table id="tab2" onclick="styl_kwadratow()">
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpelny"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpusty"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwppusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>
                <tr>
                    <td class="kwpelny"></td>
                    <td class="kwpusty"></td>
                </tr>

            </table>
        </div>
        <div id="zgiecie" onclick="styl_obudowy()"></div>
        <div id="dolna_czesc">
            <div id="przyciski_male">

                <div class="przycisk_maly" id="pm1" onclick="styl_przyciskow()"></div>
                <div class="przycisk_maly" id="pm2" onclick="styl_przyciskow()"></div>
                <div class="przycisk_maly" id="pm3" onclick="styl_przyciskow()"></div>
                <div class="przycisk_maly" id="pm4" onclick="styl_przyciskow()"></div>
            </div>
            <div id="przyciski_sterowania">
                <div class="przycisk_sterowania" id="ps1" onclick="styl_przyciskow()"></div>
                <div class="przycisk_sterowania" id="ps2" onclick="styl_przyciskow()"></div>
                <img src="strzalki.png" id="strzalki">
                <div class="przycisk_sterowania" id="ps3" onclick="styl_przyciskow()"></div>
                <div class="przycisk_sterowania" id="ps4" onclick="styl_przyciskow()"></div>
            </div>
            <div id="przycisk_glowny" onclick="styl_przyciskow()"></div>
            <div>
                <img src="frog.png">
                <h1 onclick="styl_brick_game()" id="brick_game_napis">
                    BRICK<br>
                    &nbsp&nbsp&nbspGAME
                </h1>
            </div>
        </div>
        <hr id="linia_konsolka" onclick="styl_kreska()">
        <text id="autor" onclick="styl_autora()">Julia Matuszewska</text>
    </div>
    <!-- DO DOKOŃCZENIA -->
    <div id="panel_personalizacji">
        <div id="instrukcje_personalizacji">
            By wybrać obiekt którego kolor ma być zmieniony kliknij go na modelu obudowy po lewej stronie.
            Możesz wpisać angielską nazwę koloru, kolor HEX lub rgb, lub inne ciągi znaków które można
            użyć do zmiany koloru w kodzie html.<br><br>
            Przyklady: "red", "#FFFFFF", "rgb(255, 255, 255)", "hsl(0, 0%, 100%)".<br>
            Możesz również kliknąć kolor z panelu poniżej.
        </div>


        <div class="personalizacja_div" id="styl_sesji">
            <div class="personalizacja_div" id="personalizacja_formularz">

                <form method="post">
                    <text id="nazwa_formularza"> Kolor obudowy</text><br><br>
                    <input type="text" name="kolor_obudowy" id="pole_formularza" required><br>
                    <input type="submit" value="ZAPISZ"><br>
                    <?php
                    if (isset($_POST['kolor_obudowy'])) $_SESSION['kolor_obudowy'] = $_POST['kolor_obudowy'];
                    if (isset($_POST['kolor_przyciskow'])) $_SESSION['kolor_przyciskow'] = $_POST['kolor_przyciskow'];
                    if (isset($_POST['kolor_ramki'])) $_SESSION['kolor_ramki'] = $_POST['kolor_ramki'];
                    if (isset($_POST['kolor_kwadratow'])) $_SESSION['kolor_kwadratow'] = $_POST['kolor_kwadratow'];
                    if (isset($_POST['kolor_super'])) $_SESSION['kolor_super'] = $_POST['kolor_super'];
                    if (isset($_POST['kolor_kreski'])) $_SESSION['kolor_kreski'] = $_POST['kolor_kreski'];
                    if (isset($_POST['kolor_brick_game'])) $_SESSION['kolor_brick_game'] = $_POST['kolor_brick_game'];
                    if (isset($_POST['kolor_autora'])) $_SESSION['kolor_autora'] = $_POST['kolor_autora'];
                    ?>
                </form>

            </div>
            <?php include('generacja_kolorow_sesje.php') ?>
            <a href="index.php">POWRÓT</a>
        </div>

        <table id="wybor_kolorow">
            <tr>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(255,128,128)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(255,255,128)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,255,128)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,255,128)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,255,255)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,128,255)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(255,128,192)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(255,128,255)
                </td>
            </tr>
            <tr>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(255,0,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(255,255,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,255,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,255,64)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,255,255)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,128,192)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,128,192)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(255,0,255)
                </td>
            </tr>
            <tr>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,64,64)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(255,128,64)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,255,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,128,128)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,64,128)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,128,255)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,0,64)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(255,0,128)
                </td>
            </tr>
            <tr>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,0,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(255,128,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,128,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,128,64)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,0,255)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,0,160)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,0,128)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,0,255)
                </td>
            </tr>
            <tr>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(64,0,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,64,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,64,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,64,64)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,0,128)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,0,64)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(64,0,64)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(64,0,128)
                </td>
            </tr>
            <tr>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(0,0,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,128,0)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,128,64)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(128,128,128)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(64,128,128)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(192,192,192)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(64,0,64)
                </td>
                <td class="tab_k" onclick="pobierz_kolor_komorki(this)">
                    rgb(255,255,255)
                </td>
            </tr>
        </table>


    </div>

</body>

</html>