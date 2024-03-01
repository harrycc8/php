
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
   Enter your Birthday <input type="date" name="birthday">
   <div>
   <input type="submit" name="sm">
</form>

</body>
</html>
<br><br>
<?php

function birthday($birthday) {
    $today= date('Y-m-d');
    $unix= strtotime($today) - strtotime($birthday);
    $age= floor($unix / (365*24*60*60));
    echo "Your Age is: " . $age;
}

if(isset($_POST['sm'])){
    echo birthday($_POST['birthday']);
}
?>
