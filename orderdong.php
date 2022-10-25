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
              <a class="nav-link" href="#harga">Harga Laundry<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#satuan">Satuan</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#kiloan">Kiloan</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#paketan">Paketan</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lihat Order
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="outputsatuan.php">Order Satuan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="outputkiloan.php">Order Kiloan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="outputpaketan.php">Order Paketan</a>
              </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="beranda1.html">Logout</a>
              </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <section class="harga" id="harga">
        <div class="container">
          <br><br>
          <h1 style="text-align: center ; font-weight: bold; font-family: 'Courier New', Courier, monospace; margin-top: 25px;">Harga Laundry Siapa</h1>
          <hr style="border-color: #444343; width: 10cm; border-width: 3px; margin-top: 15px;"> <br>
      
                  <div class="row mx-auto">
                    <div class="col-md-4">
                      <div class="card " style="width: 18rem;">
                        <img class="card-img-top" src="../login/images/satuan.jpg" alt="OOPS">
                        <div class="card-body">
                          <h4 class="card-title font-weight-bold">Satuan</h4>
                          <p class="card-text">
                            celana panjang	5.000 <br>
                            Celana pendek	5.000 <br>
                            Jeans panjang	7.000 <br>
                            Skirt blouse	5.000 <br>
                            Jeans pendek    5.000 <br>
                            Kemeja Pendek 	6.000 <br>
                            Kemeja Panjang	8.000 <br>
                            Jaket non kulit	9.000 </p><br>
                          <a href="#satuan" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                    </div>
                  
                    <div class="col-md-4 text-align: right">
                      <div class="card ml-5 mr-5 "style="width: 18rem;">
                        <img class="card-img-top" src="../login/images/kilo.jpg" alt="OOPS" >
                        <div class="card-body">
                          <h4 class="card-title font-weight-bold">Kiloan</h4>
                          <p class="card-text">
                              Cuci Setrika	6.000 <br>
                            Cuci Kering  5.000  <br>
                            Cuci Kilat   7.000 <br>
                            Gordyyn	5.200/m <br>
                            Selimut	5.000/m <br>
                            Cuci Petir   8.000 <br>
                            Bed Cover	10.000 <br>
                            Setrika Saja	3.000 </p> <br>
                          <a href="#kiloan" class="btn btn-primary">Order</a>
                        </div>
                      </div>
                    </div>
                    
                  <div class="col-md-4 text-align: right">
                    <div class="card ml-5 mr-5 "style="width: 18rem;">
                      <img class="card-img-top" src="../login/images/paketan.jpg" alt="OOPS" >
                      <div class="card-body">
                        <h4 class="card-title font-weight-bold">Paketan</h4>
                        <p class="card-text">
                          Cuci Setrika 20 Kg	70.000 <br>
                          Bed Cover 20 Kg	110.000 <br>
                          Setrika 45 Kg	100.000 <br>
                          Setrika 25 Kg	70.000 <br>
                          Setrika 10 Kg	25.000 <br>
                          Setrika 65 Kg	120.000 <br>
                          Bed Cover 10 Kg	69.200 <br>
                          Cuci Setrika 30 Kg	90.000
                        </p><br>
                        <a href="#paketan" class="btn btn-primary">Order</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
       <br><br><br>
       <!--Akhir Harga--------------------------------------------------------------------->
      </section>
        <!------------------------------------------------------------------------------------------------------------------------------->
        <section class="satuan" id="satuan">
            <br><br><br>
            <div class="container">
            <form method="POST" action="ordersatuan.php">
                <div class="form-group">
                    <h1 class=" alert alert-info font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">SATUAN</h1><br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Nama Pelanggan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="namapelanggan" class="form-control" placeholder="Masukkan Nama Anda">
                        </div>
                    </div>
                    <br> 
                    <div class="row">
                        <div class="col-md-3">
                            <label>celana panjang *5.000 </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="celanapanjang" class="form-control" placeholder="Masukka Jumlah Celana Panjang *Angka">
                        </div>
                    </div>
                    <br> 
                    <div class="row">
                        <div class="col-md-3">
                            <label>Celana pendek *5.000 </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="celanapendek" class="form-control" placeholder="Masukka Jumlah Celana Pendek *Angka">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Jeans panjang *7.000</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="jeanspanjang" class="form-control" placeholder="Masukkan Jumlah Jeans Panjang *Angka">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Skirt blouse	*5.000</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="skirtblouse" class="form-control" placeholder="Masukkan Jumlah Skirt Blouse *Angka">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Jeans pendek *5.000</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="jeanspendek" class="form-control" placeholder="Masukkan Jumlah Jeans Pendek *Angka">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Kemeja Pendek *6.000</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="kemejapendek" class="form-control" placeholder="Masukkan Jumlah Kemeja Pendek *Angka">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Kemeja Panjang *8.000</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="kemejapanjang" class="form-control" placeholder="Masukkan Jumlah Kemeja Panjang *Angka">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Jaket Non-Kulit *9.000</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="jaketnonkulit" class="form-control" placeholder="Masukkan Jumlah Jaket Non-Kulit *Angka">
                        </div>
                    </div>
                    <br>
                                  
                </div>
                <br><br>
                <button type="submit" class="btn btn-info" name="simpanorder">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>

            </form>
        </div>
        </section><br><br>
<!--AKhir Satuan----------------------------------------------------------------------------------------------------->

<!--Awal Kiloan----------------------------------------------------------------------------------------------------->
<section class="kiloan" id="kiloan">
    <br><br><br>
    <div class="container">
    <form method="POST" action="orderkiloan.php">
        <div class="form-group">
            <h1 class=" alert alert-info font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">KILOAN</h1><br><br>
            <div class="row">
                        <div class="col-md-3">
                            <label>Nama Pelanggan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="namapelanggan" class="form-control" placeholder="Masukkan Nama Anda">
                        </div>
                    </div>
                    <br> 
            <div class="row">
                <div class="col-md-3">
                    <label>Cuci Setrika *6.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="cucisetrika" class="form-control" placeholder="Masukka Jumlah Cuci Setrika *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Cuci Kering *5.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="cucikering" class="form-control" placeholder="Masukkan Jumlah Cuci Kering *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Cuci Kilat *7.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="cucikilat" class="form-control" placeholder="Masukkan Jumlah Cuci Kilat *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Gordyyn *5.200</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="gordyyn" class="form-control" placeholder="Masukkan Jumlah Gordyyn *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Selimut *5.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="selimut" class="form-control" placeholder="Masukkan Jumlah Selimut *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Cuci Petir *8.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="cucipetir" class="form-control" placeholder="Masukkan Jumlah Cuci Petir *Angka">
                </div>
            </div> 
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Bed Cover *10.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="bedcover" class="form-control" placeholder="Masukkan Jumlah Bed Cover *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Setrika Saja *3.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="setrikasaja" class="form-control" placeholder="Masukkan Jumlah Setrika Saja *Angka">
                </div>
            </div>
            <br>                 
        </div>
        <br><br>
        <button type="submit" class="btn btn-info" name="simpanorder">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>

    </form>
</div>
</section><br><br>

<!--AKhir Kiloan----------------------------------------------------------------------------------------------------->

<!--Awal Paketan----------------------------------------------------------------------------------------------------->

<section class="paketan" id="paketan">
    <br><br><br>
    <div class="container">
    <form method="POST" action="orderpaketan.php">
        <div class="form-group">
            <h1 class=" alert alert-info font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">PAKETAN </h1>
            <h6>*ISI SESUAI DENGAN JUMLAH KILOGRAMNYA</h6>
            <br><br>
            <div class="row">
                        <div class="col-md-3">
                            <label>Nama Pelanggan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="namapelanggan" class="form-control" placeholder="Masukkan Nama Anda">
                        </div>
                    </div>
                    <br> 
            <div class="row">
                <div class="col-md-3">
                    <label>Cuci Setrika 20 Kg *70.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="cucisetrika20kg" class="form-control" placeholder="Masukka Jumlah Cuci Setrika *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Bed Cover 20 Kg *110.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="bedcover20kg" class="form-control" placeholder="Masukkan Jumlah Bed Cover *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Setrika 45 Kg *100.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="setrika45kg" class="form-control" placeholder="Masukkan Jumlah Setrika *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Setrika 25 Kg *70.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="setrika25kg" class="form-control" placeholder="Masukkan Jumlah Setrika *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Setrika 10 Kg *25.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="setrika10kg" class="form-control" placeholder="Masukkan Jumlah Setrika *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Setrika 65 Kg *120.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="setrika65kg" class="form-control" placeholder="Masukkan Jumlah Setrika *Angka">
                </div>
            </div> 
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Bed Cover 10 Kg *69.200</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="bedcover10kg" class="form-control" placeholder="Masukkan Jumlah Bed Cover *Angka">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Cuci Setrika 30 Kg *90.000</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="cucisetrika30kg" class="form-control" placeholder="Masukkan Jumlah Cuci Setrika *Angka">
                </div>
            </div>
            <br>                 
        </div>
        <br><br>
        <button type="submit" class="btn btn-info" name="simpanorder">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>

    </form>
</div>
</section><br><br>

<!--AKhir Paketan----------------------------------------------------------------------------------------------------->

<!--AWAL OUTPUT ----------------------------------------------------------------------------------------------------->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>