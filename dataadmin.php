<?php
        include "koneksi.php";
        $namaadmin                 = $_POST['namaadmin'];
        $tempattanggallahiradmin   = $_POST['tempattanggallahiradmin'];
        $alamatadmin               = $_POST['alamatadmin'];
        $jeniskelaminadmin         = $_POST['jeniskelaminadmin'];
        $usernameadmin             = $_POST['usernameadmin'];
        $passwordadmin             = $_POST['passwordadmin'];
     
    
        $query=mysqli_query($sambungan, "INSERT INTO loginadmin VALUES ('','$namaadmin','$tempattanggallahiradmin','$alamatadmin',
        '$jeniskelaminadmin','$usernameadmin','$passwordadmin')")or die(mysqli_error($sambungan));
    
        if($query){
            header("location:adminindex.php");
        }
        else{
            echo "Buat akun gagal!";
        }
    
    ?>