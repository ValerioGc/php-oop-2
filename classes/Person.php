<?php

require_once __DIR__ . '/../Traits/Address.php';

class Person
{
    private $name;
    private $surname;
    private $email;
    private $role;
    private $password;

    use Address;

    public function __construct($name, $surname, $email, $role, $password, $address)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->role = $role;
        $this->password = $password;
        $this->address = $address;
    }

    public function SetInfo()
    {
        if (is_string($this->name) && is_string($this->surname)) {
            echo "<p>" . "Utente:" . ' ' . $this->name . ' ' . $this->surname  . ',' . $this->role . ', ' . $this->email . "</p>";
            echo "<p>" . $this->getAddress() . "</p>";
        } else {
            throw new Exception('Errore');
        }
    }
}