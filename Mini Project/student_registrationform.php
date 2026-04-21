<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 500px;
            margin: 60px auto;
            padding: 25px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .error {
            color: red;
            font-size: 14px;
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h3 class="text-center mb-4">Student Registration</h3>

        <form method="post" id="studentForm">

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                <div class="error" id="nameError">Name is required</div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control">
                <div class="error" id="emailError">Email is required</div>
            </div>

            <!-- Course -->
            <div class="mb-3">
                <label class="form-label">Course</label>
                <select name="course" id="course" class="form-control">
                    <option value="">Select Course</option>
                    <option>BSCS</option>
                    <option>BBA</option>
                    <option>Engineering</option>
                </select>
                <div class="error" id="courseError">Please select a course</div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <!-- PHP Output -->
        <?php
        if (isset($_POST['submit'])) {

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $course = trim($_POST['course']);

            if (empty($name) || empty($email) || empty($course)) {
                echo "<p class='text-danger mt-3'>All fields are required!</p>";
            } else {
                echo "<div class='alert alert-success mt-3'>";
                echo "<h5>Registration Successful</h5>";
                echo "Name: <strong>" . htmlspecialchars($name) . "</strong><br>";
                echo "Email: <strong>" . htmlspecialchars($email) . "</strong><br>";
                echo "Course: <strong>" . htmlspecialchars($course) . "</strong>";
                echo "</div>";
            }
        }
        ?>
    </div>
</div>

<!-- jQuery Validation -->
<script>
$(document).ready(function () {

    $("#studentForm").submit(function (e) {

        let isValid = true;

        let name = $("#name").val().trim();
        let email = $("#email").val().trim();
        let course = $("#course").val();

        // Name
        if (name === "") {
            $("#nameError").show();
            isValid = false;
        } else {
            $("#nameError").hide();
        }

        // Email
        if (email === "") {
            $("#emailError").show();
            isValid = false;
        } else {
            $("#emailError").hide();
        }

        // Course
        if (course === "") {
            $("#courseError").show();
            isValid = false;
        } else {
            $("#courseError").hide();
        }

        if (!isValid) {
            e.preventDefault(); // stop form submission
        }
    });

});
</script>

</body>
</html>