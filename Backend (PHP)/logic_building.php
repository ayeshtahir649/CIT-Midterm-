<!DOCTYPE html>
<html>
<head>
    <title>Number Logic</title>
</head>
<body>

<h2>Number Checker</h2>

<form method="post">
    Enter Number: <input type="number" name="num">
    <input type="submit" name="check" value="Submit">
</form>

<?php
if (isset($_POST['check'])) {

    $num = $_POST['num'];

    if ($num === "") {
        echo "<p style='color:red;'>Please enter a number</p>";
    } else {

        // Even or Odd
        if ($num % 2 == 0) {
            echo "<p><strong>$num is Even</strong></p>";
        } else {
            echo "<p><strong>$num is Odd</strong></p>";
        }

        // Table
        echo "<h3>Multiplication Table of $num</h3>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$num × $i = " . ($num * $i) . "<br>";
        }
    }
}
?>

</body>
</html>