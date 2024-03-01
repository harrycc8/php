<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>

<form action="gettest.php" method="get">
    <fieldset>
<legend>General Info</legend>
   <label> Name: <input type="text" name="name" placeholder="Type your Name"> </label>
 <div><br>
    <label> Contract ID: <input type="password" name="contract" placeholder="Enter Contract ID"></label>
 </div>
<div><br>
    <label>Email: <input type="email" name="email" placeholder="you@yourdomain.com"></label>
</div>
    </fieldset>


    <fieldset>
<legend>Document Info</legend>
<label>Document Type:
<div>
<input type="radio" name="doctype" id="costing" placeholder="costing">
<label for="costing">Costing</label>
</div>
<div>
<input type="radio" name="doctype" id="settlement" placeholder="settlement">
<label for="settlement">Settlement</label>
</label>
</div>
<div>
<input type="radio" name="doctype" id="statement" placeholder="statement">
<label for="statement">Statement</label>
</div>
<br>

<div>
<label> Uploading Multiple Documents? <input type="checkbox" name="multdoc" placeholder="Uploading Multiple Documents"></label>
</div>
<br>

<div>
    <label> Upload Document <input type="file" name="file">
</div>

<fieldset>
<legend>Counter</legend>
<div>
<label>Count By 1: <input type="number" name="counter1" placeholder="100"></label>
</div>
<div>
<label>Count By 100: <input type="number" name="counter2" placeholder="100" step="100"></label>
</div>
</fieldset>

<div><br>
<input type="submit" name="sm" value="Submit Form">
</div>
</form>


<?php
    if (isset($_GET['sm']))
     print_r($_GET);
?>

</body>
</html>