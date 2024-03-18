
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			MEMBER
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Table MEMBER</a>
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
								<i class="fa fa-edit"></i>LIST MEMBER
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
											
											<a class="btn green" data-toggle="modal" href="#add_pnjm">
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
									 NIM
								</th>
								<th>
									 nama anggota
								</th>
								<th>
									 jurusan anggota
								</th>
								<th>
									 no telepon
								</th>
								<th>
									 email
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
                            foreach ($peminjamArr as $pnjm){ ?>
                            <tr>
							<th scope="row"><?= $no?></th>
                            <td><?=$pnjm['nim'] ?></td>
                            <td><?=$pnjm['nama_anggota'] ?></td>
                            <td><?=$pnjm['jurusan_anggota'] ?></td>
                            <td><?=$pnjm['notelp_anggota'] ?></td>
                            <td><?=$pnjm['email'] ?></td>
                            <td>
                                    
										<a class="btn green" data-toggle="modal" href="#edit_pnjm<?= $no?>">
									Edit <i class="fa fa-pencil"></i> </a>
										<div id="edit_pnjm<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Ubah Data Buku</h4>
										</div>
										<form action="<?php echo base_url('update_peminjam/'.$pnjm['nim']);?>" method="post">
										<div class="modal-body">
											<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
												<div class="row">
				<div class="col-md-12">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" value="<?=$pnjm['nim'] ?>" class="form-control" name="nim" id="nim" 
                    aria-describedby="nimHelp">
                </div>
				<div class="col-md-12">
                    <label for="nama_anggota" class="form-label">NAMA ANGGOTA</label>
                    <input type="text" value="<?=$pnjm['nama_anggota'] ?>" class="form-control" name="nama_anggota" id="nama_anggota"
                     aria-describedby="nama_anggotaHelp">
                </div>
                <div class="col-md-12">
                    <label for="jurusan_anggota" class="form-label">JURUSAN ANGGOTA </label>
                    <input type="text" value="<?=$pnjm['jurusan_anggota'] ?>" class="form-control" name="jurusan_anggota" id="jurusan_anggota" 
                    aria-describedby="jurusan_anggotaHelp">
                </div>
				<div class="col-md-12">
                    <label for="notelp_anggota" class="form-label">NO TELEPON</label>
                    <input type="text" value="<?=$pnjm['notelp_anggota'] ?>" class="form-control" name="notelp_anggota" id="notelp_anggota" 
                    aria-describedby="notelp_anggotaHelp">
                </div>
				<div class="col-md-12">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="text" value="<?=$pnjm['email'] ?>" class="form-control" name="email" id="email"
                     aria-describedby="emailHelp">
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
                                        base_url('delete_peminjam/'.$pnjm['nim']);?>" 
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
				<div id="add_pnjm" class="modal fade" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Tambah Member</h4>
										</div>
										<form action="<?php echo base_url('save_peminjam');?>" method="post">
										<div class="modal-body">
											<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
												<div class="row">
				<div class="col-md-12">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim" id="nim" 
                    aria-describedby="nimHelp">
                </div>
				<div class="col-md-12">
                    <label for="nama_anggota" class="form-label">NAMA ANGGOTA</label>
                    <input type="text" class="form-control" name="nama_anggota" id="nama_anggota"
                     aria-describedby="nama_anggotaHelp">
                </div>
                <div class="col-md-12">
                    <label for="jurusan_anggota" class="form-label">JURUSAN ANGGOTA </label>
                    <input type="text" class="form-control" name="jurusan_anggota" id="jurusan_anggota" 
                    aria-describedby="jurusan_anggotaHelp">
                </div>
				<div class="col-md-12">
                    <label for="notelp_anggota" class="form-label">NO TELEPON</label>
                    <input type="text" class="form-control" name="notelp_anggota" id="notelp_anggota" 
                    aria-describedby="notelp_anggotaHelp">
                </div>
				<div class="col-md-12">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="text" class="form-control" name="email" id="email"
                     aria-describedby="emailHelp">
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
    