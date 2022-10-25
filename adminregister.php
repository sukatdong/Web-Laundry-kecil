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
    <title>Register Admin</title>
  </head>
  <body>
   
            <section class="register" id="register">
              <div class="container">
                <br><br>
                <h1 class=" alert alert-info text-align: center ; font-family: 'Courier New', Courier, monospace; margin-top: 25px; ">Daftar Akun</h1><br><br>
                
                <form method="POST" action="dataadmin.php">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Nama Depan</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="namaadmin" class="form-control" placeholder="Masukkan Nama Depan Anda">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Tempat/Tanggal lahir</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="tempattanggallahiradmin" class="form-control" placeholder="Masukkan Tempat/Tanggal Lahir Anda">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Alamat</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="alamatadmin" class="form-control" placeholder="Masukkan Alamat Anda">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Jenis Kelamin</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="jeniskelaminadmin" class="form-control" placeholder="Masukkan Jenis Kelamin Anda">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Username</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="usernameadmin" class="form-control" placeholder="Masukkan Username Anda">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Password</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" name="passwordadmin" class="form-control" placeholder="Masukkan Password Anda">
                            </div>
                        </div>                  
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-info" name="simpanadmin">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>

                </form>
              </div>     
             <br><br><br>
            </section>
        <!--Akhir Jumbotron untuk beranda-->
        <!------------------------------------------------------------------------------------------------------------------------------->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>