<?php
include "config.php";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo "Connected Successfully";

  // Ambil username dari form POST
  $username =  $_POST['username'];

  $sql = "DELETE FROM users WHERE username='$username'";

  if (mysqli_query($koneksi, $sql)) {
    echo "User deleted successfully";
  } else {
    echo "Error deleting user: " . mysqli_error($koneksi);
  }
}
