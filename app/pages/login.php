<?php
session_start();

if (isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $serverdb = "localhost";
  $usernamedb = "root";
  $passworddb = "";
  $databasedb = "crud_uts";


  $username = $_POST['username'];
  $password = $_POST['password'];

  $koneksi = mysqli_connect($serverdb, $usernamedb, $passworddb, $databasedb);
  if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    echo  "Connected Succesfully";
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $hasil = mysqli_query($koneksi, $sql);
  }

  if (mysqli_num_rows($hasil) > 0) {
    $_SESSION['username'] = $username;
    header("Location: index.php");
    exit;
  } else {
    $error = "Username atau password salah!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="UTF-8">
  <title>Login - BeAppsiswa</title>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
  </style>
</head>

<body>
  <div class="login-box">
    <div class="text-center mb-4">
      <img src="../assets/images/images.png" alt="Logo" style="max-width: 60px;">
      <h4 class="mt-2">BeAppsiswa</h4>
    </div>
    <?php if (isset($error)) : ?>
      <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required autofocus>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>