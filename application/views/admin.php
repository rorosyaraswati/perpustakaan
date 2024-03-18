
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			DATA BUKU
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href>TABEL DATA BUKU</a>
						<i class="fa fa-angle-right"></i>
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
								<i class="fa fa-edit"></i>LIST DATA BUKU
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
											
											<a class="btn green" data-toggle="modal" href="#add_dtbk">
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
									 Kode Buku
								</th>
								<th>
									 Judul Buku
								</th>
								<th>
									 Penulis
								</th>
								<th>
									 Penerbit
								</th>
								<th>
									 Tahun Terbit
								</th>
								<th>
									 Status
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
							foreach ($databukuArr as $dtbk){ ?>
							<tr>
							<th scope="row"><?= $no?></th>
							<td><?=$dtbk['kode_buku'] ?></td>
							<td><?=$dtbk['judul_buku'] ?></td>
							<td><?=$dtbk['penulis'] ?></td>
							<td><?=$dtbk['penerbit'] ?></td>
							<td><?=$dtbk['tahun_terbit'] ?></td>
							<td><?=$dtbk['status'] ?></td>
							<td>
                                    
										<a class="btn green" data-toggle="modal" href="#edit_dtbk<?= $no?>">
									Edit <i class="fa fa-pencil"></i> </a>
										<div id="edit_dtbk<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Ubah Data Buku</h4>
										</div>
										<form action="<?php echo base_url('update_databuku/'.$dtbk['kode_buku']);?>" method="post">
										<div class="modal-body">
											<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
												<div class="row">
				<div class="col-md-12">
                    <label for="kode_buku" class="form-label">KODE BUKU</label>
                    <input type="text" value="<?=$dtbk['kode_buku'] ?>" class="form-control" name="kode_buku" id="kode_buku" 
                    aria-describedby="kode_bukuHelp">
                </div>
				<div class="col-md-12">
                    <label for="judul_buku" class="form-label">JUDUL BUKU</label>
                    <input type="text" value="<?=$dtbk['judul_buku'] ?>" class="form-control" name="judul_buku" id="judul_buku"
                     aria-describedby="judul_bukuHelp">
                </div>
                <div class="col-md-12">
                    <label for="penulis" class="form-label">PENULIS </label>
                    <input type="text" value="<?=$dtbk['penulis'] ?>" class="form-control" name="penulis" id="penulis"
                     aria-describedby="penulisHelp">
                </div>
				<div class="col-md-12">
                    <label for="penerbit" class="form-label">PENERBIT</label>
                    <input type="text" value="<?=$dtbk['penerbit'] ?>" class="form-control" name="penerbit" id="penerbit" 
                    aria-describedby="penerbitHelp">
                </div>
				<div class="col-md-12">
                    <label for="tahun_terbit" class="form-label">TAHUN TERBIT</label>
                    <input type="text" value="<?=$dtbk['tahun_terbit'] ?>" class="form-control" name="tahun_terbit" id="tahun_terbit"
                     aria-describedby="tahun_terbitHelp">
                </div>
				<div class="col-md-12">
                    <label for="status" class="form-label">status</label>
                    <input type="text" value="<?=$dtbk['status'] ?>" class="form-control" name="status" id="status"
                     aria-describedby="statusHelp">
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
                                        base_url('delete_databuku/'.$dtbk['kode_buku']);?>" 
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
				<div id="add_dtbk" class="modal fade" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Tambah Data Buku</h4>
										</div>
										<form action="<?php echo base_url('save_databuku');?>" method="post">
										<div class="modal-body">
											<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
												<div class="row">
				<div class="col-md-12">
                    <label for="kode_buku" class="form-label">KODE BUKU</label>
                    <input type="text" class="form-control" name="kode_buku" id="kode_buku" 
                    aria-describedby="kode_bukuHelp">
                </div>
				<div class="col-md-12">
                    <label for="judul_buku" class="form-label">NAMA BUKU</label>
                    <input type="text" class="form-control" name="judul_buku" id="judul_buku"
                     aria-describedby="judul_bukuHelp">
                </div>
                <div class="col-md-12">
                    <label for="text" class="form-label">PENULIS </label>
                    <input type="text" class="form-control" name="penulis" id="penulis" 
                    aria-describedby="penulisHelp">
                </div>
				<div class="col-md-12">
                    <label for="penerbit" class="form-label">PENERBIT</label>
                    <input type="text" class="form-control" name="penerbit" id="penerbit" 
                    aria-describedby="penerbitHelp">
                </div>
				<div class="col-md-12">
                    <label for="tahun_terbit" class="form-label">TAHUN TERBIT</label>
                    <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit"
                     aria-describedby="tahun_terbitHelp">
                </div>
				<div class="col-md-12">
                    <label for="status" class="form-label">status</label>
                    <input type="text" class="form-control" name="status" id="status"
                     aria-describedby="statusHelp">
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
    