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
     
    
        $query=mysqli_query($sambungan, "UPDATE orderkiloan SET cucisetrika='$cucisetrika',cucikering='$cucikering',cucikilat='$cucikilat',
        gordyyn='$gordyyn',selimut='$selimut',cucipetir='$cucipetir',bedcover='$bedcover',setrikasaja='$setrikasaja' WHERE namapelanggan='$namapelanggan'");
    
        if($query){
           header("location:outputkiloan.php");
        }
        else{
            echo "Data Gagal";
        }
    
    ?>