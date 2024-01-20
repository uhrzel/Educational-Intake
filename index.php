<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School Landing Page</title>
    <link rel="icon" type="image/png" href="./images/logo.jpg" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Custom styles go here */
        body {
            background-color: #f8f9fa;
        }

        .landing-container {
            text-align: center;
            padding: 50px;
        }

        .history-container {
            margin-top: 30px;
        }

        .logo-container {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .buttons-container {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>

<body>

    <div class="container landing-container">
        <!-- Logo -->
        <div class="logo-container">
            <img src="./img/logo.jpg" alt="School Logo" class="img-fluid mb-4" width="200px" height="200px">
        </div>
        <div class="history-container">
            <h2>Our School's History</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <!-- Centered Image -->
        <img src="./img/school.jpg" alt="School Image" class="img-fluid rounded" width="1200px">

        <!-- History Section -->


        <!-- Login and Register Buttons -->
        <div class="buttons-container">
            <a href="./login.php" class="btn btn-primary">Login</a>
            <a href="./register.php" class="btn btn-success">Register</a>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>