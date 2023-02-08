<?php $this->load->view('admin/includes/header');?>
<?php $this->load->view('admin/includes/sideBar');?>
 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-8 col-lg-8">
				 <div class="card">
                  <div class="card-header justify-content-between">
                    <h4>SubCategories</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" style="width:100%;">
                        <thead>
                          <tr>
                            <th>SID</th>
                            <th>SubCategory</th>
                            <th>Category</th>
                            <th>Is Active</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="tablelist">
						<?php if(!empty($subcategories)):?>
							<?php foreach($subcategories as $row):?>
									<tr>
										<th><?=$row['id'] ?? '';?></th>
										<th><?=$row['subcategory'] ?? '';?></th>
										<th><?=$row['category'] ?? '';?></th>
										<th>
											<?php if($row['is_active'] == 1):?>
												<span class="badge badge-success">enabled</span>
											<?php else:?>
												<span class="badge badge-danger">disabled</span>
											<?php endif;?>
										</th>
										<th>
											<?php if($row['is_active'] == 0):?>
												<a  href="<?=base_url().'admin/subCategories/enable/'.$row['subcatid']?>" type="button" class="btn btn-warning text-white btn-sm " title="Change Status">
													<i class="fa fa-battery-half"></i>
												</a>
											<?php else:?>
												<a  href="<?=base_url().'admin/subCategories/disable/'.$row['subcatid']?>" type="button" class="btn btn-warning text-white btn-sm " title="Change Status">
													<i class="fa fa-battery-half"></i>
												</a>
											<?php endif;?>

											<a type="button" class="btn btn-primary text-white btn-sm " title="Edit Service">
												<i class="fa fa-battery-half"></i>
											</a>
											<a href="<?=base_url().'admin/subCategories/delete/'.$row['subcatid']?>" type="button" class="btn btn-danger text-white btn-sm " title="Delete Service">
												<i class="fa fa-trash"></i>
											</a>
										</th>
									</tr>
							<?php endforeach;?>
						<?php endif;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
				<div class="card">
                  <div class="card-header justify-content-between">
                    <h4>New SubCategories</h4>
                  </div>
                  <div class="card-body">
                        <form  name="createCategoryModel" id="createCategoryModel" action="<?=base_url().'admin/subcategories/saveSubCategory'?>" enctype="multipart/form-data"  method="post">
					<div class="form-group">
						<label>SubCategory</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-envelope"></i>
								</div>
							</div>
							<input type="text" class="form-control" placeholder="subcategory" name="subcategory">
						</div>
						<span class="subcategory text-danger"><?=form_error('subcategory')?></span>
					</div>
					<div class="form-group">
						<label>Category</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-lock"></i>
								</div>
							</div>
							<select class="sf-select-box form-control sf-form-control" name="parentid" data-live-search="true" title="choose Area" tabindex="-98">
								<option value="">choose</option>
							    <?php if(!empty($categories)):?>
									<?php foreach($categories as $cat):?>
										<option <?php echo set_select('category',$cat['category'],false); ?> value="<?=$cat['catid']?>"><?=$cat['category']?></option>
									<?php endforeach;?>
								<?php endif;?>
							
							</select>
						</div>
						<span class="parentid text-danger"><?=form_error('parentid')?></span>
					</div>
					<div class="form-group">
						<label>Is Active</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-lock"></i>
								</div>
							</div>
							<select  class="form-control" name="is_active" id="is_active">
								<option value=""></option>
								<option value="1">Enabled</option>
								<option value="0">Disabled</option>
							</select>
						</div>
						<span class="is_active text-danger"></span>
					</div>
					<button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
				</form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>

      </div>
<?php $this->load->view('admin/includes/footer');?>
