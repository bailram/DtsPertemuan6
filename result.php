<?php
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $tempat = $_POST['tempat'];
  $jk = $_POST['jk'];
  $usia = $_POST['usia'];
  $err = "";
  if($nama==""){
    $err=$err."1";
  }else {
    $err=$err."0";
  }
  if($alamat==""){
    $err=$err."1";
  }else {
    $err=$err."0";
  }
  if($tempat==""){
    $err=$err."1";
  }else {
    $err=$err."0";
  }
  if($usia==""){
    $err=$err."1";
  }else {
    $err=$err."0";
  }
  for($x=0; $x<strlen($err);$x++){
    if($err[$x]=="1"){
      header("location:index.php?err=".$err);
    }
    // echo $err[$x]."<br>";
  }
?>
<!Doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
  </head>
  <body style="background-color:#ede4f7">
    <div class="container" style="margin-top:5rem">
      <div class="row justify-content-center">
        <div class="card">
          <h4 class="card-header" style="background-color:#6938b8; color:white">Biodata</h4>
          <div class="card-body">
            <h3 class="card-title border-bottom"><?=$nama?></h3>
            <h6 class="card-title">Alamat</h6>
            <p class="card-text"><?=$alamat?></p>
            <h6 class="card-title">Tempat</h6>
            <p class="card-text"><?=$tempat?></p>
            <h6 class="card-title">Jenis Kelamin</h6>
            <p class="card-text"><?=$jk?></p>
            <h6 class="card-title">Usia</h6>
            <p class="card-text"><?=$usia." Tahun"?></p>
            <a href="./index.php" class="btn" style="background-color:#8853de;color:white">Kembali</a>
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
