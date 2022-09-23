<?php

class User
{
    private $name;
    private $surname;
    private $email;

    private $location;


    public function __construct($name, $surname, $email, $location = null)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->location = $location;
    }

    public function GetInfo()
    {
        if (is_string($this->name) && is_string($this->surname)) {
            echo "L'utente selezionato è:" . ' ' . $this->name . ' ' . $this->surname . "<br/>";
            echo "Località selezionato:" . ' ' . $this->location;
        } else {
           throw new Exception('errore');
        }
    }
}