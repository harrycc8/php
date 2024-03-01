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

}

}

#Check if class exists
if(class_exists("Car")){
echo "Yes class exists";
}else {
    echo "NOOOO";
}

#Check if method exists
if(method_exists("Car", "MoveWheels")){
echo "Method Exists";
}else{
    echo "nope";
}

#Instantiate Class
$bmw = new Car(); //creates new object based on instance of Class
$truck=new Car();
echo $bmw->wheels. "<br>";
echo $truck->wheels = 10;

#Use Property
echo $bmw->wheels;
#Can change value of property
$bmw->wheels=8;

#Activate the Method
$bmw-> MoveWheels();
echo $bmw->wheels;

$truck->CreateDoors();
echo $truck->doors;
?>



</body>
</html>