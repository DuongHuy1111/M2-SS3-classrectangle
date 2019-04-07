<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rectangle Class</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="inputNumber1" placeholder="Input Width">
    <input type="text" name="inputNumber2" placeholder="Input Height">
    <input type="submit">
</form>
<br>

<?php
include "rectangle.php";
// Get value from user
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Check value Invalid
    if (empty($_POST['inputNumber1']))
        echo "Import Width";
    else if (empty($_POST['inputNumber2']))
        echo "Import Width";
    else if (!is_numeric($_POST['inputNumber1']) || !is_numeric($_POST['inputNumber2']))
        echo "Please enter the number";
    else {
        $width = $_POST['inputNumber1'];
        $height = $_POST['inputNumber2'];
        // Extends class Rectangle
        $rectangle = new Rectangle($width, $height);
        echo $rectangle->display()."<br>";
        echo "Area : ".$rectangle->getArea()."<br>";
        echo "Perimeter : ".$rectangle->getPerimeter()."<br>";
    }
}
?>

</body>
</html>