<?php
include "config.php";

$koneksi = mysqli_connect($server, $username, $password, $database);
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo  "Connected Succesfully";

  $username = $_SESSION['username'];
  $name = $_POST['name'];
  $password = $_POST['password'];

  $sql = "UPDATE users SET name='$name', password='$password' WHERE username='$username'";
  $hasil = mysqli_query($koneksi, $sql);
}
