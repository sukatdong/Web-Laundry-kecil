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
    <title>Lihat Order</title>
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
              <a class="nav-link" href="#" >Order Satuan <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#outputkiloan">Order Kiloan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#outputpaketan">Order Paketan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="beranda1.html">Logout</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
      <!--AKhir dari Navbar -->  
<section class="outputsatuan" id="outputsatuan">
    <br><br><br>
   <div class="konten2" style="width:85%; margin-left:7%"	>
   <div class="form-group">
            <h1 class=" alert alert-info font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">Order Satuan</h1>
            <br><br>
            <table>
                <tr>
                    <td>Nama Anda</td>
                    <td>C.Panjang</td>
                    <td>C.Pendek</td>
                    <td>J.Panjang</td>
                    <td>S.Blouse</td>
                    <td>J.Pendek</td>
                    <td>K.Pendek</td>
                    <td>K.Panjang</td>
                    <td>J.Non-kulit</td>
                </tr>
                <?php
					include "koneksi.php";
					$query = mysqli_query($sambungan, "SELECT * FROM ordersatuan");
					while($data=mysqli_fetch_array($query)){
				?>
				<tr>
                    <td><?php echo $data['namapelanggan'];    ?></td>
                    <td><?php echo $data['celanapanjang'];    ?></td>
                    <td><?php echo $data['celanapendek'];     ?></td>
                    <td><?php echo $data['jeanspanjang'];     ?></td>
                    <td><?php echo $data['skirtblouse'];      ?></td>
                    <td><?php echo $data['jeanspendek'];      ?></td>
                    <td><?php echo $data['kemejapendek'];     ?></td>
                    <td><?php echo $data['kemejapanjang'];    ?></td>
                    <td><?php echo $data['jaketnonkulit'];    ?></td>
                    <td> 
                      <a href=admineditsatuan.php?namapelanggan=<?php echo $data['namapelanggan'];?>>Edit</a>
                      <a href=hapussatuan.php?namapelanggan=<?php echo $data['namapelanggan'];?>>Hapus</a>
                    </td>
				</tr>
				<?php
					}
				?>
            </table>
            
   </div>
        
        </div>
</section><br><br>
<!--Akhir output satuan----------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------------------------------------->
      
      <!---Awal Output kiloan---------------------------------------------------------------------------------------------------------------------------->
      <section class="outputkiloan" id="outputkiloan">
    <br><br><br>
   <div class="konten2" style="width:85%; margin-left:7%">
   <div class="form-group">
            <h1 class=" alert alert-info font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">Order Kiloan</h1>
            <br><br>
            <table>
                <tr>
                    <td>Nama Anda</td>
                    <td>C.Setrika</td>
                    <td>C.Kering</td>
                    <td>C.Kilat</td>
                    <td>Gordyyn</td>
                    <td>Selimut</td>
                    <td>C.Petir</td>
                    <td>B.Cover</td>
                    <td>Setrika Saja</td>
                </tr>
                <?php
					include "koneksi.php";
					$query = mysqli_query($sambungan, "SELECT * FROM orderkiloan");
					while($data=mysqli_fetch_array($query)){
				?>
				<tr>
                    <td><?php echo $data['namapelanggan'];   ?></td>
                    <td><?php echo $data['cucisetrika'];    ?></td>
                    <td><?php echo $data['cucikering'];     ?></td>
                    <td><?php echo $data['cucikilat'];      ?></td>
                    <td><?php echo $data['gordyyn'];        ?></td>
                    <td><?php echo $data['selimut'];        ?></td>
                    <td><?php echo $data['cucipetir'];      ?></td>
                    <td><?php echo $data['bedcover'];       ?></td>
                    <td><?php echo $data['setrikasaja'];    ?></td>
                    <td> 
                      <a href=admineditkiloan.php?namapelanggan=<?php echo $data['namapelanggan'];?>>Edit</a>
                      <a href=hapuskiloan.php?namapelanggan=<?php echo $data['namapelanggan'];?>>Hapus</a>
                    </td>
				</tr>
				<?php
					}
				?>
            </table>
            
   </div>
        
        </div>
</section><br><br>
      <!---Akhir Output Kiloan---------------------------------------------------------------------------------------------------------------------------->

      <!------------------------------------------------------------------------------------------------------------------------------->

      <!----Awal Output Paketan--------------------------------------------------------------------------------------------------------------------------->

    <section class="outputpaketan" id="outputpaketan">
    <br><br><br>
   <div class="konten2" style="width:85%; margin-left:7%">
   <div class="form-group">
            <h1 class=" alert alert-info font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">Order Paketan</h1>
            <br><br>
            <table>
                <tr>
                    <td>C.Setrika *20</td>
                    <td>Bed Cover *20</td>
                    <td>Setrika *45</td>
                    <td>Setrika *25</td>
                    <td>Setrika *10</td>
                    <td>Setrika *65</td>
                    <td>Bed Cover *10</td>
                    <td>C.Setrika *30</td>
                </tr>
                <?php
					include "koneksi.php";
					$query = mysqli_query($sambungan, "SELECT * FROM orderpaketan");
					while($data=mysqli_fetch_array($query)){
				?>
				<tr>
                    <td><?php echo $data['cucisetrika20kg'];    ?></td>
                    <td><?php echo $data['bedcover20kg'];     ?></td>
                    <td><?php echo $data['setrika45kg'];      ?></td>
                    <td><?php echo $data['setrika25kg'];        ?></td>
                    <td><?php echo $data['setrika10kg'];        ?></td>
                    <td><?php echo $data['setrika65kg'];      ?></td>
                    <td><?php echo $data['bedcover10kg'];       ?></td>
                    <td><?php echo $data['cucisetrika30kg'];    ?></td>
                    <td> 
                      <a href=admineditpaketan.php?namapelanggan=<?php echo $data['namapelanggan'];?>>Edit</a>
                      <a href=hapuspaketan.php?namapelanggan=<?php echo $data['namapelanggan'];?>>Hapus</a>
                    </td>
				</tr>
				<?php
					}
				?>
            </table>
            
        </div>
   </div>
        
</section><br><br>
      <!------------------------------------------------------------------------------------------------------------------------------->

        <!----Akhir Output Paketan--------------------------------------------------------------------------------------------------------------------------->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>