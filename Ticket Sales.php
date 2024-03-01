<?php
//Calculate Mean Absolute Percentage Error
function forecast($actual,$predicted){
$mape = ($predicted - $actual) / $actual;
return $mape;
//Add each $mape to the $AggMapp array
}

//Repeat For each Forcaster, for each show

//10 shows, 3 forecasters ---> 30 arrays

//For each array, Calculate averages over the values

$actual //Pulls from ticket sales db: Get via API? Or manually enter to CSV
$predicted //stored in Test Show CSV. 2 columns, Sales Date and datavalue. 10 tabs = 10 shows. 2-4 Forecasters per show


?>