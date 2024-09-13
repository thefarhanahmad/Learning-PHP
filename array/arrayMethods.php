<?php

// Array declare
$cars = array("bmw","audi","merc","RR",10,0,30);
echo "<br/><br/>";

// Methods in Array

// COUNT() => use to return the length of array
$cars_counts = count($cars);
echo "items in cars array are : " .$cars_counts;

echo "<br/><br/>";

// in_array() => find items in array like [includes(in javascript)].
$dCar = "10";
$car_present = in_array($dCar,$cars);
echo "check if car ". $dCar. " is present or not : " .$car_present;

echo "<br/><br/>";

// SORT() => return sorted array in asc order;
$numbers = array(3,5,2,39,27,46,50);
$sorted_array = sort($numbers);

echo "Printing sorted array of numbers : " ,print_r($numbers);

echo "<br/><br/>";

// rSORT() => return sorted array in desc order;
$sorted_array = rsort($numbers);

echo "Printing sorted array of numbers : " ,print_r($numbers);

// Printing array using For Loop

echo "<br/><br/>";
echo "Printing cars using for loop<br/>"; 
for($i=0;$i<count($cars);$i++){
    echo $cars[$i]."<br/>";
}

// Printing array using For each loop

echo "<br/><br/>";
echo "Printing cars using For each loop<br/>"; 
foreach($cars as $value){
    echo $value."<br/>";
}


?>