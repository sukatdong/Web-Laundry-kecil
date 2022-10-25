<?php
session_start();
include "adminconfiglaundry.php";

$usernameadmin = $_POST['usernameadmin'];
$passwordadmin = $_POST['passwordadmin'];

$query = mysqli_query($sambungan, "SELECT * FROM loginadmin WHERE usernameadmin = '$usernameadmin'&& passwordadmin = '$passwordadmin'") or die (mysqli_error($sambungan));
$cek = mysqli_num_rows($query);

if($cek > 0){
    $_SESSION['usernameadmin'] = $usernameadmin;
    $_SESSION['passwordadmin'] = $passwordadmin;
    header("location:outputadmin.php");
}
else{
    header("location:adminindex.php?pesan=gagal");
}
?>