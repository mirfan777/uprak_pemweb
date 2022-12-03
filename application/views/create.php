<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light mb-5">
    <span class="navbar-brand mb-0 h1">UPRAK</span>
    </nav>
    <!-- navbar -->

    <!-- form card -->
    <div class="d-flex justify-content-center">
    <div class="card w-50">
    <div class="card-body">
    <h1 class="d-flex justify-content-center" > CREATE </h1>
    <form>
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" aria-describedby="judul" placeholder="judul">
    </div>
    <div class="form-group">
    <label for="jenis">Jenis Buku</label>
    <select name="jenis" class="form-control" id="jenis">
      <option disabled selected>Jenis Buku</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" class="form-control" id="penulis" aria-describedby="penulis" placeholder="penulis">
    </div>
    <div class="form-group">
        <label for="penerbit">penerbit</label>
        <input type="text" class="form-control" id="penerbit" aria-describedby="penerbit" placeholder="penerbit">
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal Terbit</label>
        <input type="date" class="form-control" id="tanggal" aria-describedby="tanggal" placeholder="tanggal">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    <!-- end login card -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>