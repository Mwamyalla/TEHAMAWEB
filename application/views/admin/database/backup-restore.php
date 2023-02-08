<?php $this->load->view('admin/includes/header'); ?>
<?php $this->load->view('admin/includes/sideBar'); ?>
<div class="main-content" style="min-height: 559px;">
	<section class="section">
		<div class="section-body">
			<div class="row mt-sm-4">
				<div class="col-12 col-md-12 col-lg-12">
					<div class="card shadow-none border-0 rounded-0">
						<div class="padding-20">
							<ul class="nav nav-tabs" id="myTab2" role="tablist">
								<li class="nav-item">
									<a class="nav-link  active" id="home-tab2" data-toggle="tab" href="#bachup" role="tab" aria-selected="false">Backup</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " id="profile-tab2" data-toggle="tab" href="#retore" role="tab" aria-selected="true">Restore</a>
								</li>
							</ul>
							<div class="tab-content tab-bordered" id="myTab3Content">
								<div class="tab-pane active show" id="bachup" role="tabpanel" aria-labelledby="home-tab2">
									<a href="<?=base_url().'admin/backup/backup'?>" class="btn btn-default border " style="float:right">Backup</a>
									<div class="table-responsive">
										<table class="table table-striped table-hover" id="tableExport" style="width:100%;">
											<thead>
												<tr>
													<th>SID</th>
													<th>Backup</th>
													<th>Backup Size</th>
													<th>Date</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$count = 1;
													$files = get_filenames(FCPATH.'assets/uploads/db_backup/');
													if (!empty($files)) {
														foreach ($files as $file):
															$ext = pathinfo($file, PATHINFO_EXTENSION);
															if ($ext != "zip") {
																continue;
															}
															$_fullpath = FCPATH.'assets/uploads/db_backup/'.$file;
															?>
													<tr>
														<td><?php echo $count++;?></td>
														<td><?php echo $file?></td>
														<td><?php echo bytesToSize($_fullpath);?></td>
														<td><?php
																	$getFormat = date('Y-m-d_H-i');
															echo  date($getFormat, filectime($_fullpath)) . ", " . date('g:i A', filectime($_fullpath));
															?></td>
														<td>
															<!-- download link -->
															<a href="<?=base_url('admin/backup/download?file='.$file) ?>" class="btn btn-circle btn-default border">
															<i class="fas fa-download"></i> Download 
															</a>
															<a href="<?=base_url('admin/backup/delete_file/'.$file) ?>" class="btn btn-circle btn-danger border">
															<i class="fas fa-download"></i> Delete 
															</a>
															
														</td>
													</tr>
													<?php endforeach;
													}; ?>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="retore" role="tabpanel" aria-labelledby="profile-tab2">
									<form action="<?=base_url().'admin/backup/restore'?>" class="form-horizontal frm-submit-data" enctype="multipart/form-data" method="post" accept-charset="utf-8">
										<div class="form-group mb-lg">
											<label class="col-md-12 control-label">File Upload <span class="required" aria-required="true">*</span></label>
											<div class="col-md-12">
												<input type="file" name="uploaded_file" id="uploaded_file" class="dropify" data-height="300"  />
												<span class="error"></span>
											</div>
										</div>
										<footer class="panel-footer">
											<div class="row">
												<div class="col-md-2 col-sm-offset-3">
													<button type="submit" class="btn btn-default btn-block border" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
														<i class="fas fa-cloud-upload-alt"></i> Upload SQL
													</button>
												</div>
											</div>
										</footer>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="ascrail2001" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 999; cursor: default; position: absolute; top: 0px; left: 272px; height: 300px; display: block; opacity: 0;">
		<div style="position: relative; top: 0px; float: right; width: 6px; height: 147px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;" class="nicescroll-cursors"></div>
	</div>
	<div id="ascrail2001-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 999; top: 292px; left: 0px; position: absolute; cursor: default; display: none; width: 272px; opacity: 0;">
		<div style="position: absolute; top: 0px; height: 6px; width: 280px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;" class="nicescroll-cursors"></div>
	</div>
</div>
</div>
<?php $this->load->view('admin/includes/footer'); ?>
