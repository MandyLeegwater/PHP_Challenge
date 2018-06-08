<?php
include '../db_connect.php';
require '../include/header.php';
?>
<body>
<?php require '../include/nav.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>playlist toevoegen</h1>
            <form action="../controller/playlist_toevoegen.php">
                <label for="naam">Naam</label><br>
                <input type="text" name="naam" id="naam" required/><br><br>
                <label for="plaatje">url naar plaatje</label><br>
                <input type="text" name="plaatje" id="plaatje" required/><br><br>
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