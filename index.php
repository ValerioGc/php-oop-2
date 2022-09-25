
<?php

//Classi
include_once __DIR__ . "/classes/Person.php";
include_once __DIR__ . "/classes/User.php";
include_once __DIR__ . "/classes/Agent.php";
include_once __DIR__ . "/classes/Building.php";

//Creazione Istanze User
$currentAgent = new Agent("Mario", "Rossi", "supporto@agenzia.it", "Agente","", "Via Garibaldi");
$currentClient = new User("Luca", "Verdi", "test@user.it", "Utente", "", "Via Roma");


//Affitto
$rentHouse1 = new Building('Appartamento', 'Affitto', 'Via Galilei');
$rentHouse1 -> CalcRandPrice('Affitto');
$rentHouse2 = new Building('Villa', 'Affitto', 'Piazza Bologna ');
$rentHouse2 -> CalcRandPrice('Affitto');
$rentHouse3 = new Building('Monolocale', 'Affitto', 'Corso Roma');
$rentHouse3 -> CalcRandPrice('Affitto');

//Vendita
$buyHouse1 = new Building('Villa', 'Vendita', "Piazza Vescovio");
$buyHouse1 -> CalcRandPrice('Vendita');
$buyHouse2 = new Building('Bilocale', 'Vendita', "Via Napoli");
$buyHouse2 -> CalcRandPrice('Vendita');


//Risultato
try {
    echo "<div style='text-align: center'>";
    $currentClient->SetInfo();
    $currentAgent->SetInfo();
    echo "</div>";
    echo "<h1>In affitto:</h1>";
    $rentHouse1->GetHouseInfo();
    $rentHouse2->GetHouseInfo();
    $rentHouse3->GetHouseInfo();

    echo "<h1>In Vendita:</h1>";
    $buyHouse1->GetHouseInfo();
    $buyHouse2->GetHouseInfo();
} catch (Exception $x) {
    echo "Errore: " . $x->getMessage();
}


