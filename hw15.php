<?php
//Zadatak 1
$hwArray = ["Pera", "Mika", "Pera", "Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];

if(in_array("Jelena", $hwArray)){
    echo "Ime Jelena vec postoji u nizu";
} else {
    echo array_push($hwArray, "Jelena");
}

if(in_array("Mina", $hwArray)){
    echo "Ime Mina vec postoji u nizu";  
} else {
    echo "Mina";
}
array_splice($hwArray,2,0, "Mina");

echo"<br>";

$brojUcenika= count($hwArray);
echo "<br>";

if (in_array("Slobodan", $hwArray)) {
    echo "Ime Slobodan vec postoji u nizu";
} else {
    echo array_unshift ($hwArray, "Slobodan");
}
echo "<br>";
foreach ($hwArray as $kljuc => $clan){
    if ($clan == "Danilo") {
        unset ($hwArray['kljuc']);
    }
}
print_r(array_unique($hwArray));
echo"<br>";

//Zadatak 2
$data=[
    [
        "name" => "Pera",
        "last_name" => "Peric",
        "age" => 28,
        "gender" => "male",
        "avg_rating" => 7.5,
        "married" => false,
        "courses" => ["laravel", "react", "jQuery"]
    ],
    [   
        "name" => "Mina",
        "last_name" => "Milenkovic",
        "age" => 17,
        "gender" => "female",
        "avg_rating" => 10,
        "married" => false,
        "courses" => ["C++", "Python"]
    ],
    [
        "name" => "Pavle",
        "last_name" => "Igrutinovic",
        "age" => 13,
        "gender" => "male",
        "avg_rating" => 5,
        "married" => false,
        "courses" => ["WordPress", "react", "Pyhton"]
    ],
    [
        "name" => "Vasilisa",
        "last_name" => "Milenkovic",
        "age" => 20,
        "gender" => "female",
        "avg_rating" => 9,
        "married" => false,
        "courses" => ["PHP", "JAVA", "jQuery"]
    ],
    [
        "name" => "Slobodan",
        "last_name" => "Milenkovic",
        "age" => 33,
        "gender" => "male",
        "avg_rating" => 8.9,
        "married" => true,
        "courses" => ["QA", "iOS", "jQuery"]
    ],
    [
        "name" => "Kristina",
        "last_name" => "Dzodic",
        "age" => 25,
        "gender" => "female",
        "avg_rating" => 9.5,
        "married" => false,
        "courses" => ["CSS", "HTML"]
    ]

];
echo "<pre>";
print_r($data);
echo "</pre>";

//Pera Peric ima 28 godina i nije ozenjen. Ima prosecnu ocenu 7.5, a kurseve koje trenutno slusa su: laravel, PHP, jQuery.

foreach ($data as $kljuc => $student) {
    $message = " ";

    $genderStatus = "ozenjen";
    if ($student['gender'] == 'female') {
        $genderStatus = "udata";
    }
    if (!$student['married']) {
        $genderStatus = " nije " . $genderStatus;
    }

    $courses = " ";
    foreach ($student['courses'] as $kurs) {
        $courses .= " " . $kurs;
    }
    $message = 
        ($student ['name']) . " " . ($student['last_name']) . " ima " . $student['age'] .  " godina i " . $genderStatus
        . ". Ima prosecnu ocenu " . $student ['avg_rating'] . ", a kurseve koje trenutno pohadja su:"
        . $courses;

    echo $message . "<br>";  
}
?>