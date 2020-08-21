<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: rgba(14, 18, 62); position: sticky;top: 0; z-index: 9999">
    <img src="<?php echo base_url('assets/Logo/logo-unsri-.png'); ?>" style="width: 50px;"><img src="<?php echo base_url('assets/Logo/logo-himasisko-baru.png'); ?>" style="width: 40px; margin: 0px 8px;"><img src="<?php echo base_url('assets/Logo/Kabinet-digital.png'); ?>" style="width: 50px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #363d8a;">
    <span class="navbar-toggler-icon"></span>
  </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
		<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a id="beranda" href="<?php echo base_url();?>" class="nav-link">
			<i class="fa fa-home"></i>Beranda
			</a>
		</li>
		<li class="nav-item active">
			<a id="perkenalan" href="<?php echo base_url('perkenalan');?>" class="nav-link">
			<i class="fa fa-home"></i>Perkenalan
			<span class="sr-only">(current)</span>
			</a>
		</li>
		<li class="nav-item">
			<a id="perkenalan" href="<?php echo base_url('admin');?>" class="nav-link">
			<i class="fa fa-home"></i>admin
			<span class="sr-only">(current)</span>
			</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-users"></i> Dinas </a>
			<div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-1">
			<a class="dropdown-item" href="<?php echo base_url('dinas_akademik'); ?>">Dinas Akademik</a>
			<a class="dropdown-item" href="dinas-psdm.html">Dinas PSDM</a>
			<a class="dropdown-item" href="dinas-infokom.html">Dinas Infokom</a>
			<a class="dropdown-item" href="dinas-kastrad">Dinas Kastrad</a>
			<a class="dropdown-item" href="dinas-kestari.html">Dinas Kestari</a>
			<a class="dropdown-item" href="dinas-danus.html">Dinas Danus</a>
			<a class="dropdown-item" href="dinas-pmb.html">Dinas PMB</a>
			</div>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-user"></i> Profil </a>
			<div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-2">
			<a class="dropdown-item" href="struktural-hima.html">Struktur Kepengurusan</a>
			<a class="dropdown-item" href="logo-kabinet.html">Logo Kabinet</a>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="proker-umum.html">
			<i class="fas fa-file-alt"></i>Proker</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="contact.html">
			<i class="fas fa-address-book"></i>Kontak</a>
		</li>
		</ul>
	</div>


</nav>
