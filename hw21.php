<?php

//Za dobijanje svih boja koje su aktivne (status=1), a dobiti ih sortirane po datumu kreiranja
$string1 = "SELECT * FROM colors WHERE status=1 ORDER BY created_at;";

//Za dobijanje 5 bilo kojih boja
$string2 = "SELECT * FROM colors LIMIT 5;";

//Za upis nove boje u bazu
$string3 = "INSERT INTO colors(name, hex_value, status, created_at, updated_at) 
VALUES ('NeonBlue', '#4c33ff', 1, '2022-06-01 14:46:24', '2022-06-01 14:46:24');";

//Za promenu statusa, sve boje koje su neaktivne (0) postaviti ih da su aktivne (1)
$string4 = "UPDATE colors SET status=1 WHERE status=0;";

//Za brisanje boje koja ima id=5
$string5 = "DELETE FROM colors WHERE id=5;";

//Obrisati boju koja je najranije promenjena
$string6 = "DELETE FROM colors ORDER BY id DESC LIMIT 1;";

//Za dobijanje svih boja koje su aktivne (status=1), a dobiti ih sortirane po datumu kreiranja preko PDO klase
$string1 = "SELECT * FROM colors WHERE status=1 ORDER BY created_at;";

class Baza{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $dbname="tabela_boja";

    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ";dbname=" . $this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}

class Korisnik extends Baza{
    public function getUser() {
        $sql = "SELECT * FROM colors WHERE status=1 ORDER BY created_at;";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['name'] . " " . $row['hex_value'] . " " . $row['status'] . " " . $row['created_at'] . " " . $row['updated_at'] . "<br>";
        }
    }
}

$objekat1 = new Korisnik();
echo $objekat1->getUser();



?>

