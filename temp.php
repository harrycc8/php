<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
Fahrenhiet: <input type="number" name="fahrenheit">
<div><br>
Celsius: <input type="number" name="celsius">
</div>

<input type="submit" name="sm">
    </form>
</body>
</html>


<?php


function converter($fahrenheit){
if($fahrenheit !== ""){
    $celsius = 5/9 * ($fahrenheit-32);
    return $celsius;
}}

function converter1($celsius){
    if($celsius !== ""){
        $fahrenheit = ($celsius * (9/5)) + 32;
        return $fahrenheit;
    }}



if(isset($_POST['sm'])){
if($_POST['celsius']==""){
    $celsius = converter($_POST['fahrenheit']);
    $fahrenheit = $_POST['fahrenheit'];
echo "Celsius: " . $celsius;
echo "<br>";
echo "Fahrenheit: " . $fahrenheit;
}else{
    $fahrenheit = converter1($_POST['celsius']);
    $celsius = $_POST['celsius'];
    echo "Celsius: " . $celsius;
    echo "<br>";
    echo "Fahrenheit: " . $fahrenheit;
}}
?>