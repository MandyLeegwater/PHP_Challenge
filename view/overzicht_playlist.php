<?php
session_start();
include '../db_connect.php';
require '../include/header.php';
?>
<body>
<?php require '../include/nav.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php
            echo "<table class='table table-striped'>
        <th>Name</th>
        <th>IMG</th>";
            $id = $_SESSION['id'];
            //$sql = "SELECT playlist.name, playlist.img FROM playlist INNER JOIN user_has_playlist on user_has_playlist.playlist_idplaylist = user_has_playlist.user_iduser WHERE user_has_playlist.user_iduser = '$id'";
            $sql2 = "SELECT name, img, idplaylist FROM playlist";

            $result = mysqli_query($conn, $sql2);

                while ($test = mysqli_fetch_array($result)) {
                    $playlistName = $test['name'];
                    $playlistImage = $test['img'];
                    $playlistId = $test['idplaylist'];
                    echo "
                            <tr>
                            <td>$playlistName</td>
                            <td><img src='$playlistImage' style='width: 200px; height: 200px'></td>
                            <form method='get' action='overzicht_liedjes.php'>
                            <td><input type='hidden' value='$playlistId' name='playlistid' ></td>
                            <td><input type='submit' value='playlist bekijken' class='btn btn-primary'></td>
                            </form>
                            </tr>";


            }
            echo "<h2>Playlist</h2>
            <form action='toevoegen_playlist_form.php'>
            <button class='btn btn-primary'>Playlist toevoegen</a>";

            echo "</form></table>";
            ?>

        </div>
    </div>
</div>
<div class="footer navbar-fixed-bottom">
    <?php
    include '../include/footer.php';
    ?>
</div>
</body>



