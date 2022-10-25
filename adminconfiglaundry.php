
<?php
session_start();
include 'koneksi.php';
$usernameadmin = $_SESSION['usernameadmin'];
if (isset($_POST["logout"])) {
    session_start();
    session_unset();
    session_destroy();
    header("location: adminindex.php?pesan=logout");
}
?>
