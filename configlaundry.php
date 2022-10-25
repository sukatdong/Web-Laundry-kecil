
<?php
session_start();
include 'koneksi.php';
$usernamepelanggan = $_SESSION['usernamepelanggan'];
if (isset($_POST["logout"])) {
    session_start();
    session_unset();
    session_destroy();
    header("location: index.php?pesan=logout");
}
?>

