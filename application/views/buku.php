<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>PERPUSTAKAAN</title>

<!-- load bootstrap css file -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" 
rel="stylesheet">
</head>
<body>

<div class="modal-body row">
<div class="column"></div>
    <h1> DATA BUKU </h1>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">KODE BUKU</th>
      <th scope="col">JUDUL BUKU</th>
      <th scope="col">PENULIS</th>
      <th scope="col">PENERBIT</th>
      <th scope="col">TAHUN TERBIT</th>
      <th scope="col">DELETE</th>
      <th scope="col">EDIT</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    
    foreach ($databukuArr as $dtbk){ ?>
      <tr>
      
      <td><?=$dtbk['kode_buku'] ?></td>
      <td><?=$dtbk['judul_buku'] ?></td>
      <td><?=$dtbk['penulis'] ?></td>
      <td><?=$dtbk['penerbit'] ?></td>
      <td><?=$dtbk['tahun_terbit'] ?></td>
      <td>
      <a href="<?= 
      base_url('delete_databuku/'.$dtbk['kode_buku']);?>" 
      class="btn btn-sm btn-danger">Delete</a>
      <td>
      <a href="<?= 
      base_url('edit_dtbk/'.$dtbk['kode_buku']);?>" 
      class="btn btn-sm btn-danger">Edit</a>
      <td>
      </tr>
      <?php
  
}?>

</tbody>
</table>

      <a href="<?= 
        base_url('add_databuku/'.$dtbk['kode_buku']);?>" 
        class="btn btn-sm btn-danger">Tambah Data Buku</a>
  </div>
</div>

  <!-- load jquery js file -->
<script src="<?php echo 
base_url('assets/js/jquery.min.js');?>"></script>
 <!-- load bootstrap js file -->
 <script src="<?php echo 
base_url('assets/js/bootstrap.min.js');?>"></script>

</body>
</html>