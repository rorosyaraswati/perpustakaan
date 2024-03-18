
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			USER
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Tabel USER</a>
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
								<i class="fa fa-edit"></i>LIST USER
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
											
											<a class="btn green" data-toggle="modal" href="#add_usr">
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
									 ID USER
								</th>
								<th>
									 Username
								</th>
								<th>
									 Password
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
                            foreach ($userArr as $usr){ ?>
                            <tr>
                            <th scope="row"><?= $no?></th>
                            <td><?=$usr['id_user'] ?></td>
                            <td><?=$usr['username'] ?></td>
                            <td><?=$usr['password'] ?></td>
                            <td>
                                    
										<a class="btn green" data-toggle="modal" href="#edit_usr<?= $no?>">
									Edit <i class="fa fa-pencil"></i> </a>
										<div id="edit_usr<?= $no?>" class="modal fade" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Ubah Data Buku</h4>
										</div>
										<form action="<?php echo base_url('update_user/'.$usr['id_user']);?>" method="post">
										<div class="modal-body">
											<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
												<div class="row">
				<div class="col-md-12">
                    <label for="id_user" class="form-label">ID USER</label>
                    <input type="text" value="<?=$usr['id_user'] ?>" class="form-control" name="id_user" id="id_user" 
                    aria-describedby="id_userHelp">
                </div>
                <div class="col-md-12">
                    <label for="username" class="form-label">USERNAME </label>
                    <input type="text" value="<?=$usr['username'] ?>" class="form-control" name="username" id="username" 
                    aria-describedby="usernameHelp">
                </div>
				<div class="col-md-12">
                    <label for="password" class="form-label">PASSWORD </label>
                    <input type="text" value="<?=$usr['password'] ?>" class="form-control" name="password" id="password" 
                    aria-describedby="passwordHelp">
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
                                        base_url('delete_user/'.$usr['id_user']);?>" 
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
				<div id="add_usr" class="modal fade" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Tambah Member</h4>
										</div>
										<form action="<?php echo base_url('save_user');?>" method="post">
										<div class="modal-body">
											<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
												<div class="row">
				<div class="col-md-12">
                    <label for="id_user" class="form-label">ID USER</label>
                    <input type="text" class="form-control" name="id_user" id="id_user" 
                    aria-describedby="id_userHelp">
                </div>
                <div class="col-md-12">
                    <label for="username" class="form-label">USERNAME </label>
                    <input type="text" class="form-control" name="username" id="username" 
                    aria-describedby="usernameHelp">
                </div>
				<div class="col-md-12">
                    <label for="password" class="form-label">PASSWORD </label>
                    <input type="text" class="form-control" name="password" id="password" 
                    aria-describedby="passwordHelp">
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
    