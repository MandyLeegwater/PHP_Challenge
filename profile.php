<?php
session_start();
include "db_connect.php";

if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['Song'] = "You must log in before viewing your profile page!";
}
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "include/header.php"; ?>
</head>
<body>
<?php include "include/nav.php"; ?>
<!-- container -->
<div class="container">
    welkom <?php echo ($_SESSION['email']);?>
</div>
<?php include "include/footer.php"; ?>
</body>
</html>
