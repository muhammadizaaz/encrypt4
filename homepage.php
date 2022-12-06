<?php
include_once("link.php");
include_once("header1.php");
include_once('footer.php');
?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 100px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.button {
  background-color: #337ab7;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {width: 250px;}
</style>

</head>
<body>
    <div class="jumbotron">
        <center>
            <h1>Tugas Encrypt</h1>
            <p>Cerita Liburan</p>
        </center>
    </div>
    <div class="row">
        <div class="column">
            <center><h1><a href="cerita-izaaz.php" class="button button1">Izaaz</a></h1></center>
        </div>
        <div class="column">
            <center><h1><a href="cerita-aghna.php" class="button button1">Aghna</a></h1></center>
        </div>
        <div class="column">
            <center> <h1><a href="cerita-auvin.php" class="button button1">Auvin</a></h1></center>
        </div>
    </div>
</body>
</html>