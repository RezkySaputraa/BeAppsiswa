<?php
include "config.php";

$koneksi = mysqli_connect($server, $username, $password, $database);
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
} else {

  echo  "Connected Succesfully";
  $sql = "SELECT * FROM beasiswa";
  $hasil = mysqli_query($koneksi, $sql);
  
}
