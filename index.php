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
                <form>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Contoh: Alexander Knocker">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" placeholder="Contoh: Jl. Panglima Sudirman 1A Malang, Jawa Timur"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="tempat">Tempat</label>
                    <input type="text" class="form-control" id="tempat" placeholder="Contoh: Politeknik Negeri Malang">
                  </div>
                  <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-control" id="jk">
                      <option>Pria</option>
                      <option>Wanita</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="usia">Usia</label>
                    <input type="number" class="form-control" id="usia" placeholder="Contoh: 19">
                  </div>
                  <button type="submit" class="btn" style="background-color:#8853de;color:white">Submit</button>
                </form>
              </div>
            </div>
            <!-- <div class="card" style="width: 50rem;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">

                </li>
              </ul>
            </div> -->
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
