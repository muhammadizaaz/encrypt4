<?php
include_once('link.php');
include_once('koneksi.php');
session_start();
$nama = $_SESSION['name'];
$fullname = $_SESSION['fullname'];
$birthday = $_SESSION['birthday'];
$major = $_SESSION['major'];
$nim = $_SESSION['nim'];
$hobby = $_SESSION['hobi'];
$city = $_SESSION['address'];

?>

<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="homepage.php" class="navbar-brand">KELOMPOK 3</a>
		</div>
		<div class="dropdown navbar-right" id="right">
 			 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php print "$nama";?>
  				<span class="caret"></span>
  			</button>
 			<ul class="dropdown-menu">
  				<li><a href="data.php">Biodata</a></li>
    		<li><a href="logout.php">Logout</a></li>
  			</ul>
		</div>
	</div>
</nav>

</html>