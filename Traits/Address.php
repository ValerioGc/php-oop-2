<?php

trait Address
{
    protected $address;

    public function getAddress()
    {
        return "<b>" . "Indirizzo:" . "</b>" . $this->address;
    }
}