<!DOCTYPE html>
<html lang="en">
<head>
  <title>Desaku | Visi dan Misi</title>
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
      		<a class="nav-link" href="<?php echo  base_url('/')?>">Beranda<span class=""></span></a>
    	</li>
		<!-- Dropdown -->
    <li class="nav-item dropdown">
      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        	Profil Desa
      	</a>
      	<div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo  base_url('User')?>">Sejarah Desa</a>
        <a class="dropdown-item" href="<?php echo  base_url('User/wilayah')?>">Profil Wilayah Desa</a>
      	</div>
		</li>
    <li class="nav-item dropdown active">
      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        	Pemerintah Desa
      	</a>
      	<div class="dropdown-menu">
        <a class="dropdown-item active" href="<?php echo  base_url('User/visi')?>">Visi Dan Misi</a>
        <a class="dropdown-item" href="<?php echo  base_url('User/struktur')?>">Struktur Organisasi</a>
      	</div>
    </li>
    <li class="nav-item dropdown">
      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        	Data Desa
      	</a>
      	<div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo  base_url('User/data_wilayah')?>">Data Wilayah Administratif </a>
        <a class="dropdown-item" href="<?php echo  base_url('User/data_pendidikan')?>">Data Pendidikan</a>
        <a class="dropdown-item" href="<?php echo  base_url('User/data_pekerjaan')?>">Data Pekerjaan</a>
        <a class="dropdown-item" href="<?php echo  base_url('User/data_agama')?>">Data Agama</a>
        <a class="dropdown-item" href="<?php echo  base_url('User/data_sex')?>">Data Jenis Kelamin</a>
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
      <h2>Visi dan Misi Dan Program Kerja</h2>
      <p>Sebagaimana desa-desa yang lain, Desa Trate Kecamatan Sugihwaras juga memiliki Visi dan Misi bagi desanya serta program kerja desa. Berikut uraian visi dan misi serta program kerja Desa Trate Kecamatan Sugihwaras Kabupaten Bojonegoro.</p>
      <br>
      <h3><center>Visi</center></h3>
      <p><b>“Terwujudnya Masyarakat Desa Trate sebagai Desa yang agamis, mandiri untuk mencapai masyarakat yang sehat, cerdas dan lebih sejahtera serta melayani masyarakat dengan sepenuh hati”.</b></p>
      <br>
      <h3><center>Misi</center></h3>
      <p>1. Memujudkan dan mengembangkan kegiatan keagamaan untuk menambah keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa.</p>
      <p>2. Mewujudkan dan mendorong terjadinya usaha-usaha kerukunan antar dan intern warga masyarakat yang disebabkan karena adanya perbedaan agama, keyakinan, organisasi dan lainnya dalam suasana saling menghargai dan menghormati.</p>
      <p>3. Membangun dan meningkatkan hasil pertanian dengan jalan penataan pengairan, perbaikan jalan sawah / jalan usaha tani, pemupukan, dan pola tanam yang baik.</p>
      <br>
      <h3><center>Program Kerja</center></h3>
      <p>1. Peningkatan Pembangunan Infrastruktur yang Mendukung Perekonomian Desa</p>
      <p>2. Peningkatan Kualitas Kesehatan Masyarakat</p>
      <p>3. Pengembangan Pendidikan Bermutu dan Berkualitas</p>
      <p>4. Peningkatan Pembangunan Ekonomi  dengan Mendorong Tumbuh dan Berkembangnya Pembangunan di Bidang Pertanian Dalam Arti Luas.</p>
      <p>5. Peningkatan Tata Kelola Pemerintahan Yang Baik (Good Governance)</p>
      <br>
    </div>
    <?php $this->load->view("usersLogin/template/sidebar.php") ?>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
