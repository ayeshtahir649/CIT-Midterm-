<!DOCTYPE html>
<html>
<head>
    <title>Form Handling</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .error { color: red; }
        .output { margin-top: 20px; padding: 15px; background: #eef; }
    </style>
</head>
<body>

<h2>Contact Form</h2>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    // Validation
    if (empty($name) || empty($email)) {
        echo "<p class='error'>All fields are required!</p>";
    } else {
        // Formatted Output
        echo "<div class='output'>";
        echo "<h3>Submitted Information</h3>";
        echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
        echo "</div>";
    }
}
?>

</body>
</html>