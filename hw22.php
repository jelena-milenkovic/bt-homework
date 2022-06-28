<?php

class Baza {
    private $host="localhost";
    private $username="root";
    private $password="";
    private $dbname="it bootcamp";

    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ";dbname=" . $this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}

class Users extends Baza {
    public function setUser($name, $email, $password, $email_verified_at, $created_at) {
        try {
            throw new Exception("Something goes wrong!", 500);
            $sql = "INSERT INTO users ('name', 'email', 'password', 'email_verified_at', 'created_at')
                VALUES 
                    ('Jelena', 'ospikekl@gmail.com, 'morena12', ('Y-m-d h:i:s', strtotime('2 years ago')), ('Y-m-d h:i:s', strtotime('2 years ago'))),
                    ('Mina', 'mina_lepotica@gmail.com, 'mina12', (NULL), ('Y-m-d h:i:s', strtotime('1 years ago'))),
                    ('Slobo', 'smiki_11@gmailcom, 'sebastijan12', (NULL), ('Y-m-d h:i:s', strtotime('2 months ago'))),
                    ('Kristina', 'kika_kv@gmailcom, 'kikakv', ('Y-m-d h:i:s', strtotime('5 minutes ago')), ('Y-m-d h:i:s', strtotime('5 minutes ago'))),
                    ('Pavle', 'paki_kv@gmailcom, 'morena12', ('Y-m-d h:i:s', strtotime('4 months ago')), ('Y-m-d h:i:s', strtotime('4 months ago'))),
                    ('Vasilisa', 'vasica11@gmailcom, 'vasilisa11', ('Y-m-d h:i:s', strtotime('2 minutes ago')), ('Y-m-d h:i:s', strtotime('2 years ago'))),
                    ('Jelena', 'miracle@gmailcom, 'jelenacudo', (NULL), ('Y-m-d h:i:s', strtotime('10 days ago'))),
                    ('Milica', 'mica_ic@gmailcom, 'milicaic12', ('Y-m-d h:i:s', strtotime('2 days ago')), ('Y-m-d h:i:s', strtotime('2 days ago'))),
                    ('Selena', 'seka_123@gmailcom, 'selena12', (NULL), ('d.m.Y', time() -(1*24*60*60)),
                    ('Senka', 'senka_kv@gmailcom, 'senkaa12');";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name, $email, $password, $email_verified_at, $created_at]);

        } catch(\Throwable $exception) {
                echo $exception->getMessage();
                echo "<br>";
                echo $exception->getLine();
        }


    }
       
}
$user = new Users();
 
?>



