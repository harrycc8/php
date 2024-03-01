<?php
session_start();

if (!isset($_SESSION['counter']))
    $_SESSION['counter'] = 0;

if (isset($_POST['increment']))
    $_SESSION['counter'] += 100;

if (isset($_POST["decrement"]))
    $_SESSION['counter'] -= 100;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <h1 style="font-size: 72px; color: red;"> Counter: <?php echo $_SESSION['counter']; ?> </h1>
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