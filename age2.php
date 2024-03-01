
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

function calculateAge($birthday){
    $date = new DateTime($birthday);
    $now = new DateTIme();
    $interval = $now->diff($date);
    return $interval->y;
}

if(isset($_POST['sm'])){
    echo calculateAge($_POST['birthday']);
}
?>



