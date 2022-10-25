<?php
session_start();
include "configlaundry.php";

$usernamepelanggan = $_POST['usernamepelanggan'];
$passwordpelanggan = $_POST['passwordpelanggan'];

$query = mysqli_query($sambungan, "SELECT * FROM loginpelanggan WHERE usernamepelanggan = '$usernamepelanggan'&& passwordpelanggan = '$passwordpelanggan'") or die (mysqli_error($sambungan));
$cek = mysqli_num_rows($query);

if($cek > 0){
    $_SESSION['usernamepelanggan'] = $usernamepelanggan;
    $_SESSION['passwordpelanggan'] = $passwordpelanggan;
    header("location:orderdong.php");
}
else{
    header("location:index.php?pesan=gagal");
}
?>