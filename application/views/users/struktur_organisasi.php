<!DOCTYPE html>
<html lang="en">
<head>
  <title>Desaku | Sejarah</title>
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
  .responsive img{
      max-width:100%;
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
<a class="navbar-brand" href="#">
    		<img src="bird.jpg" alt="logo" style="width:40px;">
		</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
	<li class="nav-item">
      		<a class="nav-link" href="#">Beranda<span class=""></span></a>
    	</li>
		<!-- Dropdown -->
    	<li class="nav-item dropdown">
      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        	Profil Desa
      	</a>
      	<div class="dropdown-menu">
        <a class="dropdown-item" href="#">Sejarah Desa</a>
        <a class="dropdown-item" href="#">Profil Wilayah Desa</a>
      	</div>
		</li>
		<li class="nav-item dropdown active">
      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        	Pemerintah Desa
      	</a>
      	<div class="dropdown-menu">
        <a class="dropdown-item" href="#">Visi Dan Misi</a>
        <a class="dropdown-item active" href="#">Struktur Organisasi</a>
      	</div>
    </li>
    <li class="nav-item dropdown">
      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        	Data Desa
      	</a>
      	<div class="dropdown-menu">
        <a class="dropdown-item" href="#">Visi Dan Misi</a>
        <a class="dropdown-item" href="#">Struktur Organisasi</a>
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
      <br><br>
      <h2>Struktur Organisasi</h2><br>
      <div class="container">
      <table class="table">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Jabatan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Jonny Anwar</td>
              <td>Kepala Desa</td>
            </tr>
            <tr>
              <td>Nafiah</td>
              <td>Sekretaris Desa</td>
            </tr>
            <tr>
              <td>Hanafi</td>
              <td>Kepala Urusan Pemerintahan</td>
            </tr>
            <tr>
              <td>Rabu</td>
              <td>Kepala Urusan Pembangunan</td>
            </tr>
            <tr>
              <td>Mustakim</td>
              <td>Kepala Urusan Kesra</td>
            </tr>
            <tr>
              <td>Hamidah</td>
              <td>Kepala Urusan Keuangan</td>
            </tr>
            <tr>
              <td>Solikin</td>
              <td>Kepala Urusan Trantib</td>
            </tr>
            <tr>
              <td>Subhan</td>
              <td>Kepala Urusan Umum</td>
            </tr>
          </tbody>
      </table>
      </div>
    </div>
    <div class="col-sm-4">
      <h5>Wilayah Desa</h5>
      <div class="fakeimg">
        <a href="https://www.google.com/maps/place/Sugihwaras,+Bojonegoro+Regency,+East+Java/@-7.3073796,111.9285504,14z/data=!3m1!4b1!4m5!3m4!1s0x2e782bf8b25b4017:0xc68196dfe06bf16a!8m2!3d-7.3003622!4d111.9492682" target="blank" 
        class="responsive"><img src="<?php echo base_url('assets/trate.png'); ?>" alt=""></a>
      </div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
