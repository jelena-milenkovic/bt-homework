<?php
if (isset($_GET['submit']));

if (empty($_GET)) {
    die("ERROR");
}
if (empty($_GET['day'])){
    die("Morate uneti datum!");
}
if (empty($_GET['month'])) {
    die("Morate uneti mesec!");
}
if (empty($_GET['year'])) {
    die("Morate uneti godinu!");
}
if ((!is_numeric($_GET['day'])) || (!is_numeric($_GET['month'])) || (!is_numeric($_GET['year']))) {
    die ("Sve vrednosti moraju biti broj!");
}
if ((($_GET['day']) <= 0) && (($_GET['month']) < 0) || (($_GET['year']) < 0)) {
    die ("Sve vrednosti moraju biti pozitivan broj!");
}
if ((($_GET['day']) < 1) && (($_GET['day']) > 31)) {
    die ("Jedan mesec najvise moze imati 31 dan!");
}
if ((($_GET['month']) < 1) && (($_GET ['month'])) > 12) {
    die ("Godina ima 12 meseci!");
}
if ((($_GET['year']) < 1970) && (($_GET['year']) > 2022)) {
    die ("Godine pocinju od 1970!");
}

$day = $_GET['day'];
$month = $_GET['month'];
$year =$_GET['year'];

if ($month == 1) {
    $monthName = "January";
} else if ($month == 2) {
    $monthName = "February";
} else if ($month == 3) {
    $monthName ="March";
} else if ($month == 4) {
    $monthName = "April";
} else if ($month == 5) {
    $monthName = "May";
} else if ($month == 6) {
    $monthName = "June";
} else if ($month == 7) {
    $monthName = "July";
} else if ($month == 8) {
    $monthName = "August";
} else if ($month == 9) {
    $monthName = "September";
} else if ($month == 10) {
    $monthName = "October";
} else if ($month == 11) {
    $monthName = "November";
}  else if ($month == 12) {
    $monthName = "December";
}

if  (($monthName === "January") || ($monthName === "March") || ($monthName === "May") || ($monthName ==="July") || ($monthName ==="August") || ($monthName === "October") || ($monthName === "December")){
    ($day  <= 31);
} else if (($monthName === "April") || ($monthName === "June") || ($monthName === "September") || ($monthName === "October")) {
    ($day <= 30);
} else ($monthName === "February");

if (($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0))){
    echo "Godina je prestupna i februar ima 29 dana. <br>";
 } else {
    echo "Godina nije prestupna i februar ima 28 dana. <br>"; 
}

echo "Uneti dan je " . $day . "<br>";
echo "Uneti mesec je " . $monthName . "<br>";
echo "Uneta godina je" . $year . "<br>";



