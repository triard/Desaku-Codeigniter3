<!DOCTYPE html>
<html lang="en">

<head>
  <title>Desaku | Beranda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
    }

    .responsive img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>

<body>


  <div class="container" style="margin-top:30px">
    <div class="jumbotron text-center" style="margin-bottom:0">
      <h1>DESA TRATE</h1>
      <p>KECAMATAN SUGIHWARAS KABUPATEN BOJONEGORO <br>
        JL. RAYA KEDUNGADEM - KODEPOS 6281</p>
    </div>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo  base_url('/') ?>">Beranda<span class=""></span></a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Profil Desa
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo  base_url('User') ?>">Sejarah Desa</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/wilayah') ?>">Profil Wilayah Desa</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Pemerintah Desa
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo  base_url('User/visi') ?>">Visi Dan Misi</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/struktur') ?>">Struktur Organisasi</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Data Desa
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo  base_url('User/data_wilayah') ?>">Data Wilayah Administratif </a>
              <a class="dropdown-item" href="<?php echo  base_url('User/data_pendidikan') ?>">Data Pendidikan</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/data_pekerjaan') ?>">Data Pekerjaan</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/data_agama') ?>">Data Agama</a>
              <a class="dropdown-item" href="<?php echo  base_url('User/data_sex') ?>">Data Jenis Kelamin</a>
            </div>
          </li>
        </ul>
        <a class="form-inline my-2 my-lg-0" href="<?php echo base_url('Login/'); ?>">
          <button type="button" class="btn btn-primary">Login</button>
        </a>
      </div>
    </nav>
    </nav>
    <div class="row">
      <div class="col-sm-8">
        <br>
        <h2 style="color: red">Info Corona</h2> last update <?php echo date("Y-m-d"); ?>
        <br>
      <div class="card-group">
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
      <?php foreach ($corona as $c) : ?>
        <div class="card-header"><?php echo $c->name ?></div>
          <div class="card-body">
            <p class="card-text">Positif : <?php echo $c->positif ?> Orang</p>
            <p class="card-text">Sembuh  : <?php echo $c->sembuh ?> Orang</p>
            <p class="card-text">Meninggal  : <?php echo $c->meninggal ?> Orang</p>
            <?php endforeach ?>
        </div>  
      </div>
      <?php
          $url = 'https://api.kawalcorona.com/indonesia/provinsi/';

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL, $url);
          $json = curl_exec($ch);
          curl_close($ch);

          $data = json_decode($json, true);

          $list = $data[4]['attributes'];
          ?>
        <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
        <div class="card-header"><?php echo $list['Provinsi'];?></div>
          <div class="card-body">
            <p class="card-text">Kasus Positif : <?php echo  $list['Kasus_Posi'];?><br></p>
            <p class="card-text">Kasus Sembuh :  <?php echo  $list['Kasus_Semb'];?></p>
            <p class="card-text">Kasus Meninggal  <?php echo  $list['Kasus_Meni'];?></p>
        </div>  
        </div>
        <?php
          $url = 'https://bokusan.my.id/api/jawa-timur';

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL, $url);
          $json = curl_exec($ch);
          curl_close($ch);

          $data = json_decode($json, true);

          $list = $data['data']['all'];
          ?>
     
     <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
           <?php foreach ($list as $key => $value) : ?>
                <?php if ($value['region'] == "Kabupaten Bojonegoro") : ?>
                  <div class="card-header"><?php echo $value['region'] ?></div>
            <div class="card-body">
            <p class="card-text">Positif : <?= $value['confirmed']; ?> Orang</p>
            <p class="card-text">Sembuh  : <?= $value['recovered']; ?> Orang</p>
            <p class="card-text">Meninggal  : <?= $value['deaths']; ?>  Orang</p>
            <?php endif ?>
            <?php endforeach; ?>

        </div>  
        </div>
      </div>
      </div>
      <div class="col-sm-4">
        <h5>Wilayah Desa</h5>
        <div class="fakeimg">
          <a href="https://www.google.com/maps/place/Trate,+Sugihwaras,+Bojonegoro+Regency,+East+Java/@-7.3011649,111.9598312,15z/data=!3m1!4b1!4m5!3m4!1s0x2e78294e97c50a7b:0x603113d4a3811225!8m2!3d-7.2994534!4d111.9671537" target="blank" class="responsive"><img src="<?php echo base_url('assets/trate.png'); ?>" alt=""></a>
        </div>

        <div class="card-body">
							<form action="<?php echo base_url('Login/proses_login_penduduk') ?>" method="post" class="needs-validation" novalidate>
								<div class="form-group">
									<label for="username">NIK:</label>
									<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
								<div class="form-group">
									<label for="password">Password:</label>
									<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="#" class="btn btn-warning" style="color:white;">Register</a>
              </form>

            </div>
            <div>
              
            <div class="card" style="width: 18rem;">
              <div class="card-header">
              Agenda
              </div>
              <?php foreach ($agenda as $value) : ?> 
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                   <b><?= $value->agenda; ?></b>
                   <p>Tempat : <?= $value->tempat; ?><br>
                   Waktu : <?= $value->tanggal; ?> <?= $value->jam; ?><br>
                   Koordinator : <?= $value->koordinator; ?></p>
              </li>
              </ul>
              <?php endforeach; ?>
            </div>
       </div>
      </div>
    </div>
  </div>

  <div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
  </div>

</body>

</html>