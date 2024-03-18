<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DATA BUKU</title>
 <!-- load bootstrap css file -->
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" 
rel="stylesheet">
</head>
<body>
<div class="modal-body row">
  
  <div class="col-md-6">
    <!-- Your second column here -->
    <h1>DATA BUKU</h1>
    <form action="<?php echo base_url('save_databuku');?>" method="post">
                <div class="mb-3">
                    <label for="kode_buku" class="form-label">Kode Buku</label>
                    <input type="text" class="form-control" name="kode_buku" id="kode_mk" 
                    aria-describedby="kode_bukuHelp">
                </div>
                <div class="mb-3">
                    <label for="judul_buku" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="judul_buku" id="judul_buku"
                     aria-describedby="judul_bukuHelp">
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" name="penulis" id="penulis"
                     aria-describedby="penulisHelp">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" name="Penerbit" id="Penerbit"
                     aria-describedby="PenerbitHelp">
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit"
                     aria-describedby="tahun_terbitHelp">
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
