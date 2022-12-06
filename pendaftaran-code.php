<?php
require_once "koneksi.php";
$nama = $password = $fullname = $birthday = $fullname = $nim = $hobby = $city = $pass = '';

$nama = $_POST['name'];
$pass = $_POST['password'];
$fullname = $_POST['fullname'];
$birthday = $_POST['birthday'];
$major = $_POST['major'];
$nim = $_POST['nim'];
$hobby = $_POST['hobi'];
$city = $_POST['address'];
$password = md5($pass);

$sql = "INSERT INTO `user`(`name`, `password`, `fullname`, `birthday`, `major`, `nim`, `hobi`, `address`) VALUES ('$nama','$password','$fullname','$birthday','$major','$nim','$hobby','$city')";
$result = mysqli_query($kon, $sql);
if($result) {
    header("location: login.php");
} else {
    print "Username atau NIM sudah digunakan";
    header("refresh:3; url=pendaftaran.php");
}
?>