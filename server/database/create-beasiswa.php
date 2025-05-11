<?php 

include 'config.php';

$koneksi = mysqli_connect($server, $username, $password, $database); 
  
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo  "Connected Succesfully";

  $id_beasiswa = $_POST['id_beasiswa'];
  $nama_beasiswa = $_POST['name_beasiswa'];
  $deskripsi_beasiswa = $_POST['deskripsi_beasiswa'];
  $tanggal_ditutup_beasiswa = $_POST['tanggal_ditutup_beasiswa'];

  $sql = "INSERT INTO beasiswa (id_beasiswa, nama_beasiswa, deskripsi_beasiswa, tanggal_ditutup_beasiswa) VALUES ('$id_beasiswa', '$nama_beasiswa', '$deskripsi_beasiswa', '$tanggal_ditutup_beasiswa')";
  if (mysqli_query($koneksi, $sql)) {
      echo "New beasiswa created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
}