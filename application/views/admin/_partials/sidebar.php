<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo base_url('admin/overview') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/SuratOnlineAdmin') ?>">
        <i class="fas fa-envelope"></i>
            <span>Surat</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pengaduan') ?>">
        <i class="fas fa-info-circle"></i>
            <span>Pengaduan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/agenda') ?>">
        <i class="fa fa-calendar" aria-hidden="true"></i>
            <span>Agenda</span></a>
    </li>
</ul>