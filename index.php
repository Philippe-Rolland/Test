<?php

require 'Personnage.php';
require 'Armee.php';

$merlin = new Personnage("Merlin");

$harry = new Personnage("Harry");

var_dump($merlin);
var_dump($harry);


$merlin->revivre();
$merlin->crier();
$merlin->mort();

var_dump($merlin);
var_dump($harry);

echo "Bonjour " . $merlin->vie;

$merlin->tuer();
$merlin->mort();

var_dump($merlin);
var_dump($harry);

$armee = new Armee("Gwen");

echo "appel par la fonction : " . $armee->hommes . " dont le chef est " . $armee->nomChef;


var_dump($armee);