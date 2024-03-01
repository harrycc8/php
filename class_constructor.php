<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
#Define class. Capitalize the C, won't be consdered a class otherwise
class Car {

#Set Properties
var $wheels = 4;
var $hood = 1;
var $engine = 1;
var $doors = 4;
function __construct() {
    echo $this->wheels = 10;
}}

$bmw = new Car(); //echos the constructor automatically
//Might need to do certain functions before we execute a program 
?>



</body>
</html>