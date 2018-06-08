<?php
session_start();
include '../db_connect.php';
require '../include/header.php';
$playlistID = $_GET['playlistid']
?>
<body>
<?php require '../include/nav.php'; ?>
<!-- container -->
<div class="container">
<?php
 echo " <table class='table table-striped'>
        <th>YoutubeID</th>
        <th>Artist</th>
        <th>Uploaded by</th>";

        $sql2 = "SELECT youtubeID, artiest, uploadedBy FROM songs WHERE playlist_idplaylist = '$playlistID'";

        $result = mysqli_query($conn, $sql2);

        while ($test = mysqli_fetch_array($result)) {
            $youtubeid = $test['youtubeID'];
            $artiest = $test['artiest'];
            $uploaded = $test['uploadedBy'];
            $url = "https://www.youtube.com/embed/" . "$youtubeid";

        echo "
              <tr>
              <td><iframe width='200' height='200' src=$url frameborder='0' allowfullscreen></iframe></td>
              <td>$artiest</td>
              <td>$uploaded</td>
              </tr>";
                }
    echo "<h2>songs</h2>";
    echo "</table>";
    echo "
    <form method='get' action='toevoegen_song_form.php'>
        <input type='hidden' value='$playlistID' name='playlistid' >
        <input type='submit' value='songs toevoegen' class='btn btn-primary'>
    </form>
    "; ?>
</div>
<?php include "../include/footer.php"; ?>
</body>