<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem Informasi IPNBK</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/javascript" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.js">
<link rel="stylesheet" type="text/javascript" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.js">
<link rel="stylesheet" type="text/javascript" href="<?php echo base_url() ?>assets/bootstrap/css/npm.js">
</head>

<body background="../assets/bootstrap/img/q.jpg">

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
</body>
</html>