<?php
        include "koneksi.php";
        $namapelanggan                 = $_POST['namapelanggan'];
        $tempattanggallahirpelanggan   = $_POST['tempattanggallahirpelanggan'];
        $alamatpelanggan               = $_POST['alamatpelanggan'];
        $jeniskelaminpelanggan         = $_POST['jeniskelaminpelanggan'];
        $usernamepelanggan             = $_POST['usernamepelanggan'];
        $passwordpelanggan             = $_POST['passwordpelanggan'];
     
    
        $query=mysqli_query($sambungan, "INSERT INTO loginpelanggan VALUES ('','$namapelanggan','$tempattanggallahirpelanggan','$alamatpelanggan',
        '$jeniskelaminpelanggan','$usernamepelanggan','$passwordpelanggan')")or die(mysqli_error($sambungan));
    
        if($query){
           header("location:index.php");
        }
        else{
            echo "Buat akun gagal!";
        }
    
    ?>