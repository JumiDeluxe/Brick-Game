<?php session_start(); ?>
<html>

<head>
  <script src="zmiana_koloru_wyniki.js"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styl.css">
  <title>Wyniki - Game Brick</title>
</head>

<body style="overflow:'visible'" onload='zmiana_koloru_wyniki()'>


  </div>
  <div id="panel_glowny">
    <div id="wyszukiwanie_wynikow">
      <form method="post">
        Wyszukaj użytkownika
        <input type="text" name="wyszukiwany" id="pole_formularza">
        <input type="submit" value="WYSZUKAJ">
      </form>
      <a href="index.php">POWRÓT</a>
      <hr>
      <h2>WYNIKI</h2>
      <?php
      $polaczenie = mysqli_connect('localhost', 'root', '', 'game_brick');
      if (isset($_POST['wyszukiwany'])) {
        $wyszukiwany = $_POST['wyszukiwany'];
        $pobranie = "SELECT imie, wynik FROM wyniki WHERE imie = '$wyszukiwany' ORDER BY wynik DESC, data ASC";
      } else {
        $pobranie = "SELECT imie, wynik FROM wyniki ORDER BY wynik DESC, data ASC";
      }
      $kwerenda_pobranie = mysqli_query($polaczenie, $pobranie);
      $liczba = mysqli_num_rows($kwerenda_pobranie);
      if ($liczba != 0) {
        for ($i = 0; $i < $liczba; $i++) {
          $row = mysqli_fetch_array($kwerenda_pobranie, MYSQLI_NUM);
          if (isset($_POST['wyszukiwany'])) {
            echo ("<p>" . $row[0] . " - " . $row[1] . "</p>");
          } else {
            echo ("<p>" . ($i + 1) . ". " . $row[0] . " - " . $row[1] . "</p>");
          }
        }
      } else {
        echo ("<p>Brak wyników.</p>");
      }
      mysqli_close($polaczenie);
      ?>
    </div>
    <?php include('generacja_kolorow_sesje.php') ?>

</body>

</html>