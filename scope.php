<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$x = "outside";  //global scope

function convert() {
global $x;
$x = "inside"; //local scope
}
echo $x;
echo "<br>";
convert(); //changes the value of the variable to the function value of x
echo $x;
?>




</body>
</html>