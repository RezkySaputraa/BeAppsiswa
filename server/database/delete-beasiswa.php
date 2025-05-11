<?php
include "config.php";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo "Connected Successfully";
  
  $id_beasiswa =  $_POST['id_beasiswa'];
  $sql = "DELETE FROM beasiswa WHERE id_beasiswa='$id_beasiswa'";

  if (mysqli_query($koneksi, $sql)) {
    echo "Beasiswa deleted successfully";
  } else {
    echo "Error deleting user: " . mysqli_error($koneksi);
  }
}
