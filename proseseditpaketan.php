<?php
        include "koneksi.php";
        $namapelanggan        = $_POST['namapelanggan'];
        $cucisetrika20kg      = $_POST['cucisetrika20kg'];
        $bedcover20kg         = $_POST['bedcover20kg'];
        $setrika45kg          = $_POST['setrika45kg'];
        $setrika25kg          = $_POST['setrika25kg'];
        $setrika10kg          = $_POST['setrika10kg'];
        $setrika65kg          = $_POST['setrika65kg'];
        $bedcover10kg         = $_POST['bedcover10kg'];
        $cucisetrika30kg      = $_POST['cucisetrika30kg'];
     
    
        $query=mysqli_query($sambungan, "UPDATE orderpaketan SET cucisetrika20kg='$cucisetrika20kg',bedcover20kg='$bedcover20kg',setrika45kg='$setrika45kg',
        setrika25kg='$setrika25kg',setrika10kg='$setrika10kg',setrika65kg='$setrika65kg',bedcover10kg='$bedcover10kg',cucisetrika30kg='$cucisetrika30kg' WHERE namapelanggan='$namapelanggan'");
    
        if($query){
           header("location:outputpaketan.php");
        }
        else{
            echo "Data Gagal";
        }
    
    ?>