
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			TRANSAKSI
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Table TRANSAKSI</a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>LIST TRANSAKSI
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											
											<a class="btn green" data-toggle="modal" href="#add_trs">
									Tambah <i class="fa fa-plus"></i> </a>


										</div>
									</div>
									
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 No
								</th>
								<th>
									 KODE BUKU
								</th>
								<th>
									 NIM
								</th>
								<th>
                                    NAMA anggota
								</th>
								<th>
									 TANGGAL PEMINJAMAN
								</th>
                                <th>
									 TANGGAL PENGEMBALIAN
								</th>
								<th>
									 Edit
								</th>
								<th>
									 Delete
								</th>
							</tr>
							</thead>
							<tbody>
							<?php 
                            $no=1;
                            foreach ($transaksibukuArr as $trs){ ?>
                            <tr>
                            <th scope="row"><?= $no?></th>
                            <td><?=$trs['kode_buku'] ?></td>
                            <td><?=$trs['nim'] ?></td>
                            <td><?=$trs['nama_anggota'] ?></td>
                            <td><?=$trs['tanggal_peminjaman'] ?></td>
                            <td><?=$trs['tanggal_pengembalian'] ?></td>
                            <td>
                                    
										<a class="btn green" data-toggle="modal" href="#edit_trs<?= $no?>">
									Edit <i class="fa fa-pencil"></i> </a>
										<div id="edit_trs<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Ubah Data Buku</h4>
										</div>
										<form action="<?php echo base_url('update_transaksibuku/'.$trs['kode_buku']);?>" method="post">
										<div class="modal-body">
											<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
												<div class="row">
				<div class="col-md-12">
                    <label for="kode_buku" class="form-label">KODE BUKU</label>
                    <input type="text" value="<?=$trs['kode_buku'] ?>" class="form-control" name="kode_buku" id="kode_buku" 
                    aria-describedby="kode_bukuHelp">
                </div>
				<div class="col-md-12">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" value="<?=$trs['nim'] ?>" class="form-control" name="nim" id="nim"
                     aria-describedby="nimHelp">
                </div>
                <div class="col-md-12">
                    <label for="nama_anggota" class="form-label">NAMA ANGGOTA </label>
                    <input type="text" value="<?=$trs['nama_anggota'] ?>" class="form-control" name="nama_anggota" id="nama_anggota" 
                    aria-describedby="nama_anggotaHelp">
                </div>
				<div class="col-md-12">
                    <label for="tanggal_peminjaman" class="form-label">TANGGAL PEMINJAMAN</label>
                    <input type="date" value="<?=$trs['tanggal_peminjaman'] ?>" class="form-control" name="tanggal_peminjaman" id="tanggal_peminjaman" 
                    aria-describedby="tanggal_peminjamanHelp">
                </div>
				<div class="col-md-12">
                    <label for="tanggal_pengembalian" class="form-label">TANGGAL PENGEMBALIAN</label>
                    <input type="date" value="<?=$trs['tanggal_pengembalian'] ?>" class="form-control" name="tanggal_pengembalian" id="tanggal_pengembalian"
                     aria-describedby="tanggal_pengembalianHelp">
                </div>
				
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" data-dismiss="modal" class="btn default">Close</button>
											<button type="submit" class="btn green">Simpan</button>
										</div>
								</form>
									</div>
								</div>
							</div>
                                    <td>
                                        <a href="<?php echo 
                                        base_url('delete_transaksibuku/'.$trs['kode_buku']);?>" 
                                        class="btn btn-sm btn-danger">Delete</a>
                                        
                                </td>
                                    </tr>
                                <?php $no ++; } ?>
                                
                            </tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
				<div id="add_trs" class="modal fade" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Tambah Transaksi</h4>
										</div>
										<form action="<?php echo base_url('save_transaksibuku');?>" method="post">
										<div class="modal-body">
											<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
										

											<div class="form-group col-md-12">
				<label for="kode_buku" class="col-form-label">Kode BUKU</label>
				<select name="kode_buku" id="kode_buku" class="form-control">
					<option value="">-- Pilih --</option>
					<?php
					$kodeBukuArr = $this->databuku->getKodeBuku();
					foreach($kodeBukuArr as $kodeBuku) {
						$selected = '';
						if ($kodeBuku['status'] == 'terpinjam') {
							$selected = 'disabled'; // Menonaktifkan opsi jika buku telah dipinjam
						}
						echo '<option value="'.$kodeBuku['kode_buku'].'" '.$selected.'>'.$kodeBuku['kode_buku'].'</option>';
					}
					?>
				</select>
			</div>

				<div class="col-md-12">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim" id="nim"
                     aria-describedby="nimHelp">
                </div>
                <div class="col-md-12">
                    <label for="nama_anggota" class="form-label">NAMA ANGGOTA </label>
                    <input type="text" class="form-control" name="nama_anggota" id="nama_anggota" 
                    aria-describedby="nama_anggotaHelp">
                </div>
				<div class="col-md-12">
					<label for="tanggal_peminjaman" class="form-label">TANGGAL PEMINJAMAN</label>
					<input type="date" class="form-control" name="tanggal_peminjaman" id="tanggal_peminjaman" 
						aria-describedby="tanggal_peminjamanHelp">
				</div>
				<div class="col-md-12">
					<label for="tanggal_pengembalian" class="form-label">TANGGAL PENGEMBALIAN</label>
					<input type="date" class="form-control" name="tanggal_pengembalian" id="tanggal_pengembalian"
						aria-describedby="tanggal_pengembalianHelp">
				</div>

												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" data-dismiss="modal" class="btn default">Close</button>
											<button type="submit" class="btn green">Simpan</button>
										</div>
								</form>
									</div>
								</div>
							</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
	</div>
	<!-- END CONTENT -->
    