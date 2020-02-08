<!DOCTYPE html>
<html>
<head>
<title>Biodata</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Produk By Mfikri.com">
<!-- Bootstrap -->
<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">
<link href="../../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body background="../assets/bootstrap/img/b.jpg">

<br /><br /><br />
<div class="col-12">
	<?php $this->load->view('menu');?>
	<!--Include menu-->
	<div class="container">
		<div class="row">
			<h2>Welcome back <?php echo $this->session->userdata('ses_nama');?></h2>
		</div>
	</div>
</div>
<!-- /container -->

<center>
	<?php echo anchor('biodata/tambah','Tambah Data'); ?>
</center>
<table style="margin:20px auto;" border="1">
	<tr>
		<th>No</th>
		<th>Nama Unit Kerja</th>
		<th>Jabatan</th>
		<th>Golongan</th>
		<th>Jenis Kelamin</th>
		<th>Umur</th>
		<th>Pendidikan Terakhir</th>
		<th>Action</th>
	</tr>
	<?php 
		$no = 1;
		foreach($biodata as $u){ 
		?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $u->nama_unit_kerja ?></td>
		<td><?php echo $u->jabatan ?></td>
		<td><?php echo $u->golongan ?></td>
		<td><?php echo $u->jenis_kelamin ?></td>
		<td><?php echo $u->umur ?></td>
		<td><?php echo $u->pendidikan_terakhir ?></td>
		<td><?php echo anchor('biodata/edit/'.$u->id_biodata,'Edit'); ?> <?php echo anchor('biodata/hapus/'.$u->id_biodata,'Hapus'); ?></td>
	</tr>
	<?php } ?>
</table>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js') ?>"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>