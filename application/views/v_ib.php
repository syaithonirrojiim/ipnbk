<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
    
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">
    <link href="../../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>


<body background="../../assets/bootstrap/img/b.jpg">




<br /><br />
    <div class="container-fluid">
	<div class="row">
    

				<div class="col-12">
                	<?php $this->load->view('menu');?> <!--Include menu-->
      				<div class="container">
			        	<div class="row">
			        		<h2>Welcome back <?php echo $this->session->userdata('ses_nama');?></h2>
			        	</div>
					</div>
				</div>
    
		<div class="col-md-12">
            <br /><br /><br />
            
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
                
                <form action="<?php echo base_url(). 'index.php/biodata/tambah_aksi'; ?>" method="post">
  <div class="form-group row">
    <label for="nama_unit_kerja" class="col-4 col-form-label"><font color="#CCCCCC">Nama Unit Kerja</font></label> 
    <div class="col-8">
      <input id="nama_unit_kerja" name="nama_unit_kerja" type="text" required="required" class="form-control here">
    </div>
  </div>
  <div class="form-group row">
    <label for="jabatan" class="col-4 col-form-label"><font color="#CCCCCC">Jabatan</font></label> 
    <div class="col-8">
      <select id="jabatan" name="jabatan" required="required" class="form-control">
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
    <label class="col-4"><font color="#CCCCCC">Golongan</font></label> 
    <div class="col-8">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="golongan" type="radio" checked="checked" required="required" class="form-check-input" value="I">
                <font color="#CCCCCC">I</font>
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="golongan" type="radio" required="required" class="form-check-input" value="II">
                <font color="#CCCCCC">II</font>
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="golongan" type="radio" required="required" class="form-check-input" value="III">
                <font color="#CCCCCC">III</font>
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="golongan" type="radio" required="required" class="form-check-input" value="IV">
                <font color="#CCCCCC">IV</font>
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_kelamin" class="col-4 col-form-label"><font color="#CCCCCC">Jenis Kelamin</font></label> 
    <div class="col-8">
      <select id="jenis_kelamin" name="jenis_kelamin" required="required" class="form-control">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label"><font color="#CCCCCC">Umur</font></label> 
    <div class="col-8">
      <input id="umur" name="umur" type="text" aria-describedby="umurHelpBlock" required="required" class="form-control here" placeholder="(Dalam Bentuk Angka Bilangan Bulat)">
    </div>
  </div>
  <div class="form-group row">
    <label for="pendidikan_terakhir" class="col-4 col-form-label"><font color="#CCCCCC">Pendidikan Terakhir</font></label> 
    <div class="col-8">
      <select id="pendidikan_terakhir" name="pendidikan_terakhir" required="required" class="form-control">
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
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
				</div>
				<div class="col-md-3">
				</div>
			</div>
		</div>
	</div>
</div>
<br />	



    
<!-- 
    <form>
	    <table style="margin:20px auto;">
			<tr>
				<td>Nama Unit Kerja</td>
				<td><input type="text" name="nama_unit_kerja"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><input type="text" name="jabatan"></td>
			</tr>
			<tr>
				<td>Golongan</td>
				<td><input type="text" name="golongan"></td>
			</tr>
            <tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin"></td>
			</tr>
            <tr>
				<td>Usia</td>
				<td><input type="text" name="umur"></td>
			</tr>
            <tr>
				<td>Pendidikan Terakhir</td>
				<td><input type="text" name="pendidikan_terakhir"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	-->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>


</html>