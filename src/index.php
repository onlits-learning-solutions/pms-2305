<?php
require 'Models/User.php';
require 'Models/DatabaseContext.php';
require 'env.php';

use PMS\Models\User;

$error_message = null;

if (isset($_POST['submit'])) {
    $user = new User($_POST);
    if (($user_id = $user->authenticate()) != null) {
        session_start();
        $_SESSION['user_id'] = $user_id;
        header('location:Views/Dashboard.php');
    } else {
        header('location:index.php?error=99');
    }
}

if (isset($_GET['error'])) {
    if ($_GET['error'] == 99)
        $error_message = "Invalid user id or password! Please retry!";
    elseif ($_GET['error'] == 199)
        $error_message = "You have successfully logged out!";
    elseif ($_GET['error'] == 299)
        $error_message = "Session expired! Please login to continue!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Management System Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="page-grid-2">
        <div class="left-grid">
            <h1>Parking Lot Management System</h1>
        </div>
        <div class="right-grid">
            <form action="" method="post">
                <label for="user_id" class="form-label">User Id</label>
                <input type="text" name="user_id" id="user_id" class="form-control" required>
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <button name="submit" id="submit" class="form-button">Submit</button>
                <label for="" style="margin-left: 100px; color:red"><?= $error_message ?></label>
            </form>
        </div>
    </div>
    <footer>&copy; 2023, Maa Ugra Tara Complex</footer>
</body>

</html>