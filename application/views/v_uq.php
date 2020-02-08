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
						<form id="regForm" action="<?php echo base_url(). 'uq/tambah_aksi'; ?>" method="post">
							<font size="5"><b>
							<center>
								KUISIONER IPNBK-BBIB SINGOSARI
							</center>
							</b></font> 
							
							<!-- One "tab" for each step in the form: -->
							<div class="tab" style="margin-top:30px"><font size="4" color="#009933">
								<center>
									<b>BIODATA</b>
								</center>
								</font>
								<div class="form-group row" style="margin-top:27px">
									<label class="col-4 col-form-label" for="nama_unit_kerja">Nama Unit Kerja</label>
									<div class="col-8">
										<input id="nama_unit_kerja" name="nama_unit_kerja" placeholder="Nama Unit Kerja" type="text" required class="form-control here">
										<input type="hidden" hidden="hidden" id="id_kabeh" name="id_kabeh" value="<?php echo $this->session->userdata('ses_iid');?>">
										<input type="hidden" hidden="hidden" id="status" name="status" value="1">
									</div>
								</div>
								<div class="form-group row">
									<label for="jabatan" class="col-4 col-form-label">Jabatan</label>
									<div class="col-8">
										<select id="jabatan" name="jabatan" class="form-control" required="required">
											<option value="Eselon I">Eselon I</option>
											<option value="Eselon II">Eselon II</option>
											<option value="Eselon III">Eselon III</option>
											<option value="Eselon IV">Eselon IV</option>
											<option value="Eselon V">Eselon V</option>
											<option value="Fungsional Tertentu">Fungsional Tertentu</option>
											<option value="Fungsional Umum (Staf)">Fungsional Umum (Staf)</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4">Golongan</label>
									<div class="col-8">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input name="golongan" type="radio" class="form-check-input" value="I" required>
												I </label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input name="golongan" type="radio" class="form-check-input" value="II" required>
												II </label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input name="golongan" type="radio" class="form-check-input" value="III" required>
												III </label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input name="golongan" type="radio" class="form-check-input" value="IV" required>
												IV </label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label>
									<div class="col-8">
										<select id="jenis_kelamin" name="jenis_kelamin" required="required" class="form-control">
											<option value="Laki-Laki">Laki-Laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="umur" class="col-4 col-form-label">Umur</label>
									<div class="col-8">
										<input id="umur" name="umur" placeholder="Umur*" type="text" class="form-control here" aria-describedby="umurHelpBlock" required>
										<span id="umurHelpBlock" class="form-text text-muted"><font color="#FF0000">*Dalam Angka (eg: 25)</font></span> </div>
								</div>
								<div class="form-group row">
									<label for="pendidikan_terakhir" class="col-4 col-form-label">Pendidikan Terakhir</label>
									<div class="col-8">
										<select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control" required="required">
											<option value="SD">SD</option>
											<option value="SMP">SMP</option>
											<option value="SMA">SMA</option>
											<option value="D1/D3">D1/D3</option>
											<option value="S-1">S-1</option>
											<option value="S-2">S-2</option>
											<option value="S-3">S-3</option>
										</select>
									</div>
								</div>
							</div>
							<div class="tab" style="margin-top:30px"><font size="4" color="#009933"><center><b>KOMITMEN</b></center></font>
								<div class="card" style="margin-top:27px">
									<div class="card-body" style="background-color:#CFF">
									<p align="justify"><b>
									Keteguhan hati, memiliki tekad yang mantap dan menepati janji untuk melakukan atau mewujudkan visi, misi, nilai dan makna kerja.<br />
Indikator:<br />
<ul class="list-unstyled">
  <li>1.1.	Menaati peraturan/kesepakatan.</li>
  <li>1.2.	Melakukan iternalisasi tujuan organisasi.</li>
  <li>1.3.	Menyamakan persepsi dalam langkah kerja.</li>
  <li>1.4.	Konsisten dan loyal terhadap pelaksanaan kerja.</li>
  <li>1.5.	Menepati janji.</li>
  <li>1.6.	Menggunakan produk lokal.</li></b>
</ul>

									</p></div>
								</div>
								
								
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">1.1</label><label class="col-11">Apakah Saudara pernah melanggar peraturan/kesepakatan dalam melaksanakan tugas?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a1" type="radio" class="form-check-input" value="1" required>
                Selalu
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a1" type="radio" class="form-check-input" value="2" required>
                Kadang-kadang (3-6 kali)
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a1" type="radio" class="form-check-input" value="3" required>
                Pernah (1-2 kali)
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a1" type="radio" class="form-check-input" value="4" required>
                Tidak pernah
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:20px">
    <label class="col-1">1.2</label><label class="col-11">Apakah pimpinan Saudara konsisten dalam penegakan peraturan/kesepakatan?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a2" type="radio" class="form-check-input" value="1" required>
                Tidak konsisten
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a2" type="radio" class="form-check-input" value="2" required>
                Kurang konsisten
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a2" type="radio" class="form-check-input" value="3" required>
                Cukup konsisten
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a2" type="radio" class="form-check-input" value="4" required>
                Konsisten
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:20px">
    <label class="col-1">1.3</label><label class="col-11">Apakah pimpinan Saudara melakukan internalisasi tujuan organisasi?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a3" type="radio" class="form-check-input" value="1" required>
                Tidak pernah
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a3" type="radio" class="form-check-input" value="2" required>
                Pernah (1-2 kali)
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a3" type="radio" class="form-check-input" value="3" required>
                Kadang-kadang (3-6 kali)
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a3" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:20px">
    <label class="col-1">1.4</label><label class="col-11">Apakah pimpinan Saudara menyamakan persepsi dalam langkah kerja?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a4" type="radio" class="form-check-input" value="1" required>
                Tidak pernah
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a4" type="radio" class="form-check-input" value="2" required>
                Pernah (1-2 kali)
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a4" type="radio" class="form-check-input" value="3" required>
                Kadang-kadang (3-6 kali)
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a4" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:20px">
    <label class="col-1">1.5</label><label class="col-11">Apakah Saudara konsisten dalam melaksanakan tugas?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a5" type="radio" class="form-check-input" value="1" required>
                Tidak konsisten
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a5" type="radio" class="form-check-input" value="2" required>
                Kurang konsisten
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a5" type="radio" class="form-check-input" value="3" required>
                Cukup konsisten
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a5" type="radio" class="form-check-input" value="4" required>
                Konsisten
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:20px">
    <label class="col-1">1.6</label><label class="col-11">Apakah Saudara loyal terhadap pelaksanaan tugas?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a6" type="radio" class="form-check-input" value="1" required>
                Tidak loyal
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a6" type="radio" class="form-check-input" value="2" required>
                Kurang loyal
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a6" type="radio" class="form-check-input" value="3" required>
                Cukup loyal
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a6" type="radio" class="form-check-input" value="4" required>
                Loyal
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:20px">
    <label class="col-1">1.7</label><label class="col-11">Apakah Saudara menepati janji?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a7" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a7" type="radio" class="form-check-input" value="2" required>
                Kurang-kadang
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a7" type="radio" class="form-check-input" value="3" required>
                Sering
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a7" type="radio" class="form-check-input" value="4" required>
                Menepati
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:20px">
    <label class="col-1">1.8</label><label class="col-11">Apakah Saudara menggunakan produk lokal?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a8" type="radio" class="form-check-input" value="1" required>
                Tidak menggunakan
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a8" type="radio" class="form-check-input" value="2" required>
                Sebagian kecil
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a8" type="radio" class="form-check-input" value="3" required>
                Sebagian besar
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="a8" type="radio" class="form-check-input" value="4" required>
                Seluruhnya
        </label>
      </div>
    </div>
</div>
  
  
							</div>
							<div class="tab" style="margin-top:30px"><font size="4" color="#009933"><center><b>KETELADANAN</b></center></font>
								<div class="card" style="margin-top:27px">
									<div class="card-body" style="background-color:#CFF">
									<p align="justify"><b>
									Sikap, perilaku, dan kebiasaan yang secara sadar dan tidak sadar dapat ditiru dan menjadi teladan bagi orang lain.<br />
Indikator:<br />
<ul class="list-unstyled">
  <li>2.1.	Berperan aktif meningkatkan kinerja.</li>
  <li>2.2.	Membangun keterbukaan dan komunikasi.</li>
  <li>2.3.	Menghargai pendapat orang lain.</li>
  <li>2.4.	Bersikap tegas dan berani.</li>
  <li>2.5.	Bersikap peduli.</li></b>
</ul>

									</p></div></div>
									
									

<div class="form-group row" style="margin-top:27px">
    <label class="col-1">2.1</label><label class="col-11">Apakah Saudara berperan aktif dalam meningkatkan kinerja?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b1" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b1" type="radio" class="form-check-input" value="2" required>
                Kurang
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b1" type="radio" class="form-check-input" value="3" required>
                Cukup
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b1" type="radio" class="form-check-input" value="4" required>
                Berperan
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">2.2</label><label class="col-11">Apakah pimpinan Saudara berperan aktif dalam meningkatkan kinerja?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b2" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b2" type="radio" class="form-check-input" value="2" required>
                Kurang
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b2" type="radio" class="form-check-input" value="3" required>
                Cukup
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b2" type="radio" class="form-check-input" value="4" required>
                Berperan
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">2.3</label><label class="col-11">Apakah pimpinan Saudara membangun keterbukaan dan komunikasi?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b3" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b3" type="radio" class="form-check-input" value="2" required>
                Kurang membangun
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b3" type="radio" class="form-check-input" value="3" required>
                Cukup membangun
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b3" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">2.4</label><label class="col-11">Apakah Saudara menghargai pendapat orang lain?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b4" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b4" type="radio" class="form-check-input" value="2" required>
                Kurang menghargai
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b4" type="radio" class="form-check-input" value="3" required>
                Cukup menghargai
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b4" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">2.5</label><label class="col-11">Apakah pimpinan Saudara bersikap tegas dan berani?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b5" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b5" type="radio" class="form-check-input" value="2" required>
                Kurang
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b5" type="radio" class="form-check-input" value="3" required>
                Cukup
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b5" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">2.6</label><label class="col-11">Apakah Saudara peduli terhadap lingkungan kerja?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b6" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b6" type="radio" class="form-check-input" value="2" required>
                Kurang peduli
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b6" type="radio" class="form-check-input" value="3" required>
                Cukup peduli
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="b6" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>



							</div>
							<div class="tab" style="margin-top:30px"><font size="4" color="#009933"><center><b>PROFESIONALISME</b></center></font>
								<div class="card" style="margin-top:27px">
									<div class="card-body" style="background-color:#CFF">
									<p align="justify"><b>
									Terampil, handal dan sangat bertanggung jawab dalam menjalankan profesinya sebagai PNS Balai Besar Inseminasi Buatan (BBIB) Singosari.<br />
Indikator:<br />
<ul class="list-unstyled">
  <li>3.1.	Meningkatkan pengetahuan dan keterampilan sesuai bidang tugasnya.</li>
  <li>3.2.	Melaksanakan tugas sesuai kompetensi.</li>
  <li>3.3.	Melaksanakan tugas sesuai Standar Operasional Prosedur (SOP).</li>
  <li>3.4.	Menyelesaikan pekerjaan sesuai target kinerja.</li>
  <li>3.5.	Melaksanakan pelayanan prima.</li></b>
</ul>

									</p></div></div>
									
									
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">3.1</label><label class="col-11">Apakah Saudara meningkatkan pengetahuan dan keterampilan yang diperlukan dalam melaksanakan tugas?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c1" type="radio" class="form-check-input" value="1" required>
                Tidak pernah
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c1" type="radio" class="form-check-input" value="2" required>
                Pernah
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c1" type="radio" class="form-check-input" value="3" required>
                Kadang-kadang
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c1" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">3.2</label><label class="col-11">Apakah pimpinan Saudara memberikan fasilitas untuk meningkatkan pengetahuan dan keterampilan?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c2" type="radio" class="form-check-input" value="1" required>
                Tidak pernah
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c2" type="radio" class="form-check-input" value="2" required>
                Pernah
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c2" type="radio" class="form-check-input" value="3" required>
                Kadang-kadang
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c2" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">3.3</label><label class="col-11">Apakah penugasan kepada Saudara sesuai dengan kompetensi yang dimiliki?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c3" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c3" type="radio" class="form-check-input" value="2" required>
                Kurang sesuai
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c3" type="radio" class="form-check-input" value="3" required>
               Cukup sesuai
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c3" type="radio" class="form-check-input" value="4" required>
                Sesuai
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">3.4</label><label class="col-11">Apakah Saudara bekerja sesuai Standar Operasional Prosedur (SOP)/Pedoman?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c4" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c4" type="radio" class="form-check-input" value="2" required>
				Kurang sesuai
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c4" type="radio" class="form-check-input" value="3" required>
               Cukup sesuai
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c4" type="radio" class="form-check-input" value="4" required>
                Sesuai
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">3.5</label><label class="col-11">Apakah Saudara menyelesaikan pekerjaan sesuai target kinerja?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c5" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c5" type="radio" class="form-check-input" value="2" required>
                Kurang sesuai
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c5" type="radio" class="form-check-input" value="3" required>
               Cukup sesuai
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c5" type="radio" class="form-check-input" value="4" required>
                Sesuai
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">3.6</label><label class="col-11">Apakah Saudara melaksanakan pelayanan prima?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c6" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c6" type="radio" class="form-check-input" value="2" required>
                Kurang
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c6" type="radio" class="form-check-input" value="3" required>
               Cukup
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="c6" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>


							</div>
							<div class="tab" style="margin-top:30px"><font size="4" color="#009933"><center><b>INTEGRITAS</b></center></font>
								<div class="card" style="margin-top:27px">
									<div class="card-body" style="background-color:#CFF">
									<p align="justify"><b>
									Selalu konsisten dalam perkataan dan perbuatan.<br />
Indikator:<br />
<ul class="list-unstyled">
  <li>4.1.	Bersikap jujur.</li>
  <li>4.2.	Bertanggung jawab.</li>
  <li>4.3.	Bertindak sesuai nilai dan norma yang berlaku.</li>
  <li>4.4.	Berinisiatif melaporkan penyimpangan.</li>
  <li>4.5.	Menggunakan bahasa Indonesia yang baik dan benar.</li></b>
</ul>

									</p></div></div>
									

<div class="form-group row" style="margin-top:27px">
    <label class="col-1">4.1</label><label class="col-11">Apakah Saudara bersikap dan bertindak jujur?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d1" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d1" type="radio" class="form-check-input" value="2" required>
                Kurang
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d1" type="radio" class="form-check-input" value="3" required>
               Cukup
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d1" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">4.2</label><label class="col-11">Apakah Saudara bertanggung jawab dalam melaksanakan tugas?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d2" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d2" type="radio" class="form-check-input" value="2" required>
                Kurang
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d2" type="radio" class="form-check-input" value="3" required>
               Cukup
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d2" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">4.3</label><label class="col-11">Apakah Saudara bertindak sesuai nilai dan norma yang berlaku?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d3" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d3" type="radio" class="form-check-input" value="2" required>
                Kurang
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d3" type="radio" class="form-check-input" value="3" required>
               Cukup
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d3" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">4.4</label><label class="col-11">Apakah Saudara berinisiatif melaporkan penyimpangan?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d4" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d4" type="radio" class="form-check-input" value="2" required>
                Kurang
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d4" type="radio" class="form-check-input" value="3" required>
               Cukup
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d4" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">4.5</label><label class="col-11">Apakah saudara menggunakan bahasa Indonesia yang baik dan benar?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d5" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d5" type="radio" class="form-check-input" value="2" required>
                Kurang
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d5" type="radio" class="form-check-input" value="3" required>
               Cukup
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="d5" type="radio" class="form-check-input" value="4" required>
                Selalu
        </label>
      </div>
    </div>
</div>


							</div>
							<div class="tab" style="margin-top:30px"><font size="4" color="#009933"><center><b>DISIPLIN</b></center></font>
								<div class="card" style="margin-top:27px">
									<div class="card-body" style="background-color:#CFF">
									<p align="justify"><b>
									Sikap yang selalu taat pada peraturan, norma dan prinsip-prinsip tertentu, serta mengikuti jadwal dan sistem kerja yang tersusun dan terencana dengan baik.<br />
Indikator:<br />
<ul class="list-unstyled">
  <li>5.1.	Mentaati ketentuan jam kerja.</li>
  <li>5.2.	Pemakaian seragam dan atribut kerja sesuai peraturan.</li>
  <li>5.3.	Mengikuti upacara.</li>
  <li>5.4.	Menggunakan fasilitas kantor sesuai peraturan.</li></b>
</ul>

									</p></div></div>
									
									
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">5.1</label><label class="col-11">Apakah Saudara pernah melanggar ketentuan jam kerja?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e1" type="radio" class="form-check-input" value="1" required>
                Selalu
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e1" type="radio" class="form-check-input" value="2" required>
                Kadang-kadang (3-6 kali)
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e1" type="radio" class="form-check-input" value="3" required>
               Pernah (1-2 kali)
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e1" type="radio" class="form-check-input" value="4" required>
                Tidak pernah
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">5.2</label><label class="col-11">Apakah Saudara pernah melanggar ketentuan pemakaian seragam dan atribut kerja sesuai peraturan?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e2" type="radio" class="form-check-input" value="1" required>
                Selalu
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e2" type="radio" class="form-check-input" value="2" required>
                Kadang-kadang (3-6 kali)
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e2" type="radio" class="form-check-input" value="3" required>
               Pernah (1-2 kali)
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e2" type="radio" class="form-check-input" value="4" required>
                Tidak pernah
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">5.3</label><label class="col-11">Apakah Saudara mengikuti upacara?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e3" type="radio" class="form-check-input" value="1" required>
                Selalu
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e3" type="radio" class="form-check-input" value="2" required>
                Kadang-kadang (3-6 kali)
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e3" type="radio" class="form-check-input" value="3" required>
               Pernah (1-2 kali)
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e3" type="radio" class="form-check-input" value="4" required>
                Tidak pernah
        </label>
      </div>
    </div>
</div>
<hr/>
<div class="form-group row" style="margin-top:27px">
    <label class="col-1">5.4</label><label class="col-11">Apakah Saudara menggunakan fasilitas kantor sesuai peraturan?</label>
	</div><div class="form-group row"> 
    <div class="offset-1 col-11">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e4" type="radio" class="form-check-input" value="1" required>
                Tidak
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e4" type="radio" class="form-check-input" value="2" required>
				Kurang sesuai
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e4" type="radio" class="form-check-input" value="3" required>
               Cukup sesuai
        </label>
      </div>
	  <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="e4" type="radio" class="form-check-input" value="4" required>
                Sesuai
        </label>
      </div>
    </div>
</div>

							</div>
							<div style="overflow:auto;">
								<div style="float:right;">
								
								
									<button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-primary">Previous</button>
									<button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-primary">Next</button>
								</div>
							</div>
							
							<!-- Circles which indicates the steps of the form: -->
							<div style="text-align:center;margin-top:40px;"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
						</form>
						
					<?php  ?>
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
</body>
</html>