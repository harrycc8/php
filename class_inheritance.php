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

#Create Methods
function MoveWheels() {
echo "Wheels Move";
#Can use Methods to change the properties
$this->wheels=10; //inside the class we refer to each name with the keyword $this
}

function CreateDoors(){
$this->doors= 6;

}}

class Plane extends Car {
var $wheels=20;
}

$jet = new Plane();
echo $jet->wheels;



//if(class_exists("Plane")){

 //   echo "Yep";
//}


?>



</body>
</html>