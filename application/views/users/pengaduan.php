<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('UserLogin') ?>">Surat Online <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Pengaduan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="<?php echo base_url('UserLogin/feddback') ?>">Feedback</a>
      </li>
    </ul>
    <a class="form-inline my-2 my-lg-0" href="<?php echo base_url('#'); ?>">
    <button type="button" class="btn btn-danger">Logout</button>
    </a>
  </div>
</nav>
    
    <div class="container pt-3">
        <div class="card">
            <div class="card-header">Pengaduan Online</div>
            <div class="card-body">
                <h6 class="title">Silahkan lengkapi semua isian sesuai dengan data yang diperlukan</h5>
                <form action="">
                 <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="name" class="form-control" placeholder="Enter name*" id="nama">
                        </div>
                        <div class="form-group">
                        <label for="email">Nik:</label>
                        <input type="email" class="form-control" placeholder="Enter email/no telp*" id="email">
                        </div>
                    </div>
                 </div>
                 <div class="form-group">
                     <textarea class="form-control" rows="4" placeholder="isi pengaduan anda*"  required="required" data-eror="silahkan isi pengaduan anda"></textarea>
                 </div>
                 <div class="footer">
                     <div class="row">
                        <div class="col-6">
                            <input type="submit" class="btn btn-success btn-send disabled" value="Kirim Permohonan">
                        </div>
                 </form>
                        <div class="col-6">
                            <input type="button" class="btn btn-primary btn-send" value="Kembali" onclick="window.history.back()">
                        </div>
                     </div>
                 </div>

            </div>
        </div>
    </div>
  </div>
</body>
</html>