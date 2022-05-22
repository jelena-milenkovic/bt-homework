<?php
// Zadatak 1
function filtrirajEmajlove (array $mailovi) : array {
    foreach ($mailovi as $key => $mail) {
        if (!str_contains($mail, "@")) {
            unset($mailovi[$key])
        }
    }
    return $mailovi;
}
$niz = ['ospikekl@gmail.com', 'smiki_11@gmail.com', 'abcdefghdf'];
foreach (filtrirajEmajlove($niz) as $mail) {
    echo $mail . "<br>";
}

// Zadatak 2
$niz = [1, 2, 3];
function sveRacunskeOperacije($niz, $karakterZaOperaciju = "+") {
   
    if (!is_array($niz)){
    die ("Unesi niz!");
    }
    if (($karakterZaOperaciju !== "+") || ($karakterZaOperaciju != "-") || ($karakterZaOperaciju !== "*") || ($karakterZaOperaciju !== "/")) {
        die ("Unesi karakter za operacije +, -, *, /!");
    }
    $s = 0;
    foreach ($niz as $value) {
        if ($karakterZaOperaciju == "+") {
            $s += $value;
        }
        else if ($karakterZaOperaciju == "-") {
            $s -= $value;
        }
        else if ($karakterZaOperaciju == "*") {
            $s *= $value;
        }
        else if ($karakterZaOperaciju == "/") {
            $s /= $value;
        }
    } return $s;
}

// Zadatak 3
$asocijativniNiz = [
    ['dorucak' => 'ovsena  kasa',
     'rucak' => 'supa sa knedlama',
     'vecera' => 'pomfirt'
    ]
];

function arrayKeyExists($asocijativniNiz, $odredjeniKljuc) {
    $ponudjeniKljuc = false;
    foreach ($asocijativniNiz as $kljuc => $vrednost){
        if ($odredjeniKljuc === $kljuc) {
            $ponudjeniKljuc = true;
        }
    }
    return $ponudjeniKljuc;
}

>?
   

