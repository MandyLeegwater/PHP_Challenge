<?php
require_once 'db_connect.php';


//Checking if the firstname/lastname/email are filled in.
if (isset($_POST['email'])) {
    //Checks the data from the form.
    $password = $_POST['password'];
    $email = $_POST['email'];
    $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    //Inserts the data into the database
    $sql = "INSERT INTO user (hash, password, email)
VALUES ('$hash', '$password', '$email')";

    //Checks if the data is inserted.
    if ($conn->query($sql) === TRUE) {
        header("location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
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
                <input type="email" name="email" placeholder="Email address" required autofocus><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit">Register</button>
                <a href="login.php">Login</a>
            </form>
        </div>
    </div>
</div>