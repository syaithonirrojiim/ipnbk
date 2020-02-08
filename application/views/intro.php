<!DOCTYPE html>
<html>
<head>
<title>Q-IPNBK</title>
<link href="assets/bootstrap/img/logos.png" rel='shortcut icon'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Protedted By Commune">
<!-- Bootstrap -->
<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap/css/qq.css') ?>" rel="stylesheet">
<link href="../../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- Include SmartWizard CSS -->
<link href="css/smart_wizard.css" rel="stylesheet" type="text/css" />

<!-- Optional SmartWizard theme -->
<link href="css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />

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
			<br /><div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
			<div class="card"> <img class="card-img-top" src="assets/bootstrap/img/copy.jpg" alt="Card image cap">
				<div class="card-header" style="text-align:center"><font size="2">©2018 Copyright By <a href="http://twitter.com/ra_hidayatulloh" target="_blank">ra_hidayatulloh</a></font></div>
			</div>
			<div class="alert alert-dark" style="margin-top:30px">
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
				<?php
				

				?>
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body" style="background-color:#CFF"> <font size="4">
									<center>
										<b>KUISIONER PENGUKURAN<br/>
										INDEKS PENERAPAN NILAI BUDAYA KERJA (IPNBK)<br/>
										DI LINGKUNAN BALAI BESAR INSEMINASI BUATAN (BBIB) SINGOSARI<br/>
										</b>
									</center>
									</font><br/>
									<p>Bapak/Ibu/Saudara pegawai BBIB Singosari yang terhormat</p>
									<p align="justify">Dalam rangka pengembangan etos kerja, dan peningkatan kiualitas kinerja pegawai secara intensif dan menyeluruh sebagai salah satu program reformasi birokrasi di lingkungan BBIB Singosari, perlu dilakukan penerapan nilai budaya kerja. Untuk mengetahui tingkat penerapan nilai budaya kerja, perlu dilakukan monitoring dan evaluasi penerapan nilai budaya kerja melalui pengukuran indeks penilaian nilai budaya kerja BBIB Singosari. Indeks tersebut di peroleh berdasarkan pendapat seluruh pegawai yang di kumpulkan melalui:<br/>
										<b>Survey Indeks Penerapan Nilai Budaya Kerja (IPNBK) BBIB Singosari.</b> </p>
									<p align="justify">Survey ini <b>menanyakan pendapat/persepsi</b> para pegawai BBIB Singosari mengenai pengalaman sehari-hari dalam menerapkan nilai budaya kerja pada unit kerjanya masing-masing.</p>
									<p align="justify">Maksud survey ini agar dapat di jadikan acuan bagi setiap pemimpin unit kerja dalam melakukan penelitian dan pemantauan penerapan nilai dasar budaya kerja pada unit kerja yang dipimpinnya. Tujuannya untuk memperoleh data dan informasi yang akurat sebagai bahan kebijakan pimpinan dalam pengambilan keputusan untuk memperbaiki dan meningkatkan budaya kerja di lingkungan BBIB Singosari.</p>
									<p align="justify">
									
									<ul class="list-unstyled">
										Ketentuan pengisian sebagai berikut:
										<ol>
											<li>Setiap pegawai wajib mengisi kuisioner;</li>
											<li>Setiap pertanyaan wajib dijawab;</li>
											<li>Setiap pertanyaan hanya 1 (satu) jawaban;</li>
											<li>Setiap pertanyaal dijawab berdasarkan pendapat secara jujur dan sesuai keadaan yang sebenarnya;</li>
											<li>Jawaban hanya dipergunakan untuk kepentingan survey ini;.</li>
											<li>Keterangan yang di berikan bersifat terbuka, tidak dirahasiakan dan tidak menuliskan nama responden;</li>
											<li>Survey ini tidak ada hubungannya dengan promosi ataupun demosi pegawai BBIB Singosari.</li>
										</ol>
									</ul>
									</p>
									<p>Atas perhatian dan kerjasamanya, kami sampaikan terimakasih.</p>
									<p align="right"><b>TIM SURVEY IPNBK<br/>
										BBIB SINGOSARI</b> </p>
								</div>
							</div>
							<br/>
							<?php
							$status = $this->session->userdata('stats');
							$id_user = $this->session->userdata('ses_iid');
							if($status == '1'){ ?>
								
								
								<div class="alert alert-success" role="alert">
  <h4 class="alert-heading"><b>Selesai!!</b></h4>
  <p>Terimakasih, Anda sudah mengisi QUISIONER INDEKS PENGUKURAN NILAI DASAR PENERAPAN BUDAYA KERJA (IPNBK) BALAI BESAR INSEMINASI BUATAN (BBIB) - SINGOSARI</p>
  <hr>
  <p class="mb-0">Tim survey IPNBK-BBIB Singosari</p>
</div>

							<?php
							}else if($status == '0'){
								?>
								
								<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading"><b>Perhatian!!</b></h4>
  <p>Anda belum mengisi QUISIONER INDEKS PENGUKURAN NILAI DASAR PENERAPAN BUDAYA KERJA (IPNBK) BALAI BESAR INSEMINASI BUATAN (BBIB) - SINGOSARI. Silahkan isi dengan memilih tombol berikut;</p>
  <p align="center"><a href="<?php echo base_url('uq') ?>" class="btn btn-primary">QUISIONER IPNBK</a></p>
  <hr>
  <p class="mb-0">Tim survey IPNBK-BBIB Singosari</p>
</div>
								
								<?php
								}
							
							?>
						</div>
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
<script src="<?php echo base_url('assets/bootstrap/js/jquery.qq.js') ?>"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
<script>
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>

</body>
</html>