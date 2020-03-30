<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
<?php $this->load->view("admin/_partials/navbar.php") ?>
<div id="wrapper">
<?php $this->load->view("admin/_partials/sidebar.php") ?>

<div id="content-wrapper">

    <div class="container-fluid">


    <div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Detail Surat</h3> 
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $suratDetail['nama']; ?></h5>
                    <p class="card-text">
                        <label for="">NIK</label>
                        <br><?php echo $suratDetail['nik']; ?>
                    </p>
                    <p class="card-text">
                        <label for="">Category</label>
                        <br><?php echo $suratDetail['category']; ?>
                    </p>
                    <p class="card-text">
                        <label for="">Tanggal</label>
                        <br><?php echo $suratDetail['tgl_permohonan']; ?>
                    </p>
                    <p class="card-text">
                            <label for="">Isi Pengaduan</label>
                            <br><?php echo $suratDetail['isi'];?>
                    </p>
                    <p class="card-text">
                        <label for="">No telp</label>
                        <br><?php echo $suratDetail['no_telp'];?>
                    </p>
                      <form action="<?php base_url('admin/suratAdminOnline/update') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $suratDetail['id'] ?>" />
                        <div class=" form-group">
                            <label for="status">Status</label>
                            <select id="status" class="form-control" name="status">
                                <option value="<?= $suratDetail['status']; ?>"><?= $suratDetail['status']; ?></option>
                                <option value="proses">proses</option>
                                <option value="Dapat diambil">Dapat diambil</option>
                                <option value="Gagal">Gagal</option>
                            </select>
                        </div>
                        <input class="btn btn-success" type="submit" name="btn" value="Update Status" />
                      </form>
                    <a href="<?php echo site_url('admin/SuratOnlineAdmin/') ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i>
                        Back</a>

                </div>
            </div>
        </div>
    </div>
</div>

    <?php $this->load->view("admin/_partials/footer.php") ?>
    </div>
</div>

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>