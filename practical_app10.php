<?php

class Dog
{
    public $eyecolor = "Brown";
    public $nose = "Pink";
    public $furcolor = "Black";

    function ShowAll()
    {
        echo $this->eyecolor;
        echo "<br>";
        echo $this->nose;
        echo "<br>";
        echo $this->furcolor;
    }
}

$pitbull = new Dog();

$pitbull->ShowAll();
