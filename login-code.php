<?php
session_start();
include 'koneksi.php';
$nama = $password = $pwd = '';

$nama = $_POST['name'];
$pwd = $_POST['password'];
$password = md5($pwd);

$sql = "SELECT * FROM user WHERE name = '$nama' AND password = '$password'";
$result = mysqli_query($kon, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["ID"];
        $nama = $row["name"];
        $fullname = $row["fullname"];
        $birthday = $row["birthday"];
        $major = $row["major"];
        $nim = $row["nim"];
        $hobby = $row["hobi"];
        $city = $row["address"];
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $nama;
        $_SESSION['fullname'] = $fullname;
        $_SESSION['birthday'] = $birthday;
        $_SESSION['major'] = $major;
        $_SESSION['nim'] = $nim; 
        $_SESSION['hobi'] = $hobby; 
        $_SESSION['address'] = $city;
    }
    header("Location: welcome.php");
} else {
    header("location: invalid.php");
}

?>