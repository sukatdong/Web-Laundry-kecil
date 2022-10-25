<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
  <!------------------------------------------------------------------------------------------------------------------------------->
    <!--Navbar pada Beranda-->
    <title>Edit Order</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" id="mainNav">
        <div class="container">
        <a class="navbar-brand" href="#beranda"><strong>LAUNDRY SIAPA</strong></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#beranda" >Edit Order Satuan <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="outputadmin.php">Kembali</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
      <!--AKhir dari Navbar -->  
<section class="admineditsatuan" id="admineditsatuan">
    <br><br><br>
    <div class="container">
   <div class="konten2">
            <h1 class=" alert alert-info font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">Order Satuan</h1>
            <br><br>

            <?php
            include 'koneksi.php';
			$namapelanggan=$_GET['namapelanggan'];
            $query = mysqli_query($sambungan, "SELECT * FROM ordersatuan WHERE namapelanggan='$namapelanggan'");
            while($hasil = mysqli_fetch_array($query)){
            ?>

            <form method="POST" action="adminproseseditsatuan.php">
				<table>
					<tr>
						<div class="mb-3">
							<td><label for="exampleFormControlInput1" class="form-label">Nama Pelanggan</label></td>
						  <td colspan="2"><input class="form-control" style="width:75%; margin-right:25% " type="text" name="namapelanggan" value="<?php echo $hasil['namapelanggan'];?>" aria-label="readonly input example" readonly>
						</div>
					</tr>
         			 <tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">Celana Panjang</label></td>
						  <td colspan="2"><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="celanapanjang" value="<?php echo $hasil['celanapanjang'];?>"></td>
						</div>
					</tr>
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">Celana Pendek</label></td>
						  <td colspan="2"><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="celanapendek" value="<?php echo $hasil['celanapendek'];?>"></td>
						</div>
					</tr>
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">Jeans Panjang</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%"id="exampleFormControlInput1" name="jeanspanjang" value="<?php echo $hasil['jeanspanjang'];?>"></td>
						</div>
					</tr>
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">Skirt Blouse</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="skirtblouse" value="<?php echo $hasil['skirtblouse'];?>"></td>
						</div>
					</tr>
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">Jeans Pendek</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="jeanspendek" value="<?php echo $hasil['jeanspendek'];?>"></td>
						</div>
					</tr>
                    <tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">Kemeja Pendek</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="kemejapendek" value="<?php echo $hasil['kemejapendek'];?>"></td>
						</div>
					</tr>
                    <tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">Kemeja Panjang</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="kemejapanjang" value="<?php echo $hasil['kemejapanjang'];?>"></td>
						</div>
					</tr>
                    <tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">Jaket non Kulit</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="jaketnonkulit" value="<?php echo $hasil['jaketnonkulit'];?>"></td>
						</div>
					</tr>
				</table>
				<br>
				<button type="submit" class="btn btn-outline-primary">Submit</button>
			</form>
				<?php
					}
				?>
            
   </div>
        
        </div>

</section><br><br>
      <!------------------------------------------------------------------------------------------------------------------------------->

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>