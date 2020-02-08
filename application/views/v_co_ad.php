<!DOCTYPE html>
<html>
<head>
<title>DATA ADMIN/CO</title>

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
  <a href="#" class="list-group-item list-group-item-action active">
    Lihat Data Admin/Co
  </a>
  <a href="<?php echo base_url().'page/tambah_co_ad'?>" class="list-group-item list-group-item-action">Tambah data baru Admin/Co</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Delete all</a>
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
				<h4 class="card-title" align="center">DATA ADMIN &/ CO-ADMIN SI IPNBK BBIB SINGOSARI</h4>
				<p class="card-text"></p>
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Username</th>
							<th scope="col">Nama</th>
							<th scope="col" style="text-align:center">Level</th>
							<th scope="col" style="text-align:center"><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
						<?php 
		$no = 1;
		foreach($admin as $u){ 
		?>
		
						<tr>
							<th scope="row"><?php echo $no++ ?></th>
							<td><?php echo $u->id_admin ?></td>
							<td><?php echo $u->nama ?></td>
							<td align="center"><?php echo $u->level ?></td>
							<td align="center"><?php echo anchor('co_admin/edit/'.$u->id,'<img src="../assets/bootstrap/img/up.png">'); ?> - <?php echo anchor('co_admin/hapus/'.$u->id,'<img src="../assets/bootstrap/img/del.png">'); ?></td>
						</tr>


						<?php } ?>
					</tbody>
				</table>
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