<?php
        include "koneksi.php";
        $namapelanggan      =$_POST['namapelanggan'];
        $celanapanjang      = $_POST['celanapanjang'];
        $celanapendek       = $_POST['celanapendek'];
        $jeanspanjang       = $_POST['jeanspanjang'];
        $skirtblouse        = $_POST['skirtblouse'];
        $jeanspendek        = $_POST['jeanspendek'];
        $kemejapendek       = $_POST['kemejapendek'];
        $kemejapanjang      = $_POST['kemejapanjang'];
        $jaketnonkulit      = $_POST['jaketnonkulit'];
     
    
        $query=mysqli_query($sambungan, "INSERT INTO ordersatuan VALUES ('$namapelanggan','$celanapanjang ','$celanapendek','$jeanspanjang',
        '$skirtblouse','$jeanspendek','$kemejapendek','$kemejapanjang','$jaketnonkulit')")or die(mysqli_error($sambungan));
    
        if($query){
            header("location:outputsatuan.php");
        }
        else{
            echo "Buat akun gagal!";
        }
    
    ?>