<?php

require_once __DIR__ . '/../Traits/Address.php';

class Building
{
    public $type;
    private $typePayment;
    private $price;

    use Address;

    public function __construct($type, $typePayment, $address)
    {
        $this->type = $type;
        $this->typePayment = $typePayment;
        $this->address = $address;
    }

    public function GetHouseInfo()
    {
        echo "<ul>";
            echo "<li>" . "<b>" . 'Tipologia ' . "</b>" . $this->type . "</li>";
            echo "<li>" . $this->getAddress() . "</li>";
            echo "<li>" . "<b>" . 'Tipologia Pagamento: ' . "</b>" . $this->typePayment . "</li>";
            echo "<li>" . "<b>" . 'Prezzo: ' . "</b>" . $this->price . "</li>";
        echo "</ul>";
    }

    public function CalcRandPrice($typeP) {
        $randomPrice = rand(180, 1100);
        if ($typeP == 'Affitto') {
            $price = $randomPrice;
        } elseif ($typeP == 'Vendita') {
            $price = $randomPrice * 1000;
            $price = number_format( $price, 0, "", ".");
        }
        else {
            throw new Exception('Errore');
        }
        return $this->price = $price .= ' €';
    }
}