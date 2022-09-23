<?php



include_once __DIR__ . "/classes/User.php";
include_once __DIR__ . "/classes/Building.php";

$selectedLocation = $_GET['location'];

$currentAgent = new User("luca", "Bianchi", "test@test.it", "$selectedLocation", 'Milano');

$currentClient = new User("Mario", "Rossi", "prova@boolean.it", "$selectedLocation", 'Milano');

$rentHouse1 = new Building('Appartamento', 'Affitto');
$rentHouse1 -> CalcRandPrice('Affitto');
$rentHouse2 = new Building('Villa', 'Affitto');
$rentHouse2 -> CalcRandPrice('Affitto');
$rentHouse3 = new Building('Monolocale', 'Affitto');
$rentHouse3 -> CalcRandPrice('Affitto');
$buyHouse1 = new Building('Villa', 'Vendita');
$buyHouse1 -> CalcRandPrice('Vendita');
$buyHouse2 = new Building('Bilocale', 'Vendita');
$buyHouse2 -> CalcRandPrice('Vendita');




try {
    echo "<div>";
        $currentAgent->GetInfo();
        $currentAgent->LocationInfo();
    echo "</div>";

    echo "</br>";

    echo "<span>";
        echo "<h1>In affitto</h1>";
        $rentHouse1->GetHouseInfo();
        $rentHouse2->GetHouseInfo();
        $rentHouse3->GetHouseInfo();
    echo "</span> .";

    echo "<span>";
        echo "<h1>In Vendita</h1>";
        $buyHouse1->GetHouseInfo();
        $buyHouse2->GetHouseInfo();
    echo "</span>";
} catch (Exception $x) {
    echo $x;
}





