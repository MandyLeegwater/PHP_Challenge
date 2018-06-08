<?php
session_start();
include "../db_connect.php";

$youtubeid = $_GET['youtubeid'];
$artiest = $_GET['artiest'];
$uploaded = $_GET['uploaded'];
$playlistID = $_GET['playlistid'];
//print_r($_GET);
//print_r($_GET);

$sql = "INSERT INTO songs (youtubeID, artiest, uploadedBy, playlist_idplaylist) VALUES ('$youtubeid', '$artiest', '$uploaded', '$playlistID')";

$result = mysqli_query($conn, $sql);


header("location: ../view/overzicht_playlist.php");


?>