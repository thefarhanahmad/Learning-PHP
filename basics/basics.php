
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
echo "<h1>Topics We'll Cover in this tutorial :</h1> <h3>Variables, String concatination, operators, inclued() or require()</h3>";

// Declaring variables

$firstname = "Farhan";
$lastname = "Akhtar";
$age = 21;

// Printing variable
echo $firstname;
echo $lastname, "<br/>";
echo "age is : ", $age;
echo "<br/>";



// string concatenation
echo "Full name : ",$firstname.$lastname;


?>

<!-- Header -->

<!-- Importing header from another file as a component -->
<?php
require("Header.php")
?>


<!-- Body -->
<div>
    <?php
     $firstname = "Riyal" ;
     echo $firstname; 
    ?>
Hero section
</div>

<!-- Footer -->
 <?php
 include("Footer.php")
 ?>

</body>
</html>