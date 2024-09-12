<?php

// Declaring Array

$cars = array("bmw","audi","merc","RR",10,0,30);

echo "Accessing Car using index ".$cars[6];
echo "Printing all cars using print_r". print_r($cars);


// Associate array
$names = array(
    "first"=>"farhan",
    "last"=>"akhtar",
    50,03,
);

echo "Accessing Car using names in associate array ". $names["last"];
echo "Accessing Car using index in associate array ". $names[1];


?>