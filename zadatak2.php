<?php
function brojKamionaIliOstatakLitaraGoriva ($ukupnoGorivo, $potrosnjaPoKamionu, $ostatakGorivaFlag = true){
    $brojKamionaKojiMoguDaPredjuRutu = $ukupnoGorivo / $potrosnjaPoKamionu;
    $ostatakGoriva = $ukupnoGorivo - ($brojKamionaKojiMoguDaPredjuRutu * $potrosnjaPoKamionu);
    if ($ostatakGorivaFlag === false) {
        return $brojKamionaKojiMoguDaPredjuRutu;
    } else 
        return $ostatakGoriva;

}
echo brojKamionaIliOstatakLitaraGoriva (100, 20, false);
