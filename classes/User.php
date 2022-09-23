<?php



class User
{
    private $name;
    private $surname;
    private $email;
    private $role;
    private $location;


    use Position;

    public function __construct($name, $surname, $email, $location)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }
    public function GetInfo()
    {
        if (is_string($this->name) && is_string($this->surname)) {
            echo "<p>" . "Utente:" . ' ' . $this->name . ' ' . $this->surname  . "</p>";
        } else {
           throw new Exception('errore');
        }
    }
}
trait Position {
    private $location;

    public function LocationInfo() {
        echo "<p>" ."Località selezionata:" . ' ' . $this->location . "<p>";
    }
}