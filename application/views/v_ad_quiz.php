<!DOCTYPE html>
<html>
<head>
<title>DATA UNIT KERJA</title>
<link href="../assets/bootstrap/img/logos.png" rel='shortcut icon'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Protected By Commune">
<!-- Bootstrap -->
<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">
<link href="../../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

<style>
#notifications {
    cursor: pointer;
    position: fixed;
    right: 0px;
    z-index: 9999;
    bottom: 0px;
    margin-bottom: 22px;
    margin-right: 15px;
    min-width: 300px; 
    max-width: 800px;  
}
</style>


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

</div>
		<br />
		<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
		<div class="card"> <img class="card-img-top" src="../assets/bootstrap/img/copy.jpg" alt="Card image cap">
			<div class="card-header" style="text-align:center"><font size="2">©2018 Copyright By <a href="http://instagram.com/ra.hidayatulloh" target="_blank">ra.hidayatulloh</a></font></div>
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
				<h4 class="card-title" align="center">DATA STATUS KUESIONER IPNBK</h4>
				<p class="card-text"></p>
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">NIP</th>
							<th scope="col">Nama Lengkap Pegawai</th>
							<th scope="col"><center>Status<font color="#FF0000">*</font></center></th>
							<th scope="col"><center>Action<font color="#FF0000">**</font></center></th>
						</tr>
					</thead>
					<tbody>
						<?php 
		$no = 1;
		foreach($pengguna as $u){ 
		?>
						<tr>
							<th scope="row"><?php echo $no++ ?></th>
							<td><?php echo $u->nip ?></td>
							<td><?php echo $u->nama ?></td>
							<td align="center" bgcolor="#99CCCC"><?php 
							$st = $u->status;
							if($st == '1'){?>
								<img src="../assets/bootstrap/img/sudah.png">
							<?php
							}else if($st == '0'){?>
								<img src="../assets/bootstrap/img/belum.png">
							<?php
							}?></td>
							<td align="center" bgcolor="#CCFFCC">
							<?php if($st == '1'){
								echo anchor('view/kosong/'.$u->id,'<img src="../assets/bootstrap/img/edit_sudah.png">'); } if($st == '0'){ echo anchor('view/isi/'.$u->id,'<img src="../assets/bootstrap/img/edit_belum.png">'); }?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<br /><br />
				<table align="center">
					<tr><td></td></tr>
					<tr>
						<td><font color="#FF0000"><b>*</b></font><img src="../assets/bootstrap/img/sudah.png"></td>
						<td><b><font color="#FF0000">Sudah</font></b> mengisi Kueisioner IPNBK</td>
						<td width="100px"></td>
						<td><font color="#FF0000"><b>**</b></font> <img src="../assets/bootstrap/img/edit_sudah.png"></td>
						<td>Ubah ke <b><font color="#FF0000">SUDAH</font></b> mengisi Quisioner</td>
					</tr>
					<tr>
						<td><font color="#FFF"><b>*</b></font><img src="../assets/bootstrap/img/belum.png"></td>
						<td><b><font color="#FF0000">Belum</font></b> mengisi Kueisioner IPNBK</td>
						<td width="100px"></td>
						<td><font color="#FFF"><b>** </b></font><img src="../assets/bootstrap/img/edit_belum.png"></td>
						<td>Ubah ke <b><font color="#FF0000">BELUM</font></b> mengisi Quisioner</td>
					</tr>
				</table>
				<br /><br />
				<div class="alert alert-success" role="alert">
  				<h4 class="alert-heading">Data Hasil Keisioner IPNBK</h4>
  				<p>Untuk melihat data hasil dari quisioner IPNBK BBIB-Singosari, silahkan pilih tombol berikut;</p><br />
				<p align="center"><a href="<?php echo base_url('view/export') ?>" class="btn btn-success">DATA Q-IPNBK</a></p><br /><br />
 				<hr>
  				<p class="mb-0">TIM SURVEY IPNBK BBIB-Singosari</p>
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
<script>
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>
</body>
</html>