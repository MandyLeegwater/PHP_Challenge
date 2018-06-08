<?php
session_start();
include '../db_connect.php';
require '../include/header.php';
$playlistID = $_GET['playlistid']
?>
<body>
<?php require '../include/nav.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>Songs toevoegen</h1>
            <form action="../controller/song_toevoegen.php" method="get">
                <label for="youtubeid">youtubeID</label><br>
                <input type="text" name="youtubeid" id="youtubeid" required/><br><br>
                <label for="artiest">artiest</label><br>
                <input type="text" name="artiest" id="artiest" required/><br><br>
                <label for="uploaded">uploaded by</label><br>
                <input type="text" name="uploaded" id="uploaded" required/><br><br>
                <?php
                echo "<input type='hidden' name='playlistid' id='playlistid' value='$playlistID' required/> ";

                ?>
                <br><br>
                <input type="submit" value="versturen" name="submit" />
            </form>
        </div>
    </div>
</div>
<div class="footer navbar-fixed-bottom">
    <?php
    include '../include/footer.php';
    ?>
</div>
</body>
</html>