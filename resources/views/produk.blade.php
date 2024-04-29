<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/produk">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Annisa">Annisa</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container" style="margin-left: 20px">
    <h1>Halaman Produk</h>
    
 <table class= "table table-danger table-sm table-hover table-striped">
        <thead>
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>BRG001</td>
                <td>Pena</td>
                <td>Alat tulis</td>
                <td>20000</td>
            </tr>
            <tr>
                <td>BRG002</td>
                <td>Buku</td>
                <td>Alat tulis</td>
                <td>15000</td>
            </tr>
        </tbody>
    </table>
</div> 

<div class="Container" style="margin-left: 40px">
    <div class="col-sm-12">
        <button class="btn btn-primary" style="width: 20%">Tambah Produk</button>
    </div>
</div>

<div class="Container" style="margin-left: 40px">
<div class="col-sm-6">
    <h4>Form Tambah Produk</h4>
    <form action="" method="GET">
        <div class="row">
            <div class="col-sm-6">
                <label for="">kode produk</label>
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="">Nama produk</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <form action="" method="GET">
            <div class="row">
            <div class="col-sm-6">
                <label for="">Jenis produk</label>
                <select name="" id="" class="form-control">
                <option value="">pilih produk</option>
                <option value="">Alat tulis</option>
                <option value="">Elektronik</option>
                <option value="">sembako</option>
                </select>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-6">
                <label for="">Harga</label>
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>
<div class="Container" style="margin-left: 40px">
<div class="row mt-4">
    <div class="col-sm-12">
        <button class="btn btn-primary" style="width: 100%">Simpan</button>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>