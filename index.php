<!doctype html>
<html lang="en">
  <head>
    <title>Form Biodata</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
  </head>
  <body style="background-color:#ede4f7">
      <div class="container-fluid">
        <div class="row justify-content-md-center" style="height:200px;background-color:#6938b8;">
          <div class="row align-items-end">
            <div class="card" style="width: 50rem">
              <div class="card-header" style="background-color:white">
                <h2>Biodata</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-md-center" style="margin-bottom: 8rem">
          <div class="row bg-dark">
            <div class="card" style="width: 50rem;">
              <div class="card-body">
                <form action="result.php" method="post">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Contoh: Alexander Knocker">
                    <?php
                      if(isset($_GET['err'])){
                        $err = $_GET['err'];
                        if($err[0]=="1"){
                    ?>
                          <div class="alert alert-danger mt-2" role="alert">
                            Nama tidak boleh kosong!
                          </div>
                    <?php
                        }
                      }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Contoh: Jl. Panglima Sudirman 1A Malang, Jawa Timur"></textarea>
                    <?php
                      if(isset($_GET['err'])){
                        $err = $_GET['err'];
                        if($err[1]=="1"){
                    ?>
                          <div class="alert alert-danger mt-2" role="alert">
                            Alamat tidak boleh kosong!
                          </div>
                    <?php
                        }
                      }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="tempat">Tempat</label>
                    <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Contoh: Politeknik Negeri Malang">
                    <?php
                      if(isset($_GET['err'])){
                        $err = $_GET['err'];
                        if($err[2]=="1"){
                    ?>
                          <div class="alert alert-danger mt-2" role="alert">
                            Tempat tidak boleh kosong!
                          </div>
                    <?php
                        }
                      }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-control" name="jk" id="jk">
                      <option>Pria</option>
                      <option>Wanita</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="usia">Usia</label>
                    <input type="number" class="form-control" name="usia" id="usia" placeholder="Contoh: 19">
                    <?php
                      if(isset($_GET['err'])){
                        $err = $_GET['err'];
                        if($err[3]=="1"){
                    ?>
                          <div class="alert alert-danger mt-2" role="alert">
                            Usia tidak boleh kosong!
                          </div>
                    <?php
                        }
                      }
                    ?>
                  </div>
                  <button type="submit" class="btn" style="background-color:#8853de;color:white">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
