<?php

class Contact{
    protected $phone, $email;

    public function Setphone($setPhone) {
        $this->phone=$setPhone;
    }
    public function Setemail($setEmail) {
        $this->email=$setEmail;
    }
    public function Getphone() {
        return $this->phone;
    }
    public function Getemail() {
        return $this->email;
    }
    public function contains($text="") {
        if((str_contains($this->phone, $text) !== false) && (str_contains($this->email, $text)) !== false) {
            return $contact->contains();
            
        }

    }
        
}

class ContactList extends Contact{
    protected $contacts=[];

    public function addContact() {
        foreach ($contacts as $contact){
            if($contact instanceof Contact) {
                $contact->addContact;
            }
        }
    }
   
    public function listAllContacts(){
        foreach($this->contacts as $contact) {
            echo $contact->displayMe();
        }

    }
}





?>