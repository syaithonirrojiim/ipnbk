<!DOCTYPE html>
<html>
<head>
<title>PROFIL</title>
<link href="../../assets/bootstrap/img/logos.png" rel='shortcut icon'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Protedted By Commune">
<!-- Bootstrap -->
<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">
<link href="../../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body background="../../assets/bootstrap/img/q.jpg">
<?php $this->load->view('menues');?>
<!--Include menu--> 
<br />
<br />
<br />
<div class="col-12">
<div class="row">
	<div class="col-1"> </div>
	<div class="col-3">
		<div class="card"> <img class="card-img-top" src="../../assets/bootstrap/img/copy.jpg" alt="Card image cap">
			<div class="card-header" style="text-align:center"><font size="2">©2018 Copyright By <a href="http://twitter.com/ra_hidayatulloh" target="_blank">ra_hidayatulloh</a></font></div>
		</div>
		<div class="alert alert-dark" style="margin-top:37px">
			<div class="text-right"> -LOGIN AS <b><?php echo $this->session->userdata('ses_nama');?></b> </div>
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
				<div class="row">
				<div class="col-2"></div>
				<div class="col-8" align="center">
				<img src="../../assets/bootstrap/img/prof.png" style="alignment-adjust:central" />
				<?php foreach($pengguna as $u){ ?>
				
	<table class="table">
  <tbody>
    <tr>
      <th scope="row">USERNAME</th>
      <td><?php echo $u->nip ?></td>
    </tr>
    <tr>
      <th scope="row">NAMA</th>
      <td><?php echo $u->nama ?></td>
    </tr>
    <tr>
      <th scope="row">Password (Enc)</th>
      <td><?php echo $u->pass ?></td>
    </tr>
  </tbody>
</table>

<?php } ?>
				</div>
				
				<div class="col-2"></div>
		</div>
		
				
				
			</div>
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