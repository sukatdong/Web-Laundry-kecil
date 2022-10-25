<?php
        include "koneksi.php";
        $namapelanggan         =$_POST['namapelanggan'];
        $cucisetrika20kg      = $_POST['cucisetrika20kg'];
        $bedcover20kg      = $_POST['bedcover20kg'];
        $setrika45kg       = $_POST['setrika45kg'];
        $setrika25kg        = $_POST['setrika25kg'];
        $setrika10kg        = $_POST['setrika10kg'];
        $setrika65kg       = $_POST['setrika65kg'];
        $bedcover10kg       = $_POST['bedcover10kg'];
        $cucisetrika30kg      = $_POST['cucisetrika30kg'];
     
    
        $query=mysqli_query($sambungan, "INSERT INTO orderpaketan VALUES ('$namapelanggan','$cucisetrika20kg ','$bedcover20kg','$setrika45kg',
        '$setrika25kg','$setrika10kg','$setrika65kg','$bedcover10kg','$cucisetrika30kg')")or die(mysqli_error($sambungan));
    
        if($query){
            header("location:outputpaketan.php");
        }
        else{
            echo "Buat akun gagal!";
        }
    
    ?>