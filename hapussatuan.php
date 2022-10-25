<?php 
	include 'koneksi.php';

	$namapelanggan = $_GET['namapelanggan'];

	$query = mysqli_query($sambungan, "DELETE FROM ordersatuan WHERE namapelanggan='$namapelanggan'");

	if($query){
		header("location:outputadmin.php");
	}
	else{
		echo "Data gagal dihapus";
	}
?>