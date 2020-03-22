<?php $this->load->view("usersLogin/template/header.php") ?>
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
  <?php $this->load->view("usersLogin/template/footer.php") ?>