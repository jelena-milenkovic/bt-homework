<?php

class Contact{
    abstract protected function displayMe();    
}

class CustomerContact extends Contact {
    protected $first_name, $last_name;

    public function Setfirstname($setFirstName) {
        $this->first_name=$setFirstName;
    }
    public function Setlastname($setLastName) {
        $this->last_name=$setLastName;
    }
    public function Getfirstname() {
        return $this->first_name;
    }
    public function Getlastname() {
        return $this->last_name;
    }
    public function displayMe() {
        foreach($this->contacts as $contact) {
            echo "Telefonski broj je " . $this->phone . 
            ", email adresa je " . $this->email . 
            ", ime je " . $this->first_name . ", 
            a prezime je " . $this->last_name . "<br>";
        }
    }
}

class BusinessContact extends Contact{
    protected $address, $companyName;

    public function Setaddress($setAddress) {
        $this->address=$setAddress;
    }
    public function Setlastname($setCompanyName) {
        $this->company_name=$setCompanyName;
    }
    public function Getaddress() {
        return $this->address;
    }
    public function Getcompanyname() {
        return $this->company_name;
    }
    
    public function displayMe() {
        foreach($this->contacts as $contact) {
            echo "Telefonski broj je " . $this->phone . 
            ", email adresa je " . $this->email . 
            ", adresa je" . $this->address . ", 
            a ime kompanije je " . $this->company_name . "<br>";
        }

    }
}

$contact1 = new CustomerContact('063123456', 'ospikekl@gmail.com', 'Jelena', 'Milenkovic');
$contact2 = new CustomerContact('065123456', 'smiki_11@yahoo.com', 'Slobodan', 'Milenkovic');

$contact3 = new BusinessContact('066123456', 'mina_kv@gmail.com', 'Sloboda', 'Druge Proleterske 56');
$contact4 = new BusinessContact('066123456', 'mina_kv@gmail.com', 'Victoria', 'Slobodana Penezica 3');

$kontaktLista->addContact($contact1);
$kontaktLista->addContact($contact2);

$kontaktLista->addContact($contact3);
$kontaktLista->addContact($contact4);

$kontaktLista->listAllContacts();




?>