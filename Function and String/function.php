<?php

echo "using function to print something<br/>";

echo "<br/><br/>";
// function to printing
function printData($afterAge){
    $name = "farhan";
    $age = 21;
    
    echo "My name is  $name  , And I am  $age  year old, after  $afterAge   year , I'll be " .$afterAge+$age. "  year old";
}

// calling function
printData(10);

?>