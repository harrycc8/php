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
static $wheels = 4; //only belongs to class now, can no longer call in normal way
protected $hood = 1; //Only available to this class or subclass. 

function MoveWheels(){

    Car::$wheels = 10;
}
}

$bmw = new Car();

echo Car::$wheels;
Car::MoveWheels();

?>

</body>
</html>