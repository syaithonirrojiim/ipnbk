<!DOCTYPE html>
<html>
<head>
<title>DATA UNIT KERJA</title>
<link href="../assets/bootstrap/img/logos.png" rel='shortcut icon'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Protected By COMMUNE">
<!-- Bootstrap -->
<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">
<link href="../../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body background="../assets/bootstrap/img/q.jpg">
<?php $this->load->view('menus');?>
<!--Include menu--> 
<br />
<br />
<br />
<div class="col-12">
<div class="row">
	<div class="col-1"> </div>
	<div class="col-3">
		<div class="card"> <img class="card-img-top" src="../assets/bootstrap/img/kelola_unit.jpg" alt="Card image cap">
		</div>
		<div class="list-group" align="center">
  <a href="<?php echo base_url().'page/unit_kerja'?>" class="list-group-item list-group-item-action">Lihat Data Pegawai</a>
  <a href="#" class="list-group-item list-group-item-action active">Tambah data baru pegawai</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Delete all</a>
</div>
		<br />
		<div class="card"> <img class="card-img-top" src="../assets/bootstrap/img/copy.jpg" alt="Card image cap">
			<div class="card-header" style="text-align:center"><font size="2">©2018 Copyright By <a href="http://twitter.com/ra_hidayatulloh" target="_blank">ra_hidayatulloh</a></font></div>
		</div>
	</div>
	<div class="col-7">
		<div class="card">
			<div class="card-header">
				<div class="text-right"> <b>Login Record</b> >
					<?php 
    $tanggal = mktime(date('m'), date("d"), date('Y'));
    echo "Date : <b> " . date("d-m-Y", $tanggal ) . "</b>";
    date_default_timezone_set("Asia/Jakarta");
    $jam = date ("H:i:s");
    echo " - Time : <b> " . $jam . " " ." </b> ";
    $a = date ("H");
 ?>
				</div>
			</div>
			
			<div class="card-body">
				<h4 class="card-title" align="center">Input Data Baru Pegawai" </h4>
				<p class="card-text"></p>
				<br /><br />
				<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
				
				<form action="<?php echo base_url(). 'unit_kerja/tambah_aksi'; ?>" method="post">
  <div class="form-group row">
    <label for="nip" class="col-5 col-form-label">Nomor Induk Pegawai</label> 
    <div class="col-7">
      <input id="nip" name="nip" type="text" required class="form-control here">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-5 col-form-label">Nama Lengkap</label> 
    <div class="col-7">
      <input id="nama" name="nama" type="text" required class="form-control here">
    </div>
  </div>
  <div class="form-group row">
    <label for="pass" class="col-5 col-form-label">Password</label> 
    <div class="col-7">
      <input id="pass" name="pass" type="password" required class="form-control here">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-5 col-7">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
				</div>
				
				<div class="col-2"></div>
		</div>
		
				
				
			</div>
			</div>
			
			<br/>
			<div class="alert alert-dark" role="alert">
				<div class="text-right"> -LOGIN AS <b><?php echo $this->session->userdata('ses_nama');?></b> </div>
			</div>
			
		</div>
		<div class="col-1"> </div>
		
	</div>
</div>
<!-- /container --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js') ?>"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>