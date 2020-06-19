<?php
            if (!isset($_SESSION['kolor_obudowy'])) $_SESSION['kolor_obudowy'] = 'blueviolet';
            if (!isset($_SESSION['kolor_przyciskow'])) $_SESSION['kolor_przyciskow'] = 'yellow';
            if (!isset($_SESSION['kolor_kwadratow'])) $_SESSION['kolor_kwadratow'] = 'black';
            if (!isset($_SESSION['kolor_ramki'])) $_SESSION['kolor_ramki'] = 'black';
            if (!isset($_SESSION['kolor_super'])) $_SESSION['kolor_super'] = 'yellow';
            if (!isset($_SESSION['kolor_kreski'])) $_SESSION['kolor_kreski'] = 'black';
            if (!isset($_SESSION['kolor_brick_game'])) $_SESSION['kolor_brick_game'] = 'black';
            if (!isset($_SESSION['kolor_autora'])) $_SESSION['kolor_autora'] = 'yellow';
            echo ("<div id='ustawienia_kolorow'>Kolor obudowy: <text id='kolor_obudowy'>" . $_SESSION['kolor_obudowy'] . "</text><br>");
            echo ("Kolor przyciskow: <text id='kolor_przyciskow'>" . $_SESSION['kolor_przyciskow'] . "</text><br>");
            echo ("Kolor ramki: <text id='kolor_ramki'>" . $_SESSION['kolor_ramki'] . "</text><br>");
            echo ("Kolor ozdobnej ramki: <text id='kolor_kwadratow'>" . $_SESSION['kolor_kwadratow'] . "</text><br>");
            echo ("Kolor napisu SUPER: <text id='kolor_super'>" . $_SESSION['kolor_super'] . "</text><br>");
            echo ("Kolor kreski: <text id='kolor_kreski'>" . $_SESSION['kolor_kreski'] . "</text><br>");
            echo ("Kolor napisu BRICK GAME: <text id='kolor_brick_game'>" . $_SESSION['kolor_brick_game'] . "</text><br>");
            echo ("Kolor nazwy autora: <text id='kolor_autora'>" . $_SESSION['kolor_autora'] . "</text><br></div>");
            ?>