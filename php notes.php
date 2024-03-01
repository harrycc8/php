print string text with the echo command
<?php echo "hello student"; ?>
always end php command with a ;

Add comments with # or //
in HTML its --
Multiple line coment is /* and end comment with */

Variables
Define Variable
<?php
$name = "Harry";
$number = 100;

# Call Variable

echo $name;

#variables are case sensitive
#concatinate variables

echo $name . " " . $number;

#can only assign one value at a time
?>

Math
<?php

echo 56 + 45;
#will print answer
?>

Arrays
can store more than one type of data: a list
<?php

$numberList = array(23, 64, "text", '<h1>Hello</h1>');
#each spot is an index, starting with 0 (23 is index 0)
#need to specify index when calling
echo $numberList[0];

#show total array with associated indices
print_r($numberList);

#can also write arrays in shorthand
$number = [10, 20, 49];

#can have multi-dimensional arrays
$matrix= array(
    array("x"," ","x")
    array(" ","o","x")
    array("o","o","x")
);

echo $matrix[1][2];
?>

Associative Arrays
arrays that don't need to be ordered: they have labels
<?php
$names = array("first_name" => "Harry", "last_name" => "Culleton");
#changing the key to a word (first_name)
echo $names["first_name"] . " " . $names['last_name'];
?>

Superglobals: $_GET & $_POST
When creating a form in HTML, include in initial form tag:
<form action="process.php" method="get">
    Action specifies that file we want to use to process the HTML form
    - Empy string means current file will process the form (action = "")
    Method specifies the method we want to use to send the form data
    - get or post (get is default)

    Get Mothod
    When used, form data is appended to the URL
    There is a limit to the amount of data that can be transmitted using the get method
    When submitting a form, URL will be changed to:
    http://localhost/form.php?studentname=Alex&subj%5B%5D=EL&subj%5B%5D=MA&gender=
    Depending on what is filled out
    - ? is a separater
    - Query string contains the form data as a name=value pair (separated by &)
    - 5B encodes [ and 5D encode ]

    $_GET
    A Superglobal that stores the query string as an associative array
    To view all data in $_GET, add code between the </from> and </body> tags:
    <?php
    #isset checks if the function is set (i..e. if the Submit Form button has been pressed)
    if (isset($_GET['sm']))
        print_r($_GET);
    ?>
    Now when you releoad form and submit, URL will update with data as above

    Post Method
    similar to get method, except form data is not appended to the URL
    Suitable for sending sensitive information to the server
    <form action="" method="post">
        &
        <?php
        if (isset($_POST['sm'])) print_r($_POST);
        ?>
        Get the same array at the bottom of the page, just no appended URL


isset() function
Checks if a variable has been declared and is not NULL
commonly used to determine if a button has been clicked
$a = 5;
$b = NULL;
Then
var_dump(isset($a));
var_dump(isset($b));
var_dump(isset($c));
will give us
bool(true) bool(false) bool(false)

 $_SESSION
-Session is a way of storing info that can be accessed across multiple pages
-Associative array like get and post super globals
Stored on the server and is available to all pages on the site during the duration of the session 
<?php
#start a new session
session_start();
#store strings into the superglobal and associated keys (myFav...)
$_SESSION['myFavFood'] = 'Pizza';
$_SESSION['myFavDrink'] = 'Cola';
$_SESSION['myFavColor'] = 'Orange';

#updating a session variable
$_SESSION['myFavDrink'] = 'Beer';

#deleting a session variable
unset($_SESSION['myFavColor']);

#View output
#on new page call function to resume current session
session_start();
#use echo statements to output the values stored in $_SESSION
echo '<BR>Food: ' . $_SESSION['myFavFood'];
echo '<BR>Drink: ' . $_SESSION['myFavDrink'];
echo 'Color: ' . $_SESSION['myFavColor'];

#Destroy Session
#Destroy a session when user logs out of site
#On new page
session_start();
session_destroy();
?>


Display Date & time
<?php 
echo date('d-M-Y H:i:s')
#formatting: https://www.php.net/manual/en/function.date.php
?> 



If Statements
<?php
if (3 > 10) {
    echo "three is less than 10";
} elseif (4 > 5) {
    echo "of course four is less than five";
} else {
    echo "it is not";
}
?>

Math Operators
% Modulus: Remainder 
** Exponential

Comparison & Logical Operators
equal ==
identical === (4 and "4" are not identical, but they are equal)
compare > <>= <= <>
not equal !=
not identical !==
And &&
Or ||
Not !

Swtich Statements
<?php
#like an if statement that will cycle through each case
#good for testing one value on many different values
$number = 54;

switch ($number) {
case 34:
echo "it is 34";
break;

case 37:
echo "it is 37";
break;

case 38:
echo "it is 38";
break;

default:
echo "could not find anything";
}
?>


Counter
Submit Counter: separate buttons
PHP Function

Get and Post most used for Forms

Froms: value->placeholder 

PHP is server side scripting language
HTML is a view

Typing
don't have to declare a type (loosly typed)
$number=12334; is assumed to be a int
can declare a variable as a certain type

While Loop
<?php

$counter=0;
#need to create a counter to prevent infinite loop
while($counter < 10){

echo "hello student";
$counter = $counter +1;
#will print loop 9 times
}
#short hand version#
increment
$counter++; 
?>

For Loop
<?php
# create counter, condition, and increment
for ($counter = 0; $counter < 10; $counter+=1) {
    echo $counter . "<br>";
}
?>


Foreach Loop
<?php
$numbers=array(345,457,345,643,654);
#used with arrays
foreach($numbers as $number) {
    echo $number . "<br>";
}
?>

Functions
<?php
#enter function keyword/name
#Functions can be reused
function say_something(){

echo "Hello Student, do you like class?";
}

say_something();
#can put this code on different pages

#Parameters
function calculate($number1, $number2){
    $sum=$number1  + $number2;
    echo $sum;
    }
    calculate(12,24);

#Using Return
function addNumbers($number1, $number2) {
    $sum = $number1 + $number2;
    return $sum;
    }
    
    $result= addNumbers(34,64);
    #returning the output of function back into the variable
    echo $result;
#Stores result of function into a variable that we can use elsewhere
    ?>

Global Variables & Scope
scope: environement where element is available
-Global Scope: outside inside and outside of functions
<?php
$x = "outside";  //global 

function convert() {
global $x;
$x = "inside"; //local 
}
echo $x;
echo "<br>";
convert(); //changes the value of the variable to the function value of x
echo $x;
?>

Constants
<?php
$number = 10;
echo $number . "<br>";

#need functions for constants (can't change value when changed)
define("NAME", 1000); // name, value

echo NAME;
?>

Math Functions
<?php
echo pow(2,7); //2^7
echo rand(1,1000);//random number from 1-1000
echo sqrt(144);
echo ceil(4.6);//rounds up
echo floor(4.6); //rounds down
#full list: php.net/manual/en/ref.math.php
?>

String Functions
<?php
#All string functions: php.net/ref.strings
echo strlen('Hello');
echo strtoupper("hello"); //puts in all uppercase
?>

Array Functions
<?php
#List: php.net/manual/en/ref.array.php
$list = [343,245,345,235,63];

echo max($list); 
echo min($list);
sort($list); //sorts in numerical order
print_r($list);
?>

Dealing with Form Data
<?php
#find out if form was submited. Superglobal (stored as associative array)
#Check is submit button was pressed and information sent to $_POST
if(isset($_POST['sm'])) {
 echo "yes it works!";
 #echos if submit button was pressed
 $username = $_POST['username']; //stores inputted values as variables
 $password = $_POST['pass'];

 echo "Hello " . $username . "<br>";
 echo "Your Password is " . $password;
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
<form action="form.php" method="post"> 
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="password" name="pass" placeholder="Enter password">
    <br>
    <input type="submit" name="sm">
</form>
</body>
</html>

Validate Data from Form
<?php
#check on the username (usually style it: make it red or something using CSS)
 if(strlen($username) < $minimum ) {
    echo 'Username has to be longer than 5 characters';
 }

 $name = array("Harry", "Edwin", "Paul", "Jake", "Maria");
 if(!in_array($username, $name)) {

    echo "Not allowed";
    } else {
        echo "Welcome";
    }
?>

Object Oriented Programming (OOP)
Approach to programming where we organize our code by grouping related variables, constants, and functions into a class
Class: Blue print, definition, or description of something in your program -> An Object
-Defines 2 things: 
--Properties: Variables, Arrays, Data
--Methods: Functions/Behaviors
Ex. Object is a Car
-Properties: Wheels, Seats, Radio
-Methods: Move Wheels, Move Seats, Turn on Radio 
<?php
#Define class. Capitalize the C, won't be consdered a class otherwise
class Car {

#Set Properties
var $wheels = 4;
var $hood = 1;
var $engine = 1;
var $doors = 4;

#Create Methods
function MoveWheels() {
echo "Wheels Move";
#Can use Methods to change the properties
$this->wheels=10; //inside the class we refer to each name with the keyword $this
}}

#Check if class exists
if(class_exists("Car")){
echo "Yes class exists";
}else {
    echo "NOOOO";
}

#Check if method exists
if(method_exists("Car", "MoveWheels")){
echo "Method Exists";
}else{
    echo "nope";
}

#Instantiate Class: Instances
$bmw = new Car(); //creates new object based on instance of Class

#Use Property
echo $bmw->wheels;
#Can change value of property
$bmw->wheels=8; 

#Activate the Method
$bmw-> MoveWheels();
echo $bmw->wheels; //will change wheels for bmw from 4 to 10

#Class Inheritance: Use another class to inherit the properties/methods from another
class Plane extends Car {
    var $wheels=20; //can override the parent class
}

$jet = new Plane();
echo $jet->wheels;

#Constructors: Methods that will do something when we create an instance of a class
function __construct() {
    echo $this->wheels = 10;
} //inside Class brackets

$bmw = new Car(); //echos the constructor automatically
//Might need to do certain functions before we execute a program 

#Data Access: Access Modifiers
public $wheels = 4; //available to whole program
protected $hood = 1; //Only available to this class or subclass. Will have to use Method to show
private $engine = 1; //Only available to this class in which they are declared (no inheritered classes). Same as protected but doesn't work with inherited classes
//Can add Access Modifiers to methods - will default to public
echo $bmw->hood; //will throw an error

#Static Data: Only belongs to that class
static $wheels = 4; //only belongs to class now, can no longer call in normal way
echo Car::$wheels;
//Also applies to Constants
const DISCOUNT = 10;

#Encapsulation
//The act of preventing code outside from accessing class members unnecessarily
//i.e. using private for class members if code outside the class does not need access
//Prevents uunauthorized changes to object properties and makes it easy for us to change class members without affecting code outside of class.
//Can be accessed through getter and setter functions
// __get: Controls which property can be accessed outside the class. 1 parameters: what can be accessed
//__set: Controls which property can be modified. 2 prarameters: name of property to be modified, and new value
 
?>

