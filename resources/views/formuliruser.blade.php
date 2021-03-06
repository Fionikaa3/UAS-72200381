<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  </head>
  <body>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 bg-danger py-4"></div>
        </div>

        <div class="row">
          <div class="col-lg-2 vh-100">
          <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Home</a>
          <a class="nav-link active" href="/maha">Mahasiswa</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Dosen</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Settings</a>
        </div>
          </div>
          <div class="col-lg-10 vh-100">

          <div class="card mt-4">
            
          <div class="card-header">
            </div>

            <div class="card-body">
                      <div class="container-fluid rounded mt-4">
      <form method="POST" action="/user/simpanusr">
          @csrf
      <div class="form-group w-25">
    <label>NIk Pengguna</label>
  <input type="number" name="nik_user" class="form-control" placeholder="Isikan NIK" required>
  </div>

  <div class="form-group w-25">
      <label>Nama Pengguna</label>
      <input type="text" name="nama_user" class="form-control" placeholder="Isikan Nama" required>
  </div>

  <div class="form-group w-25">
      <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
  </div>

  <div class="form-group w-25">
      <label>Nomor Handphone</label>
      <input type="number" name="no_hp" class="form-control" placeholder="Masukkan Nomer Hp" required>
  </div>

  <div class="form-group w-25">
      <label>Password</label>
      <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
  </div>

<button type="submit" class="btn btn-primary mt-3">SIMPAN</button>              
          </form>
      </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
