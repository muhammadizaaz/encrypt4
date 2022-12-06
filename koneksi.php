<?php
$kon = mysqli_connect("localhost", "root", "", "mydatabase");

if(!$kon) {
    print "Database connection failed";
}
?>