<<<<<<< HEAD

<?php

echo "Hello world ";
echo "Code above the html body";
echo 2024," " ;
echo "Hello ","Farhan ","in ",2024;
print "Printing using print method";
print("Printing using print method inside bracket")

?>

<html>
<h1>This is my first PHP code</h1>
<div>
    <b>
         <?php 
    echo "This paragraph inside html div";
    ?> 
    </b>
  
</div>
</html>

<?php
echo "Code after/bottom of html body";
?>

<?php
echo "The End";
?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP first program</title>
</head>
<body>

<h1>Learning PHP , and this is my first website</h1>

<!-- PHP TAG -->
<?php

// PRINT SOMETHING IN PHP
echo 'first php text <h2>Hello World</h2>';

// VARIABLES IN PHP
echo "<h3>Printing variables : </h3>";
$name="farhan akhtar<br>";

// printing name variable
echo $name;

// printing name variable with variable type and value
echo var_dump($name);

//OPERATORS, DATA TYPES, LOOPS, STATEMENTS, CONDITIONALS => THESE ARE EASY SAME AS JAVASCRIPT

// CONSTANT VARIABLES
echo "<h3>Printing contant variale : </h3>";
define("myName","farhan Akhtar");
echo myName;

// ARRAYS IN PHP
$languages = array("c","cpp","java","js","python");
echo "<h3>Printing arrays elements using for each : </h3>";
foreach($languages as $value){
    echo $value;
    echo "<br> ";
}

// FUNCTIONS IN ARRAY
echo "<h3>Printing numbers using function and for loops : </h3>";
function printNumber(){
    for($i=0;$i<=10;$i++){
        echo $i;
        echo "<br>";
    }
}

// calling function
printNumber();

?>


</body>
</html>
>>>>>>> dd9c1dc2ac8eb90db9e6f8f4926255319b8013e7
