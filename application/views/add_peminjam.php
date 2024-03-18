<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PEMINJAM</title>
 <!-- load bootstrap css file -->
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" 
rel="stylesheet">
</head>
<body>
<div class="modal-body row">
  
  <div class="col-md-6">
    <!-- Your second column here -->
    <h1>DATA BUKU</h1>
    <form action="<?php echo base_url('save_peminjam');?>" method="post">
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim" id="nim" 
                    aria-describedby="nimHelp">
                </div>
                <div class="mb-3">
                    <label for="nama_anggota" class="form-label">NAMA ANGGOTA</label>
                    <input type="text" class="form-control" name="nama_anggota" id="nama_anggota"
                     aria-describedby="nama_anggotaHelp">
                </div>
                <div class="mb-3">
                    <label for="jurusan_anggota" class="form-label">JURUSAN ANGGOTA</label>
                    <input type="text" class="form-control" name="jurusan_anggota" id="jurusan_anggota"
                     aria-describedby="jurusan_anggotaHelp">
                </div>
                <div class="mb-3">
                    <label for="notelp_anggota" class="form-label">NO TELEPON</label>
                    <input type="text" class="form-control" name="notelp_anggota" id="notelp_anggota"
                     aria-describedby="notelp_anggotaHelp">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>
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
