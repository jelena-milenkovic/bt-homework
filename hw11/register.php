<?php

if(isset($_GET['submit'])) {
    if(empty($_GET['name'])){
        echo "Ime nije uneto";
    } else {$ime = $_GET['name'];
    }
    if(empty($_GET['last_name'])){
        echo "Prezime nije uneto. <br>";
    } else {$prezime = $_GET['last_name'];
    }
    if(isset($_GET['pol'])){
        echo "Pol nije obelezen. <br>";
    } else {$pol = $_GET['pol'];
    }
    if (empty($_GET['email'])) {
        echo "Email nije unet. <br>";
    } else {$email = $_GET['email'];
    }
    if (empty($_GET['password'])) {
        echo "Lozinka nije uneta. <br>";
    } else {$lozinka = $_GET['password'];
    }
    if (empty($_GET['number'])) {
        echo "Broj nije unet. <br>";
    } else {$broj = $_GET['number'];
    }
    if (isset($_GET['kursevi'])) {
        echo "Nije obelezen nijedan kurs";
    } else {
        $kursevi = implode(" , " ,$_GET['kursevi']);
    }
    if ( (!empty($_GET['name'])) && (!empty($_GET['last_name'])) && (isset($_GET['pol'])) && (!empty($_GET['email'])) )
    echo "$pol, $ime, $prezime, <br>
    Uspesno ste se registrovali na nas sajt. <br>
    Vasa lozinka je: $lozinka <br>
    Vas email je: $email <br>
    Vasi odabrni kursevi su: $kursevi <br>
    Vas broj telefona je: $broj.";
}

?>