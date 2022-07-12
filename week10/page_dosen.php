<?php
session_start();
if(!isset($_SESSION['user_id'])){
    // user belum login
    // header('Location: login.php');
}
?>

<?php if($_SESSION['role'] == "dosen"): ?>
    <h1>Page Dosen</h1>
    <h2>Halaman ini hanya dapat diakses oleh dosen.</h2>
<?php endif; ?>
