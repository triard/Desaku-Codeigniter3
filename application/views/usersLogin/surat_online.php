<?php $this->load->view("usersLogin/template/header.php") ?>
<div class="container pt-3">
        <div class="card">
            <div class="card-header">Data Permintaan Surat Online</div>
            <div class="card-body">
                <a href="<?php echo base_url('UserLogin/surat_online_add_data') ?>" class="btn btn-success">Data Baru</a>
                <h1>Daftar Permintaan Surat Anda</h1>
                
                <div style="overflow-y: scroll;overflow-x: scroll; width: 100%;border: 1px black dotted;">        

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>nik</th>
                            <th>No_telp</th>
                            <th>category</th>
                            <th>isi</th>
                            <th>tanggal permohonan</th>
                            <th>status</th>
                        </tr>
                    </thead>
                <tbody>
                <?php foreach ($surat as $st) : ?>
                    <tr>
                    <td><?= $st["nama"] ?></td>
                    <td><?= $st["nik"] ?></td>
                    <td><?= $st["no_telp"] ?></td>
                    <td><?= $st["category"] ?></td>
                    <td><?= $st["isi"] ?></td>
                    <td><?= $st["tgl_permohonan"] ?></td>
                    <td><?= $st["status"] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
                 </div>
            </div>
        </div>
</div>
<?php $this->load->view("usersLogin/template/footer.php") ?>