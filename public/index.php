<?php

use App\Classes\Crocodile;

// chargement de l'autoloader de Composer
require __DIR__ . "/../vendor/autoload.php";

$croco = new Crocodile('croc');
$croco->boire();

echo "<br/>";

$croco->manger();