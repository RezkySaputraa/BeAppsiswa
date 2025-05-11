<?php
include "config.php";

$koneksi = mysqli_connect($server, $username, $password, $database);
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo  "Connected Succesfully";
  
  // $id_beasiswa = $_SESSION['username'];
  // $nama_beasiswa = $_POST['name'];
  // $deskripsi_beasiswa = $_POST['password'];
  // $tanggal_ditutup_beasiswa = $_POST['password'];


  // $sql = "UPDATE users SET name='$name', password='$password' WHERE username='$username'";
  $hasil = mysqli_query($koneksi, $sql);
}
