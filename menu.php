<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Arahkan kembali ke login jika belum login
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container text-center my-5">
        <h1 class="mb-4">Selamat Datang, <?php echo $username; ?>!</h1>
        <p>Ini adalah halaman menu utama. Silakan pilih opsi di bawah:</p>
        <a href="#" class="btn btn-primary">Opsi 1</a>
        <a href="#" class="btn btn-secondary">Opsi 2</a>
        <a href="logout.php" class="btn btn-danger">Keluar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
