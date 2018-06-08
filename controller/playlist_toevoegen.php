<?php
session_start();
include "../db_connect.php";

$naam = $_GET['naam'];
$img = $_GET['plaatje'];
$id = $_SESSION['id'];



$sql = "INSERT INTO playlist (name, img, user_iduser) VALUES ('$naam', '$img', '$id')";
//$update = "INSERT INTO user_has_playlist(user_iduser, playlist_idplaylist) VALUES ('$id','$playlist_id')";
$result = mysqli_query($conn, $sql);


header("location: ../view/overzicht_playlist.php");


?>