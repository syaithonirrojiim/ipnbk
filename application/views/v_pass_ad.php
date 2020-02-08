<!DOCTYPE html>
<html>
<head>
<title>GANTI PASSWORD ADMIN/CO</title>
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
		<div class="card"> <img class="card-img-top" src="../../assets/bootstrap/img/bar.jpg" alt="Card image cap">
			<div class="card-header" style="text-align:center; background-color:#666"><font color="#FFFFFF"><b>BBIB SINGOSARI</b></font></div>
		</div>
		<br />
		<div class="card"> <img class="card-img-top" src="../../assets/bootstrap/img/copy.jpg" alt="Card image cap">
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
				<h4 class="card-title" align="center">Ganti Password Data Admin/Co "<?php echo $this->session->userdata('ses_nama');?>" </h4>
				<p class="card-text"></p>
				<br /><br />
				<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
				<?php foreach($admin as $u){ ?>
				<form action="<?php echo base_url(). 'co_admin/pass'; ?>" method="post">
  <div class="form-group row">
    <label for="nip" class="col-5 col-form-label">Username</label> 
    <div class="col-7">
		<input type="hidden" id="id" name="id" type="text" required class="form-control here" value="<?php echo $u->id ?>">
      <input readonly="readonly" id="nip" name="id_admin" type="text" required class="form-control here" value="<?php echo $u->id_admin ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-5 col-form-label">Nama Lengkap</label> 
    <div class="col-7">
      <input readonly="readonly" id="nama" name="nama" type="text" required class="form-control here" value="<?php echo $u->nama ?>">
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
<?php } ?>
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