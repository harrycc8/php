<?php
#find out if form was submited. Great superglobal (stored as associative array)
#Check is submit button was pressed and information sent to $_POST
if(isset($_POST['sm'])) {
 //echo "yes it works!";

 $name = array("Harry", "Edwin", "Paul", "Jake", "Maria");
 $minimum =5;
 $maximum = 10;

 #echos if submit button was pressed
 $username = $_POST['username'];
 $password = $_POST['pass'];

 #check on the username (usually style it: make it red or something using CSS)
 if(strlen($username) < $minimum ) {
    echo 'Username has to be longer than 5 characters';
 }

 if(strlen($username) > $maximum  ) {
    echo 'Username has to be shorted than 10 characters';
 }

if(!in_array($username, $name)) {

echo "Not allowed";
} else {
    echo "Welcome";
}

 //echo "Hello " . $username . "<br>";
 //echo "Your Password is " . $password;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form_process.php" method="post"> 
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="password" name="pass" placeholder="Enter password">
    <br>
    <input type="submit" name="sm">
</form>
</body>
</html>