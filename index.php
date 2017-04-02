<?php

require 'Personnage.php';
require 'Armee.php';

$merlin = new Personnage("Merlin");

$harry = new Personnage("Harry");

$merlin->revivre();
$merlin->crier();
$merlin->mort();


echo "Bonjour " . $merlin->vie;

$merlin->tuer();
$merlin->mort();

$armee = new Armee("Gwen");

echo "appel par la fonction : " . $armee->hommes . " dont le chef est " . $armee->nomChef;


var_dump($armee);