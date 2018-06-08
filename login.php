<?php
session_start();
require_once 'db_connect.php';
/* User login process, checks if user exists and password is correct */


if (isset($_POST['email']) && isset($_POST['password'])) {
    //Checks the Firstname/lastname/email from the form.
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            if (password_verify($_POST["password"], $row['hash'])) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['iduser'];
                // This is how we'll know the user is logged in
                $_SESSION['logged_in'] = true;
                //var_dump($row);
                header("location: profile.php");
            } else {
                echo "WRONG PASSWORD";
            }
        }
    } else {
        echo "0 results";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php include "include/header.php"; ?>
</head>
<body>
<div class="container">
    <div class="row align-items-center">
        <div class="col">
            <form method="POST">
                <input type="email" name="email" placeholder="Email" required autofocus><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit">Login</button>
                <a href="register.php">Register</a>
            </form>
        </div>
    </div>
</div>