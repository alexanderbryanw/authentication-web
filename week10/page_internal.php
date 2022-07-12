<?php
session_start();
if(!isset($_SESSION['user_id'])){
    // user belum login
    // header('Location: login.php');
}
?>

<h1>Page Internal</h1>
<h2>Halaman ini dapat diakses oleh user yang sudah login, yaitu dosen dan mahasiswa</h2>

<!-- Link ini hanya muncul jika yang login adalah dosen -->
<?php if($_SESSION['role'] == "dosen"): ?>
<a href="page_dosen.php">Page Dosen</a> |
<?php endif; ?>

<!-- Link ini hanya muncul jika yang login adalah mahasiswa -->
<?php if($_SESSION['role'] == "mahasiswa"): ?>
<a href="page_mahasiswa.php">Page Mahasiswa</a> |
<?php endif; ?>

<a href="logout.php">Logout</a>