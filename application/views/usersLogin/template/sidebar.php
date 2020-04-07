<div class="col-sm-4">
        <h5>Wilayah Desa</h5>
        <div>
          <a href="https://www.google.com/maps/place/Trate,+Sugihwaras,+Bojonegoro+Regency,+East+Java/@-7.3011649,111.9598312,15z/data=!3m1!4b1!4m5!3m4!1s0x2e78294e97c50a7b:0x603113d4a3811225!8m2!3d-7.2994534!4d111.9671537" target="blank" class="responsive"><img src="<?php echo base_url('assets/trate.png'); ?>" alt=""></a>
        </div>
        <div class="card-body">
							<form action="<?php echo base_url('Login/proses_login_penduduk') ?>" method="post" class="needs-validation" novalidate>
								<div class="form-group">
                  <label for="">login untuk penduduk</label><br>
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
                <a href="<?php echo base_url('login/buatAkunPenduduk')?>" class="btn btn-warning text-white">Register</a>
              </form>

            </div>
            <div>
              
            <div class="card" style="width: 18rem;">
              <div class="card-header bg-dark text-white">
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