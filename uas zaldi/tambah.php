<?php
include_once 'Connection.php';
if(isset($_POST["submit"])){
  
  if(tambah($_POST) > 0){
    echo"
    <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'admin.php';
    </script>
    ";
  }else {
    echo"
    <script>
      alert('data gagal ditambahkan');
      document.location.href = 'admin.php';
    </script>
    ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tambah data</title>
    <style>
        body{
            margin:0;
            padding:10px;
            background-color: lightblue;
        }
        .row{
            padding:20px;
        }
    </style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <center><h1>Tambah Data Pegawai</h1>
  <div class="col-md-6">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" placeholder="" required autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="" required autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="" required autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="jenis_kelamin" class="form-label">jenis kelamin</label>
    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required autocomplete="off">
      <option>Laki-laki</option>
      <option>Perempuan</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="telepon" class="form-label">No telepon</label>
    <input type="text" name="telepon" class="form-control" id="telepon" placeholder="" required autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="posisi" class="form-label">posisi</label>
    <select id="posisi" name="posisi" class="form-select" required autocomplete="off">
      <option>---</option>
      <option>kasir</option>
      <option>pramuniaga</option>
      <option>ob</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="gaji" class="form-label">gaji</label>
    <input type="text" name="gaji" class="form-control" id="gaji" placeholder="" required>
  </div>
  <div class="col-6">
    <label for="gambar" class="form-label">Gambar</label>
    <input type="file" name="gambar" class="form-control" id="gambar">
  </div>
  <div class="col-12 mt-4" >
    <button type="submit" name="submit" class="btn btn-primary">Tambah</button></center>
  </div>
</form>
</body>
</html>