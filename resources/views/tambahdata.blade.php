<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <title>Project UTS</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data Pegawai</h1>

    <div class="container">
    <!-- <button type="button" class="btn btn-success">Tambah +</button> -->
        <div class="row justify-content-center">
            <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/insertdata" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                          <input type="text" name='nama' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" name='alamat' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('alamat')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name='jeniskelamin' aria-label="Default select example">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                            <input type="number" name='notelepon' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('notelepon')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Umur</label>
                            <input type="number" name='umur' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('umur')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    -->
  </body>
</html>