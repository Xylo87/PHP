<?php

require "Personnages.php";

$merlin = new Personnages("Merlin", "Théobald");

// $merlin->_name = "Merlin";

// $merlin->_vie = 100;

$merlin->fireball();
$merlin->regenerer(5);

$harry = new Personnages("Harry", "Potter");

// $harry->_name = "Harry";

$harry->regenerer();
var_dump($harry->mort());

$merlin->attack($harry);

if($harry->mort()){
    echo "Harry est mort";
} else {
    echo "Harry a survécu avec ".$harry->_vie." !";
}

var_dump($merlin);
var_dump($harry);



var_dump($merlin->getForname());

$merlin->setAge(126);

var_dump($merlin);