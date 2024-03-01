<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <h2>Results</h2>
    <?php
    $name = $_POST['name'];
    $contract = $_POST['contract'];
    $email = $_POST['email'];

    $doctype = $_POST['doctype'];
    $multdoc = $_POST['multdoc'];
    $file = $_POST['file'];

    $counter1 = $_POST['counter1'];
    $counter2 = $_POST['counter2'];

  
    echo "<p>Name: $name</p>";
    echo "<p>Contract ID: $contract</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Document Type: $doctype</p>";
    echo "<p>Uploading Multiple Docs?: $multdoc</p>";
    echo "<p>File: $file</p>";
    echo "<p>Counter 1 Value: $counter1</p>";
    echo "<p>Counter 2 Value: $counter2</p>";
    ?>
</body>
</html>