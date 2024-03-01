<?php 

if(!isset($_POST['counter']))
$_POST['counter']=0;

if (isset($_POST['increment'])) 
$_POST['counter']= (int)$_POST['counter'] + 1;

if (isset($_POST["decrement"])) 
$_POST['counter'] = (int)$_POST['counter'] -1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1> Counter:  <?php echo $_POST['counter']; ?> </h1>
<form action="" method="post">
<button type="submit" name="increment" value="Increment">Increment</button>
<button type="submit" name="decrement" value="Decrement">Decrement</button>

<br>

<?php

echo '<br>';
echo date('jS F Y ' . 'H:i:s');

?>

</form>
</body>
</html>