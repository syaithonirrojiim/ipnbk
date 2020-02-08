<!DOCTYPE html>
<html>
<head>
<title>IPNBK-BBIB-Singosari</title>
<link href="assets/bootstrap/img/logos.png" rel='shortcut icon'>
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

<body background="assets/bootstrap/img/q.jpg">
<?php $this->load->view('menu');?>
<!--Include menu--> 
<br />
<br />
<br />
<div class="col-12">
	<div class="row">
		<div class="col-1"> </div>
		<div class="col-3">
			<div class="card"> <img class="card-img-top" src="assets/bootstrap/img/pedoman.jpg" alt="Card image cap">
				<div class="card-header">Pedoman Pengukuran Indeks Penerapan Nilai Dasar Budaya Kerja (IPNBK) </div>
				<div class="card-body">
					<p class="card-text">Apakah maksud dan tujuan dilaksanakannya pengukuran IPNBK, serta apa landasan dan bagaimana metode pengukuran IPNBK?</p>
					<a href="assets/bootstrap/files/Permentan-pedoman.pdf" class="btn btn-primary" target="_blank">Lihat File</a> </div>
			</div>
			<br />
			<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
			<div class="card"> <img class="card-img-top" src="assets/bootstrap/img/copy.jpg" alt="Card image cap">
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
					<h5 class="card-title" align="center">Sistem Informasi Pengukuran Indeks Penerapan Nilai Dasar Budaya Kerja (IPNBK)</h5>
					<p class="card-text">Selamat datang di sistem informasi pengukuran IPNBK BBIB Singosari. Sistem informasi ini berfungsi sebagai media/alat untuk membantu proses pengukuran IPNBK. Berikut adalah sekilas mengenai sistem informasi pengukuran IPNBK BBIB Singosari</p>
					<div class="alert alert-primary" role="alert"> <b>Bagaimana cara kerja sistem?</b> </div>
					<p>Secara sederhana berikut adalah bagan bagaimana cara kerja sistem informasi pengukuran IPNBK BBIB Singosari</p>
					<p align="center"><img src="assets/bootstrap/img/user.PNG" width="500px"><br/>
						Alur proses pada <b>USER</b></p>
					<p>Berdasarkan bagan alur proses pada User di atas, yang pertama dilakukan adalah user mengisi seluruh Kuisioner IPNBK, kemudia secara otomatis, sistem akan melakukan proses penyimpanan berdasarkan algoritma yang sudah di tentukan, dan pada kondisi akhir, seluruh data user akan di simpan pada <b><i>Database</i></b></p>
					<br />
					<br />
					<p align="center"><img src="assets/bootstrap/img/alurAdmin.PNG" width="600px"><br/>
						Alur proses pada <b>ADMIN <i>(Include Co-Admin)</i></b></p>
					<p>Selanjutnya adalah alur kerja Admin, berdasarkan bagan di atas, bisa kita lihat bahwa admin dapat melakukan <i>request</i> untuk mengelola data. Kelola data tersebut meliputi Kelola Data Admin itu sendiri, Kelola data Co-Admin, Unit Kerja dan Kelola data pengukuran IPNBK</p>
					<div class="alert alert-primary" role="alert"> <b>Siapakah yang dapat mengakses data yang sudah di masukan dalam kuisioner IPNBK?</b> </div>
					<p>Di dalam sistem ini, ada 3 jenis level hak akses, yaitu sebagai berikut:</p>
					<p>
					<ul class="list-unstyled">
						<li>
							<ul>
								<li>Admin</li>
								<li>Co-Admin</li>
								<li>User (Pengguna)</li>
							</ul>
						</li>
					</ul>
					</p>
					<p>Dari 3 (tiga) brainware/user di atas, level "User (Pengguna)" adalah level 3, yang mana hanya dapat mengelola datanya sendiri. Kemudian level 2 yaitu "Co-Admin", mereka dapat mengelola seluruh data, kecuali data "Admin" dan "Co-Admin" lainnya. Selanjutnya di level 1, yaitu "Admin" yang mampu mengelola seluruh data yang ada pada sistem informasi</p>
					<br />
					<br />
					<div align="right"><a href="#" class="btn btn-primary">Back to TOP</a></div>
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