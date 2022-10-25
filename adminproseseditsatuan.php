<?php
        include "koneksi.php";
        $namapelanggan      = $_POST['namapelanggan'];
        $celanapanjang      = $_POST['celanapanjang'];
        $celanapendek       = $_POST['celanapendek'];
        $jeanspanjang       = $_POST['jeanspanjang'];
        $skirtblouse        = $_POST['skirtblouse'];
        $jeanspendek        = $_POST['jeanspendek'];
        $kemejapendek       = $_POST['kemejapendek'];
        $kemejapanjang      = $_POST['kemejapanjang'];
        $jaketnonkulit      = $_POST['jaketnonkulit'];
     
    
        $query=mysqli_query($sambungan, "UPDATE ordersatuan SET celanapanjang='$celanapanjang',celanapendek='$celanapendek',jeanspanjang='$jeanspanjang',
        skirtblouse='$skirtblouse',jeanspendek='$jeanspendek',kemejapendek='$kemejapendek',kemejapanjang='$kemejapanjang',jaketnonkulit='$jaketnonkulit' WHERE namapelanggan='$namapelanggan'");
    
        if($query){
           header("location:outputadmin.php");
        }
        else{
            echo "Data Gagal";
        }
    
    ?>