<?php session_start(); ?>
<html>

<head>
    <script src="zmiana_koloru_index.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <title>Game Brick</title>
</head>



<body onload="zmiana_koloru_index()">
    <div id="panel_lewy_glowny">
        <h2>INSTRUKCJE</h2>
        <div id="instrukcje">
            <p>W - ruch w górę</p>
            <p>A - ruch w lewo</p>
            <p>S - ruch w dół</p>
            <p>D - ruch w prawo</p>
            <p>Spacja - przycisk akcji</p>
        </div>
        <hr>
        <h3><a href="personalizacja.php">SPERSONALIZUJ<br>KONSOLKĘ</a> </h3> <hr>
                        <div id="kontakt">
                            <h3>Skontaktuj się z nami!</h3>
                            <p>E-mail:</p>
                            <p>adres@email.com</p>
                            <p>Telefon:</p>
                            <p>123456789</p>
                        </div>
    </div>

    <div id="panel_prawy_glowny">
        <h2>TOP 10</h2>
        <ol>
            <?php
                $polaczenie=mysqli_connect('localhost', 'root', '', 'game_brick');
                $pobranie="SELECT imie, wynik FROM wyniki ORDER BY wynik DESC, data ASC";
                $kwerenda_pobranie=mysqli_query($polaczenie, $pobranie);
                $liczba=mysqli_num_rows($kwerenda_pobranie);
                if($liczba>10) $liczba=10;
                for($i=0; $i<$liczba; $i++) {
                    $row = mysqli_fetch_array($kwerenda_pobranie, MYSQLI_NUM);
                    echo("<li><p>".$row[0]."</p><p>".$row[1]."</p></li>");
                 }
                mysqli_close($polaczenie);
            ?>
        </ol>
        <form method="post">
            Wpisz swoje imie by zapisać wynik!<br>
            <input type="text" name="imie" required>
            <input type="hidden" name="wynik" id="input_wynik">
            <input type="submit" id="wysylanie" value="ZAPISZ" disabled>
        </form>
        <?php
        if (isset($_POST['imie'])) {
            $imie = $_POST['imie'];
            $wynik = $_POST['wynik'];
            $polaczenie = mysqli_connect('localhost', 'root', '', 'game_brick');
            if(empty($imie)) $imie = "anon";
            $kwerenda_wysylanie = "INSERT INTO wyniki (imie, wynik, data) VALUES ('$imie', $wynik, now())";

            if (mysqli_query($polaczenie, $kwerenda_wysylanie)) {
                echo "Zapisano.";
            } else {
                echo "ERROR: Could not able to execute" . mysqli_error($polaczenie);
            }
            mysqli_close($polaczenie);
            header("location: ?");
        }
        ?>
        <hr>
        <h3><a href="wyniki.php">WSZYSTKIE WYNIKI</a> </h3> </div>

    <div id="obudowa">

        <div id="kwadraty">
            <table id="tab1">
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
            <div id="ramka">
                <text id="super">SUPER</text>
                <div id="ekran">
                    <div id="ramka_gra"></div>
                    <canvas id="tetris" width="200" height="400"></canvas>
                    <div id="a">
                        Score<div id="score">0</div>
                        <br><text id="gameover">&nbsp<br>&nbsp</text>
                    </div>
                    <script src="tetrominoes.js"></script>
                    <script src="tetris.js"></script>

                </div>
            </div>
            <table id="tab2">
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
        <div id="zgiecie"></div>
        <div id="dolna_czesc">
            <div id="przyciski_male">
                <div class="przycisk_maly" id="pm1"></div>
                <div class="przycisk_maly" id="pm2"></div>
                <div class="przycisk_maly" id="pm3"></div>
                <div class="przycisk_maly" id="pm4"></div>
            </div>
            <div id="przyciski_sterowania">
                <div class="przycisk_sterowania" id="ps1"></div>
                <div class="przycisk_sterowania" id="ps2"></div>
                <img src="strzalki.png" id="strzalki">
                <div class="przycisk_sterowania" id="ps3"></div>
                <div class="przycisk_sterowania" id="ps4"></div>
            </div>
            <div id="przycisk_glowny"></div>
            <div>
                <img src="frog.png">
                <h1 id="brick_game_napis">
                    BRICK<br>
                    &nbsp&nbsp&nbspGAME
                </h1>
            </div>
        </div>
        <hr id="linia_konsolka">
        <text id="autor">Julia Matuszewska</text>
    </div>

    <div id="styl_sesji" >
    <?php include('generacja_kolorow_sesje.php') ?>
    </div>
     </body> </html>