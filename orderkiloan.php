<?php
        include "koneksi.php";
        $namapelanggan    = $_POST['namapelanggan'];
        $cucisetrika      = $_POST['cucisetrika'];
        $cucikering       = $_POST['cucikering'];
        $cucikilat        = $_POST['cucikilat'];
        $gordyyn          = $_POST['gordyyn'];
        $selimut          = $_POST['selimut'];
        $cucipetir        = $_POST['cucipetir'];
        $bedcover         = $_POST['bedcover'];
        $setrikasaja      = $_POST['setrikasaja'];
     
    
        $query=mysqli_query($sambungan, "INSERT INTO orderkiloan VALUES ('$namapelanggan','$cucisetrika ','$cucikering','$cucikilat',
        '$gordyyn','$selimut','$cucipetir','$bedcover','$setrikasaja')")or die(mysqli_error($sambungan));
    
        if($query){
            header("location:outputkiloan.php");        }
        else{
            echo "Buat akun gagal!";
        }
    
    ?>