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
              <a class="nav-link" href="#beranda" >Edit Order Kiloan <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="orderdong.php">Kembali</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
      <!--AKhir dari Navbar -->  
<section class="editorderkiloan" id="editorderkiloan">
    <br><br><br>
    <div class="container">
   <div class="konten2">
            <h1 class=" alert alert-info font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">Order Kiloan</h1>
            <br><br>

            <?php
            include 'koneksi.php';
			$namapelanggan=$_GET['namapelanggan'];
            $query = mysqli_query($sambungan, "SELECT * FROM orderkiloan WHERE namapelanggan='$namapelanggan'");
            while($hasil = mysqli_fetch_array($query)){
            ?>

            <form method="POST" action="proseseditkiloan.php">
				<table>
					<tr>
						<div class="mb-3">
							<td><label for="exampleFormControlInput1" class="form-label">Nama Pelanggan</label></td>
						  <td colspan="2"><input class="form-control" style="width:75%; margin-right:25% " type="text" name="namapelanggan" value="<?php echo $hasil['namapelanggan'];?>" aria-label="readonly input example" readonly>
						</div>
					</tr>
         			 <tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">C.Setrika</label></td>
						  <td colspan="2"><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="cucisetrika" value="<?php echo $hasil['cucisetrika'];?>"></td>
						</div>
					</tr>
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">C.Kering</label></td>
						  <td colspan="2"><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="cucikering" value="<?php echo $hasil['cucikering'];?>"></td>
						</div>
					</tr>
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">C.Kilat</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%"id="exampleFormControlInput1" name="cucikilat" value="<?php echo $hasil['cucikilat'];?>"></td>
						</div>
					</tr>
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">Gordyyn</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="gordyyn" value="<?php echo $hasil['gordyyn'];?>"></td>
						</div>
					</tr>
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">Selimut</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="selimut" value="<?php echo $hasil['selimut'];?>"></td>
						</div>
					</tr>
                    <tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">C.Petir</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="cucipetir" value="<?php echo $hasil['cucipetir'];?>"></td>
						</div>
					</tr>
                    <tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">B.Cover</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="bedcover" value="<?php echo $hasil['bedcover'];?>"></td>
						</div>
					</tr>
                    <tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label">Setrika Saja</label></td>
						  <td><input type="text" class="form-control" style="width:75%; margin-right:25%" id="exampleFormControlInput1" name="setrikasaja" value="<?php echo $hasil['setrikasaja'];?>"></td>
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