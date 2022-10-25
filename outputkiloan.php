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
              <a class="nav-link" href="#beranda" >Order Kiloan <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="orderdong.php">Kembali</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
      <!--AKhir dari Navbar -->  
<section class="outputkiloan" id="outputkiloan">
    <br><br><br>
    <div class="container">
   <div class="konten2">
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
                      <a href=editorderkiloan.php?namapelanggan=<?php echo $data['namapelanggan'];?>>Edit</a>
                    </td>
				</tr>
				<?php
					}
				?>
            </table>
            
   </div>
        
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