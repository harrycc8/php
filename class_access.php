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
public $wheels = 4; //available to whole program
protected $hood = 1; //Only available to this class or subclass. 
private $engine = 1; //Only available to this class (no inheritered classes)
var $doors = 4;

function showProperty(){

    echo $this->engine;
     
 }

}

$bmw = new Car();

//echo $bmw->hood; //will throw an error
echo $bmw->showProperty();

?>

</body>
</html>