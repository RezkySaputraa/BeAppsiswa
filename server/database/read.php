<?php
include "config.php";

$koneksi = mysqli_connect($server, $username, $password, $database);
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo  "Connected Succesfully";
  $sql = "SELECT * FROM users";
  $hasil = mysqli_query($koneksi, $sql);
  echo "<table border='1'>
  <tr>
  <th>Username</th>
  <th>Name</th>
  <th>Password</th>
  </tr>";
  while ($row = mysqli_fetch_array($hasil)) {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
}
