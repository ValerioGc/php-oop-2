<?php

class Agent extends Person
{
    public function __construct($name, $surname, $email, $role, $password, $address)
    {
        parent::__construct($name, $surname, $email, $role, $password, $address);
    }
}
