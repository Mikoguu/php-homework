<?php
$bmw = array(
    "name" => "bmw",
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2015
);

$toyota = array(
    "name" => "toyota",
    "model" => "X5",
    "speed" => 120,
    "doors" => 4,
    "year" => 2020
);

$opel = array(
    "name" => "opel",
    "model" => "X5",
    "speed" => 180,
    "doors" => 4,
    "year" => 2010
);

$cars = array($bmw, $toyota, $opel);

for ($i = 0; $i < count($cars); $i++) {
    echo(
        "CAR " . $cars[$i]['name'] . '</br>' . $cars[$i]['model'] . ' ' . $cars[$i]['speed'] . ' ' . $cars[$i]['doors'] . ' ' . $cars[$i]['year'] . '</br>'
    );
}

?>