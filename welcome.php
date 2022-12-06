<?php
include_once('header1.php');
include_once('link.php');
include_once('footer.php');
header("refresh:2; url=homepage.php");
?>

<!DOCTYPE html>
<html>
<body>
    <div class="jumbotron">
        <center>
            <h2>Selamat datang,<?php print "$nama"; ?></h2>
        </center>
    </div>
</body>
</html>