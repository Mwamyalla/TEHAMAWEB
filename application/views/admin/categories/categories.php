<?php $this->load->view('admin/includes/header');?>
<?php $this->load->view('admin/includes/sideBar');?>
 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header justify-content-between">
                    <h4>Categories</h4>
					  <a type="button" class="btn btn-primary text-white" onclick="showModal()" >Add Category</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>SID</th>
                            <th>Category</th>
                            <th>Is Active</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="tablelist">
							<?php if(!empty($rows)):?>
							<?php foreach($rows as $row):?>
								<?php 
									$data['row'] = $row; 
									$this->load->view('admin/categories/categories_row',$data);
								?>
							<?php endforeach;?>
						<?php endif;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

	  <!-- Modal with form -->
        <div class="modal fade content-admin-main" id="add_category" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">Add New</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div id="response"></div>
              </div>
            </div>
          </div>
        </div>

	 <!--- result sucess -->
	<div class="modal fade content-admin-main" id="ajaxresponseModel" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-body text-center">
				<span><img src="<?=base_url().'assets/frontend/'?>images/check.gif" width="160" alt=""></span>
				<div class="ajaxResponse"></div>
				<button type="button" class="btn btn-primary rounded rounded-circle" data-dismiss="modal" style="width:50px;height:50px;">Ok</button>
		</div>
		</div>
		</div>
	</div>

<?php $this->load->view('admin/includes/footer');?>
<script>
	function showModal()
	{
		$('#add_category').modal("show");

		$.ajax({

			url: '<?=base_url().'admin/categories/showCreateForm'?>',
			type: 'POST',
			data: {},
			dataType: 'json',
			success : function(response){

				$('#response').html(response["html"]);
			}
		});

		$("body").on("submit","#createCategoryModel", function (e) {

			
			e.preventDefault();

			$.ajax({

				url: '<?=base_url().'admin/categories/saveCategory'?>',
				type: 'POST',
				data: $(this).serializeArray(),
				dataType: 'json',
				success : function(response){

					if(response['status'] == 0)
					{
						if(response["category"] != "")
						{
							$('.category').html(response["category"]).addClass('invalid-feedback d-block');
							$('#category').addClass('is-invalid d-block');

						}else{

							$('.category').html("").removeClass('invalid-feedback d-block');
							$('#category').removeClass('is-invalid d-block');
						}

						if(response["is_active"] != "")
						{
							$('.is_active').html(response["is_active"]).addClass('invalid-feedback d-block');
							$('#is_active').addClass('is-invalid d-block');

						}else{

							$('.is_active').html("").removeClass('invalid-feedback d-block');
							$('#is_active').removeClass('is-invalid d-block');
						}

					}else{

						$('#add_category').modal("hide");
						$('#ajaxresponseModel .ajaxResponse').html(response['message']);
						$('#ajaxresponseModel').modal("show");
						location.reload();

						$('.category').html("").removeClass('invalid-feedback d-block');
						$('#category').removeClass('is-invalid d-block');

						$('.is_active').html("").removeClass('invalid-feedback d-block');
						$('#is_active').removeClass('is-invalid d-block');
						
						$('#tablelist').append(response['row']);
					}
				}
			});
		});
	}
</script>
