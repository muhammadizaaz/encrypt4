<?php
require_once "koneksi.php";
$nl = $tl = $fp = $nim = $hobi = $ad = $cl = '';

$fullname = $_POST['fullname'];
$birthday = $_POST['birthday'];
$major = $_POST['major'];
$nim = $_POST['nim'];
$hobby = $_POST['hobi'];
$city = $_POST['address'];

$sql = "UPDATE user SET `fullname`=('$fullname'),`birthday`=('$birthday'),`major`=('$major'),`nim`=('$nim'),`hobi`=('$hobby'),`address`=('$city') WHERE 1";
$result = mysqli_query($kon, $sql);
if($result) {
    header("location: data.php");
} else {
    print "Data gagal disimpan!!!";
    header("location: data.php");
    die();
}
?>