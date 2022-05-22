<?php

    define ('PI', 3.14159265);
    echo PI;
    echo "<br>";

//1 Bazen 
    function bazenUoblikuPravugaonika ($a, $b) {
        if ($a > $b) {
            $povrsinaPravougaonika = $a * $b;
        }
        return $povrsinaPravougaonika;
    }
    
    bazenUoblikuPravugaonika (5, 4);
    echo "<br>";

//2 Bazen
    function bazenUoblikuKruga ($r) {
        $povrsinaKruga = ($r*$r * PI);
        return $povrsinaKruga;
    }
    bazenUoblikuKruga (2);
    echo "<br>";

//3 Bazen
    function bazen3 ($a, $b){
        if (($a > $b) && ($r = $b / 2)) {
            $povrsinabazena3 = (($a * $b) + (($r*$r * PI)/2));
            return $povrsinabazena3;
        }
    }
    bazen3 (5, 4);
    echo "<br>";

// Povrsine bazena zajedno
    function sviBazenizajedno ($a, $b) {
        if (($a > $b) && ($r = $b / 2)) {
            $povrsinaSvihBazena = (($a * $b) + ($r*$r * PI) + (($a * $b) + ($r*$r * PI)/2));
            return $povrsinaSvihBazena;
        }
    }
    sviBazenizajedno (5, 4);
    echo "<br>";


?>