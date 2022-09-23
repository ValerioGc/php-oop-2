<?php

include_once __DIR__ . "/User.php";


$currentAgent = new User("Luca", "Bianchi", "test@test.it", "Roma");
$currentClient= new User("Mario", "Rossi", "prova@boolan.it");

echo "<pre>" . var_dump($currentClient) . "</pre>";
echo "<pre>" . var_dump($currentAgent) . "</pre>";


try {
    $currentAgent->GetInfo();
} catch (Exception $x) {
    echo $x;
}