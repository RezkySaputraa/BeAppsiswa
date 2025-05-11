<?php 

include 'config.php';

$koneksi = mysqli_connect($server, $username, $password, $database); 
  
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo  "Connected Succesfully";

  $username = $_POST['username'];
  $name     = $_POST['name'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (username, name, password) VALUES ('$username', '$name', '$password')";
  if (mysqli_query($koneksi, $sql)) {
      echo "New users created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
}