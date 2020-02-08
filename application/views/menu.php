<link href="../../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #e3f2fd;"> <a class="navbar-brand" href="#"> <img src="assets/bootstrap/img/logos.png" width="30" height="30" class="d-inline-block align-top" alt=""> BBIB-SINGOSARI </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			
			<!--Akses Menu Untuk Admin-->
			<?php if($this->session->userdata('akses')=='1'):?>
			<li class="nav-item"> <a class="nav-link" href="#"><img src="assets/bootstrap/img/home.png" /> HOME <span class="sr-only">(current)</span></a> </li>
			<li class="nav-item"> <a class="nav-link" href="<?php echo base_url().'view/status'?>"><img src="assets/bootstrap/img/q.png" /> VIEW Q-IPNBK</a> </li>
			<li class="nav-item"> <a class="nav-link" href="<?php echo base_url().'page/unit_kerja'?>"><img src="assets/bootstrap/img/unit.png" /> UNIT KERJA</a> </li>
			<li class="nav-item"> <a class="nav-link" href="<?php echo base_url().'page/co_admin'?>"><img src="assets/bootstrap/img/coa.png"/> ADMIN/CO</a> </li>
			<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="assets/bootstrap/img/akun.png" width="30" height="30" class="d-inline-block align-top" alt=""> <?php echo $this->session->userdata('ses_nama');?> </a> </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="<?php echo base_url('co_admin/profil/'.$this->session->userdata('ses_iid')) ?>">Profil</a>
				<a class="dropdown-item" href="<?php echo base_url('co_admin/pass_ad/'.$this->session->userdata('ses_iid')) ?>">Ganti Password</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url().'login/logout'?>">Sign Out</a> </div>
			</li>
			
			<!--Akses Menu Untuk Co-Admin-->
			<?php elseif($this->session->userdata('akses')=='2'):?>
			<li class="nav-item"> <a class="nav-link" href="#"><img src="assets/bootstrap/img/home.png" /> HOME </a> </li>
			<li class="nav-item"> <a class="nav-link" href="<?php echo base_url().'view/status'?>"><img src="assets/bootstrap/img/q.png" /> VIEW Q-IPNBK</a> </li>
			<li class="nav-item"> <a class="nav-link" href="<?php echo base_url().'page/unit_kerja' ?>"><img src="assets/bootstrap/img/unit.png" /> UNIT KERJA</a> </li>
			<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="assets/bootstrap/img/akun.png" width="30" height="30" class="d-inline-block align-top" alt=""> <?php echo $this->session->userdata('ses_nama');?> </a> </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="<?php echo base_url('co_admin/profil/'.$this->session->userdata('ses_iid')) ?>">Profil</a>
				<a class="dropdown-item" href="<?php echo base_url('co_admin/pass_ad/'.$this->session->userdata('ses_iid')) ?>">Ganti Password</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url().'login/logout'?>">Sign Out</a> </div>
			</li>
			
			<!--Akses Menu Untuk Pengguna-->
			<?php else:?>
			<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('page') ?>"><img src="assets/bootstrap/img/home.png" /> HOME</a> </li>
			<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('quiz') ?>"><img src="assets/bootstrap/img/q.png" /> VIEW Q-IPNBK</a> </li>
			<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/bootstrap/img/akun.png" width="30" height="30" class="d-inline-block align-top" alt=""> <?php echo $this->session->userdata('ses_nama');?> </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="<?php echo base_url('unit_kerja/profil/'.$this->session->userdata('ses_iid')) ?>">Profil</a>
				<a class="dropdown-item" href="<?php echo base_url('unit_kerja/pass_up/'.$this->session->userdata('ses_iid')) ?>">Ganti Password</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url().'login/logout'?>">Sign Out</a> </div>
			</li>
			<?php endif;?>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>
