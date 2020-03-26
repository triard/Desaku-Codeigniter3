<?php $this->load->view("usersLogin/template/header.php") ?>
<div class="container pt-3">
        <div class="card">
            <div class="card-header">Surat Online</div>
            <div class="card-body">
                <h6 class="title">Silahkan lengkapi semua isian sesuai dengan data yang diperlukan</h5>
                <form action="" method="post">
                 <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" class="form-control" placeholder="Enter name*" id="nama" name="nama" value="<?= $nama2 ?>" readonly>
                        </div>
                        <div class="form-group">
                        <label for="no_telp">Email/No telp:</label>
                        <input type="text" class="form-control" placeholder="Enter email/no telp*" id="no_telp" name="no_telp">
                        </div>
                        
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                        <label for="nik">NIK:</label>
                        <input type="number" class="form-control" placeholder="Enter NIK*" id="nik" name="nik">
                        </div>

                        <div class=" form-group">
                            <label for="category">Pilih surat</label>
                            <select id="category" class="form-control" name="category" >
                            <option>Surat Keterangan Usaha</option>
                            <option>Surat Keterangan Tidak Mampu</option>
                            <option>Surat Keterangan Miskin</option>
                            <option>Surat Keterangan Belum Pernah Menikah</option>
                            <option>Surat Keterangan Kelahiran</option>
                            <option>Surat Keterangan Kematian</option>
                            <option>Surat Keterangan Beda Nama</option>
                            <option>Surat Keterangan Penghasilan</option>
                            <option>Surat Keterangan Harga Tanah</option>
                            </select>
                        </div>
                    </div>
                 </div>
                 <div class="form-group">
                     <textarea class="form-control" rows="4" id="isi" name="isi" placeholder="isi keterangan*"  required="required" data-eror="silahkan isi keterangan aanda"></textarea>
                 </div>
                 <div class="footer">
                     <div class="row">
                        <div class="col-6">
                            <input type="submit" class="btn btn-success btn-send" value="Kirim Permohonan">
                        </div>
                 </form>
                        <div class="col-6">
                            <input href="<?php echo base_url('UserLogin/surat_online') ?>" type="button" class="btn btn-primary btn-send" value="Kembali" onclick="window.history.back()">
                        </div>
                     </div>
                 </div>
            </div>
            <?php $this->load->view("usersLogin/template/footer.php") ?>