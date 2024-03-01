<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
 <textarea type="text" name="text" placeholder="Enter Text Here" rows="10" cols="50"></textarea>
 <br>
 <input type="submit" name="sm">
</form>


</body>
</html>

<?php

function wordcount($text){
$trim = trim($text);
$word = str_word_count($trim);
echo "Inputted Text: " . $text;
echo "<br>";
echo "Numbers of words: " . $word;
}

if(isset($_POST['sm'])){
wordcount($_POST['text']);
}

?>