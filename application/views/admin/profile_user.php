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
    <h1>Agenda Desa Trate</h1>
        <div style="overflow-y: scroll;overflow-x: scroll; width: 100%;border: 1px black dotted;">        
        <table class="table data">
        <tbody>
    
                <tr>
                    <td><?= $profile->username ?></td>
                    <td><?= $profile->jenis_user ?></td>
                    <td><?= $profile->email ?></td>
                    <td><?= $profile->no_telp ?></td>
                    <td><?= $profile->alamat ?></td>
                    <img src="<?php echo base_url('upload/foto-user/'.$profile->foto) ?>" width="64" />
                    <td>
                    </td>
                </tr>
                <a class="dropdown-item" href="<?php echo site_url('Login/edit_user/' . $profile->id) ?>" style="color: blue">Edit</a>

        </tbody>
        </table>
        </div>
    <?php $this->load->view("admin/_partials/footer.php") ?>
    </div>
</div>

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>
    <script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</body>
</html>