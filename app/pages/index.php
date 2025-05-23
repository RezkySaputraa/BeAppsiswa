<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>BeAppsiswa</title>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="icon" type="image/png" href="../assets/images/images.png">
  <style>
    body {
      min-height: 100vh;
      margin: 0;
      overflow-x: hidden;
      background-color: #f8f9fa;
    }

    .sidebar {
      width: 220px;
      min-height: 100vh;
      background-color: #212529;
      padding: 20px;
    }

    .sidebar .nav-link {
      color: #adb5bd;
      padding: 10px;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
      background-color: #495057;
      color: #fff;
      border-radius: 5px;
    }

    .topbar {
      background-color: #ffffff;
      color: #000;
      padding: 15px 25px;
      border-bottom: 1px solid #dee2e6;
    }

    .content-area {
      padding: 20px 25px;
    }

    .table-wrapper {
      background: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .table {
      border-collapse: collapse;
    }

    .table td,
    .table th {
      border-left: none;
      border-right: none;
      padding-top: 0.4rem;
      padding-bottom: 0.4rem;
    }

    .table thead th {
      vertical-align: middle;
    }

    .table tbody tr:hover {
      background-color: #f1f3f5;
      transition: background-color 0.2s ease-in-out;
    }

    .search-box {
      max-width: 250px;
    }

    .pagination .page-item.active .page-link {
      background-color: #0d6efd;
      border-color: #0d6efd;
    }

    .btn-group .btn i {
      vertical-align: middle;
    }
  </style>
</head>

<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <nav class="sidebar d-flex flex-column">
      <div class="d-flex align-items-center mb-4">
        <i class="fas fa-graduation-cap text-white me-2 fs-4"></i>
        <h4 class="text-white fw-bold mb-0">BeAppsiswa</h4>
      </div>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
        </li>
        <li>
          <a href="#" class="nav-link"><i class="fas fa-users me-2"></i> Users</a>
        </li>
        <li>
          <a href="#" class="nav-link"><i class="fas fa-file-alt me-2"></i> Reports</a>
        </li>
        <li>
          <a href="#" class="nav-link"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
        </li>
      </ul>
    </nav>

    <!-- Main content -->
    <div class="flex-grow-1">
      <!-- Topbar -->
      <div class="topbar d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3">
          <i class="fas fa-bars fs-4"></i>
          <h4 class="mb-0">BeAppsiswa</h4>
        </div>
        <div class="d-flex align-items-center gap-2">
          <img src="../assets/images/images.png" alt="../assets/images/images.png" style="max-width: 35px; max-height: 35px; border-radius: 100%;">
          <span><?= $_SESSION['username'] ?></span>
          <button onclick="location.href='confirm-logout.php'" class="btn btn-sm btn-outline-primary">Logout</button>
        </div>
      </div>

      <!-- Content -->
      <div class="content-area">
        <div class="table-wrapper">
          <!-- Header + Button -->
          <div class="d-flex justify-content-between align-items-center mb-2">
            <h3 class="mb-3"><span class="fas fa-user me-2"></span>Customer</h3>
            <button class="btn btn-primary"><span class="fas fa-plus me-1"></span>Add</button>
          </div>

          <!-- Search Bar -->
          <div class="mb-3 input-group">
            <input type="text" class="form-control form-control-sm search-box" placeholder="Search...">
            <button class="btn btn-outline-secondary fas fa-search"></button>
          </div>

          <!-- Table -->
          <div class="table-responsive">
            <table class="table table-bordered align-middle table-hover">
              <thead class="table-light">
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Pin Code</th>
                  <th>Country</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $server = "localhost";
                $username = "root";
                $password = "";
                $database = "crud_uts";

                $koneksi = mysqli_connect($server, $username, $password, $database);
                if (!$koneksi) {
                  die("Connection failed: " . mysqli_connect_error());
                } else {
                  echo "Connected Successfully";

                  $perPage = 10;
                  $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                  $start = ($page - 1) * $perPage;

                  $sql = "SELECT * FROM beasiswa LIMIT $start, $perPage";
                  $hasil = mysqli_query($koneksi, $sql);
                  $no = $start + 1;

                  while ($row = mysqli_fetch_assoc($hasil)) { ?>
                    <tr>
                      <?php
                      echo "<td>{$no}</td>";
                      echo "<td>{$row['nama_beasiswa']}</td>";
                      echo "<td>{$row['deskripsi_beasiswa']}</td>";

                      echo "<td>{$row['tanggal_ditutup_beasiswa']}</td>";
                      ?>
                      <td class='text-center'>
                        <button class='btn btn-sm btn-outline-success' title='View'><i class='fas fa-search'></i></button>
                        <button class='btn btn-sm btn-outline-primary' title='Edit'><i class='fas fa-pencil-alt'></i></button>
                        <button class='btn btn-sm btn-outline-danger' title='Delete'><i class='fas fa-trash'></i></button>
                      </td>
                    </tr>
                <?php
                    $no++;
                  }
                }
                ?>
              </tbody>
            </table>
          </div>

          <!-- Pagination Info -->
          <!-- <div class="d-flex justify-content-between mt-3">
            <span>Showing 10 out of <strong>25</strong> entries</span>
            <nav>
              <ul class="pagination pagination-sm mb-0">
                <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </nav>
          </div> -->

          <?php
          $totalData = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM beasiswa"));
          $totalPages = ceil($totalData / $perPage);
          $showing = min($perPage, $totalData - $start);
          ?>

          <!-- Pagination Info & Nav -->
          <div class="d-flex justify-content-between mt-3">
            <span>Showing <?php echo $showing; ?> of <strong><?php echo $totalData; ?></strong> entries</span>
            <nav>
              <ul class="pagination pagination-sm mb-0">
                <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                  <a class="page-link" href="?page=<?php echo max(1, $page - 1); ?>">«</a>
                </li>

                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                  <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                  </li>
                <?php endfor; ?>

                <li class="page-item <?php echo ($page >= $totalPages) ? 'disabled' : ''; ?>">
                  <a class="page-link" href="?page=<?php echo min($totalPages, $page + 1); ?>">»</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>