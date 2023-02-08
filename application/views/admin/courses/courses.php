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
					  <a type="button" class="alignToTitle btn btn-outline-secondary rounded-pill btn-sm ml-1" onclick="showModal()" >Add Course</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Createt by</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="tablelist">
							<?php if(!empty($rows)):?>
							<?php foreach($rows as $row):?>
								<?php 
									$data['row'] = $row; 
									$this->load->view('admin/courses/courses_row',$data);
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
        <div class="modal fade content-admin-main" id="add_course" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
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
		$('#add_course').modal("show");

		$.ajax({

			url: '<?=base_url().'admin/courses/showCreateForm'?>',
			type: 'POST',
			data: {},
			dataType: 'json',
			success : function(response){

				$('#response').html(response["html"]);
				$('.categories').html(response["categories"]);
				$('.subcategories').html(response["subcategories"]);
				$('.languages').html(response["languages"]);
			}
		});

		$("body").on("submit","#createCourseModel", function (e) {

			
			e.preventDefault();

			$.ajax({

				url: '<?=base_url().'admin/courses/saveCourse'?>',
				type: 'POST',
				data: $(this).serializeArray(),
				dataType: 'json',
				success : function(response){

					if(response['status'] == 0)
					{
						if(response["course"] != "")
						{
							$('.title').html(response["title"]).addClass('invalid-feedback d-block');
							$('#title').addClass('is-invalid d-block');

						}else{

							$('.title').html("").removeClass('invalid-feedback d-block');
							$('#title').removeClass('is-invalid d-block');
						}

						if(response["level"] != "")
						{
							$('.level').html(response["level"]).addClass('invalid-feedback d-block');
							$('#level').addClass('is-invalid d-block');

						}else{

							$('.level').html("").removeClass('invalid-feedback d-block');
							$('#level').removeClass('is-invalid d-block');
						}

						if(response["catid"] != "")
						{
							$('.catid').html(response["catid"]).addClass('invalid-feedback d-block');
							$('#catid').addClass('is-invalid d-block');

						}else{

							$('.catid').html("").removeClass('invalid-feedback d-block');
							$('#catid').removeClass('is-invalid d-block');
						}

						if(response["subcatid"] != "")
						{
							$('.subcatid').html(response["subcatid"]).addClass('invalid-feedback d-block');
							$('#subcatid').addClass('is-invalid d-block');

						}else{

							$('.subcatid').html("").removeClass('invalid-feedback d-block');
							$('#subcatid').removeClass('is-invalid d-block');
						}

						if(response["lang_id"] != "")
						{
							$('.lang_id').html(response["lang_id"]).addClass('invalid-feedback d-block');
							$('#lang_id').addClass('is-invalid d-block');

						}else{

							$('.lang_id').html("").removeClass('invalid-feedback d-block');
							$('#lang_id').removeClass('is-invalid d-block');
						}

					}else{

						$('#add_course').modal("hide");
						$('#ajaxresponseModel .ajaxResponse').html(response['message']);
						$('#ajaxresponseModel').modal("show");
						location.reload();

						$('.title').html("").removeClass('invalid-feedback d-block');
						$('#title').removeClass('is-invalid d-block');

						$('.catid').html("").removeClass('invalid-feedback d-block');
						$('#catid').removeClass('is-invalid d-block');
						
						$('.subcatid').html("").removeClass('invalid-feedback d-block');
						$('#subcatid').removeClass('is-invalid d-block');

						$('.level').html("").removeClass('invalid-feedback d-block');
						$('#level').removeClass('is-invalid d-block');

						$('.lang_id').html("").removeClass('invalid-feedback d-block');
						$('#lang_id').removeClass('is-invalid d-block');
						
						$('#tablelist').append(response['row']);
					}
				}
			});
		});
	}
</script>
