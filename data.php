<?php
include_once('header1.php');
include_once('link.php');
include_once('footer.php');
?>

<!DOCTYPE html>
<html>
<head>
<style>
    div {
        text-align: justify;
        text-justify: inter-word;
    }
    h4 {
        margin: 35px;
        line-height: 200%;
    }
    a.ex1{
        margin: 35px;
        line-height: 200%;
    }
</style>

</head>
<body>
    <div class="jumbotron">
        <center>
            <h2>Biodata, <?php print"$nama"?></h2>
        </center>
    </div>
    <div>
        <h4>
        Nama lengkap    :<?php print"$fullname"?><br>
        Tanggal Lahir   :<?php print"$birthday"?><br>
        Fakultas        :<?php print"$major"?><br>
        NIM             :<?php print"$nim"?><br>
        Hobi            :<?php print"$hobby"?><br>
        Asal Daerah     :<?php print"$city"?><br>
        </h4>
    <a  href="edit-data.php" class="ex1 btn btn-primary">Edit Datamu</a>
</body>
</html>