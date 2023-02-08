<?php $this->load->view('admin/includes/header'); ?>
<?php $this->load->view('admin/includes/sideBar'); ?>
<div class="main-content" style="min-height: 559px;">
	<section class="section">
		<div class="section-body">
			<div class="row mt-sm-4">
				<div class="col-12 col-md-12 col-lg-12">
					 <div class="col-12">
                    <form method="post">
                        <div class="card">
                    <div class="card-header justify-content-between">
                        <h4>roles</h4>
                        <div class="class float-end">
                            <button type="submit" class="btn btn-success shadow btn-xs mx-auto"
                                style="float:right;">Save</button>
                           <a href="/admin/roles/add"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add new</button></a>
                         </div>
                    
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                            <thead>
                                <th>ID</th>
                                <th>Role</th>
                                <th>Active</th>
                                <th style="max-width: 550px">Permissions</th>
                                <th>Action</th>
                            </thead>
                            <tbody id="table_body">
                            <?php if(!empty($rows)):?>
                                <?php foreach($rows as $row):?>
                                <tr>
                                <td><?=$row['id']?></td>
                                <td><?=($row['role'] ?? 'Unknown')?></td>
                                <td><?=($row['active'] ? 'No' : 'Yes' ?? 'Unknown')?></td>
                                <td>
                                <div class="row">
                                <?php $num = 0;?>
                                <?php foreach(PERMISSIONS as $permission):?>
                                    <?php

                                        $num++;
                                    $row['code'] =  [];
                                    ?>
                                    <?php if(strtolower($row['role']) == 'admin'):?>
                                    <div class="col-md-4 form-check custom-checkbox mb-3 checkbox-primary">
                                        <input checked disabled type="checkbox" class="form-check-input" id="<?=$row['id'].$num?>CheckBox2" >
                                        <label class="form-check-label" for="<?=$row['id'].$num?>CheckBox2">All Permissions</label>
                                    </div>
                                    <?php break;?>
                                    <?php endif;?>
                                    <div class="col-md-4 form-check custom-checkbox mb-3 checkbox-primary">
                                        <input <?=in_array($permission, $row['code']) ? 'checked' : ''?>  name="<?=$row['id']?>_<?=$num?>" value="<?=$permission?>" type="checkbox" class="form-check-input" id="<?=$row['id'].$num?>CheckBox2" >
                                        <label class="form-check-label" for="<?=$row['id'].$num?>CheckBox2"><?=ucfirst(str_replace("_", " ", $permission))?></label>
                                    </div>
                                <?php endforeach;?>
                                </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/admin/roles/edit/<?=$row['id']?>"
                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="/admin/roles/delete/<?=$row['id']?>"
                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                                </tr>
                                <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                    </form>
                </div>
				</div>
			</div>
		</div>
	</section>


</div>
</div>
<?php $this->load->view('admin/includes/footer'); ?>