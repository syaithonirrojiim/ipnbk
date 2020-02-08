<!DOCTYPE html>
<html>
<head>
<title>IPNBK BBIB</title>
<link href="assets/bootstrap/img/logos.png" rel='shortcut icon'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Protected By Commune">
<!-- Bootstrap -->
<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">
<link href="../../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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

<body background="assets/bootstrap/img/as.png">

<br /><br /><br /><br />

<div class="col-12">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4">
		<div class="card">
		<img class="card-img-top" src="assets/bootstrap/img/l1.gif" width="100px" alt="Card image cap">
  <div class="offcard-body" style="background-image:url(assets/bootstrap/img/badan.png)">
	<br /><br />

			<form action="<?php echo base_url().'login/auth'?>" method="post">
				<div class="form-group row">
					<div class="offset-2 col-8" align="center">
						<input id="username" name="username" placeholder="USERNAME" type="text" required class="form-control here">
					</div>
				</div>
				<div class="form-group row">
					<div class="offset-2 col-8" align="center">
						<input id="pass" name="password" placeholder="PASSWORD" type="password" class="form-control here">
					</div>
				</div>
				<div class="form-group row">
					<div class="offset-2 col-8">
						<button name="submit" type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>
			
			
			  </div>
</div>
		</div>
		<div class="col-3"></div>
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