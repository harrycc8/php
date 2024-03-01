<?php
include 'movie.php';
$mov1=new Movie('N0001', 'Lusso', 4.99);
$mov2=new Movie('P0002', 'Junior', 5.99);

echo $mov1->title.'<br>';
echo $mov1->conversion('Japan').'<br>';

echo Movie::DISCOUNT.'<br>';
echo $mov1::DISCOUNT.'<br>';
echo $mov2::DISCOUNT.'<br>';

echo $mov1->displayHeading('H1');

$mov1->rentalPrice = -20;
echo $mov1->rentalPrice.'<br>';

$mov1->id = 'A12387';
echo $mov1->id;

$mov1->rentalPrice=5.99;
echo $mov1->rentalPrice;

echo '<br>';
echo $mov2;
?>

