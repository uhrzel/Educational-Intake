<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <style>
        body {
            background-color: #333;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 0 auto;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        input[type="text"],
        input[type="password"],
        select {
            display: block;
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"] {
            background-color: #f00;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"]:hover {
            background-color: #c00;
        }

        .error-message {
            color: #f00;
            margin-top: 10px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>

<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // Use password_hash
    $role = $_POST['role'];
    $id = $_POST['id'];

    $checkUsernameQuery = "SELECT * FROM users WHERE username = :username";
    $stmtCheckUsername = $connection->prepare($checkUsernameQuery);
    $stmtCheckUsername->bindParam(':username', $username);
    $stmtCheckUsername->execute();

    if ($stmtCheckUsername->rowCount() > 0) {
        echo "<script>alert('User already exists!');window.location.href='register.php';</script>";
    } else {
        $insertUserQuery = "INSERT INTO users (username, password, role, id) VALUES (:username, :password, :role, :id)";
        $stmtInsertUser = $connection->prepare($insertUserQuery);
        $stmtInsertUser->bindParam(':username', $username);
        $stmtInsertUser->bindParam(':password', $password);
        $stmtInsertUser->bindParam(':role', $role);
        $stmtInsertUser->bindParam(':id', $id);

        if ($stmtInsertUser->execute()) {
            echo "<script>alert('Registered successfully!');window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Error. Check the inputs!');window.location.href='register.php';</script>";
        }
    }
}
?>


<body>
    <div class="container">
        <form method="POST" action="">
            <h1>Registration Form</h1>
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <select id="role" required name="role">
                <option value="" disabled selected>Select your role</option>
                <option value="student">Student</option>
                <option value="counselor">Guidance Counselor</option>
            </select>
            <input type="text" id="id" name="id" placeholder="Enter your ID" required>
            <input type="submit" name="submit" value="Register">
        </form>
    </div>

    <!-- <script>
        function handleRegistration() {
            // Capture form data
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var role = document.getElementById('role').value;
            var id = document.getElementById('id').value;

            // Check if any field is empty
            if (!username || !password || !role || !id) {
                document.getElementById('errorMessage').innerText = 'All fields are required.';
                return false;
            }

            // Replace this alert with your actual logic for handling registration
            alert('Registration data submitted:\nUsername: ' + username + '\nPassword: ' + password + '\nRole: ' + role + '\nID: ' + id);

            // Redirect to the login form
            window.location.href = 'loginform.html';

            // Prevent the form from actually submitting
            return false;
        }
    </script> -->
</body>

</html>