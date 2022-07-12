<?php
session_start();
if(!isset($_SESSION['user_id'])){
    // user belum login
    // header('Location: login.php');
}
?>

<?php if($_SESSION['role'] == "mahasiswa"): ?>
    <h1>Page Mahasiswa</h1>
    <h2>Halaman ini hanya dapat diakses oleh mahasiswa.</h2>
<?php endif; ?>