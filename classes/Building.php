<?php

class Building
{
    public $type;
    public $typePayment;
    public $price;
    use Position;

    public function __construct($type, $typePayment)
    {
        $this->type = $type;
        $this->typePayment = $typePayment;
    }

    public function GetHouseInfo()
    {
        echo "<ul>";
            echo "<li>" . $this->type . ':' . "</li>";
            echo "<li>" . "Via" . ' ' . $this->location . "</li>";
            echo "<li>" . $this->typePayment . "</li>";
            echo "<li>" . $this->price . "</li>";
        echo "</ul>";
    }

    public function CalcRandPrice($typeP) {
        $randomPrice = rand(180, 1100);
        if ($typeP == 'Affitto') {
            $price = $randomPrice;
        } elseif ($typeP == 'Vendita') {
            $price = $randomPrice * 1000;
            $price = number_format( $price, 0, "", ".");
        } else {
            throw new Exception('Errore, Il formato di pagamento non è corretto!');
        }
        return $this->price = $price;
    }
}