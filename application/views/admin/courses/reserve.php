<?php $this->load->view('admin/includes/header'); ?>
<style>
	.required {
		color: red;
	}
</style>
<?php $this->load->view('admin/includes/sideBar'); ?>
<div class="main-content" style="min-height: 559px;">
	<section class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-body">
							<h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Update: Bootstrap</h4>
						</div> <!-- end card body-->
					</div> <!-- end card -->
				</div><!-- end col-->

				<div class="col-12 col-sm-12 col-lg-12">
					<div class="card author-box card-primary">
						<div class="card-body">
							<h5 class="header-title mb-3 justify-content-between d-flex">
								Course Manager
								<span>
									<a href="<?= base_url() . '' ?>" class="alignToTitle btn btn-outline-secondary rounded-pill btn-sm ml-1" target="_blank">View On Frontend <i class="mdi mdi-arrow-right"></i> </a>
									<a href="<?= base_url() . 'courses' ?>" class="alignToTitle btn btn-outline-secondary rounded-pill btn-sm"><i class=" mdi mdi-keyboard-backspace"></i> Back To Course List</a>
								</span>
							</h5>
							<hr>
							<div class="row">
								<div class="col-xl-12">
									<form class="required-form" action="http://localhost/Online_Learning_Management_System/user/course_actions/edit/2" method="post" enctype="multipart/form-data">
										<div id="basicwizard">
											<ul class="nav nav-pills nav-justified form-wizard-header mb-3 bg-light">
												<li class="nav-item">
													<a href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
														<i class="fas fa-pen-nib mr-1"></i>
														<span class="d-none d-sm-inline">Basic</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="#requirements" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
														<i class="far fa-bell mr-1"></i>
														<span class="d-none d-sm-inline">Requirements</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="#outcomes" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
														<i class="fas fa-arrows-alt mr-1"></i>
														<span class="d-none d-sm-inline">Outcomes</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="#curriculum" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
														<i class="fas fa-user-circle mr-1"></i>
														<span class="d-none d-sm-inline">Curriculum</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="#pricing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
														<i class="fas fa-money-bill mr-1"></i>
														<span class="d-none d-sm-inline">Pricing</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="#media" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
														<i class="fas fa-images mr-1"></i>
														<span class="d-none d-sm-inline">Media</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="#seo" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
														<i class="fas fa-tag mr-1"></i>
														<span class="d-none d-sm-inline">Seo</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="#finish" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
														<i class="fas fa-check-circle mr-1"></i>
														<span class="d-none d-sm-inline">Finish</span>
													</a>
												</li>
											</ul>

											<div class="tab-content b-0 mb-0">
												<div class="tab-pane active" id="basic">
													<div class="row justify-content-center">
														<div class="col-xl-12">
															<div class="form-row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="course_title">Course Title<span class="required">*</span></label>
																		<input type="text" class="form-control" id="course_title" name="title" placeholder="Enter Course Title" value="Bootstrap" required="">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="course_title">Course Title<span class="required">*</span></label>
																		<input type="text" class="form-control" id="course_title" name="title" placeholder="Enter Course Title" value="Bootstrap" required="">
																	</div>
																</div>
															</div>

															<div class="form-row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="" for="short_description">Short Description</label>
																		<textarea name="short_description" id="short_description" class="form-control"></textarea>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="" for="description">Description</label>
																		<textarea name="description" id="description" class="form-control"></textarea>
																	</div>
																</div>
															</div>

															<div class="form-row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="" for="sub_category_id">Category<span class="required">*</span></label>
																		<select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="sub_category_id" id="sub_category_id" required="" data-select2-id="sub_category_id" tabindex="-1" aria-hidden="true">
																		<option value="">Select A Category</option>
																	</select>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="" for="description">Sub Category</label>
																		<select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="sub_category_id" id="sub_category_id" required="" data-select2-id="sub_category_id" tabindex="-1" aria-hidden="true">
																		<option value="">Select A Sub Category</option>
																	</select>
																	</div>
																</div>
															</div>

															<div class="form-row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="" for="sub_category_id">Level<span class="required">*</span></label>
																		<select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="level" id="level" data-select2-id="level" tabindex="-1" aria-hidden="true">
																			<option value="beginner" selected="" data-select2-id="4">Beginner</option>
																			<option value="advanced">Advanced</option>
																			<option value="intermediate">Intermediate </option>
																	    </select>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="" for="description">Language Made In</label>
																		<select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="language_made_in" id="language_made_in" data-select2-id="language_made_in" tabindex="-1" aria-hidden="true">
																			<option value="english">English</option>
																	   </select>
																	</div>
																</div>
															</div>

														</div> <!-- end col -->
													</div> <!-- end row -->
												</div> <!-- end tab pane -->

												<div class="tab-pane" id="requirements">
													<div class="row justify-content-center">
														<div class="col-xl-8">
															<div class="form-group row mb-3">
																<label class="col-md-2 col-form-label" for="requirements">Requirements</label>
																<div class="col-md-10">
																	<div id="requirement_area">
																		<div class="d-flex mt-2">
																			<div class="flex-grow-1 px-3">
																				<div class="form-group">
																					<input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="Provide Requirements">
																				</div>
																			</div>
																			<div class="">
																				<button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendRequirement()"> <i class="fa fa-plus"></i> </button>
																			</div>
																		</div>

																		<div id="blank_requirement_field" style="display: none;">
																			<div class="d-flex mt-2">
																				<div class="flex-grow-1 px-3">
																					<div class="form-group">
																						<input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="Provide Requirements">
																					</div>
																				</div>
																				<div class="">
																					<button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeRequirement(this)"> <i class="fa fa-minus"></i> </button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="tab-pane" id="outcomes">
													<div class="row justify-content-center">
														<div class="col-xl-8">
															<div class="form-group row mb-3">
																<label class="col-md-2 col-form-label" for="outcomes">Outcomes</label>
																<div class="col-md-10">
																	<div id="outcomes_area">
																		<div class="d-flex mt-2">
																			<div class="flex-grow-1 px-3">
																				<div class="form-group">
																					<input type="text" class="form-control" name="outcomes[]" placeholder="Provide Outcomes">
																				</div>
																			</div>
																			<div class="">
																				<button type="button" class="btn btn-success btn-sm" name="button" onclick="appendOutcome()"> <i class="fa fa-plus"></i> </button>
																			</div>
																		</div>
																		<div id="blank_outcome_field" style="display: none;">
																			<div class="d-flex mt-2">
																				<div class="flex-grow-1 px-3">
																					<div class="form-group">
																						<input type="text" class="form-control" name="outcomes[]" id="outcomes" placeholder="Provide Outcomes">
																					</div>
																				</div>
																				<div class="">
																					<button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeOutcome(this)"> <i class="fa fa-minus"></i> </button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="tab-pane " id="curriculum">
													<div class="row justify-content-center">
														<div class="col-xl-12 mb-4 text-center mt-3">
															<a href="javascript::void(0)" class="btn btn-outline-primary btn-rounded btn-sm ml-1"><i class="mdi mdi-plus"></i> Add Section</a>
															<a href="javascript::void(0)" class="btn btn-outline-primary btn-rounded btn-sm ml-1"><i class="mdi mdi-plus"></i> Add Lesson</a>
															<a href="javascript::void(0)" class="btn btn-outline-primary btn-rounded btn-sm ml-1"><i class="mdi mdi-plus"></i> Add Quiz</a>
															<a href="javascript::void(0)" class="btn btn-outline-primary btn-rounded btn-sm ml-1"><i class="mdi mdi-sort-variant"></i> Sort Sections</a>
														</div>

														<div class="col-xl-8">
															<div class="row">
																<div class="col-xl-12 sectionForm">
																	<div class="card bg-light text-seconday on-hover-action mb-5 shadow rounded-0" id="section-1">
																		<div class="card-body">
																			<h5 class="card-title" style="min-height: 35px;"><span class="font-weight-light">Section 1</span>: Introduction <div class="row justify-content-center alignToTitle float-right display-none" id="widgets-of-section-1" style="display: none;">
																					<button type="button" class="btn btn-outline-secondary btn-rounded btn-sm" name="button"><i class="mdi mdi-sort-variant"></i> Sort Lesson</button>
																					<button type="button" class="btn btn-outline-secondary btn-rounded btn-sm ml-1" name="button"><i class="mdi mdi-pencil-outline"></i> Edit Section</button>
																					<button type="button" class="btn btn-outline-secondary btn-rounded btn-sm ml-1" name="button"><i class="mdi mdi-window-close"></i> Delete Section</button>
																				</div>
																			</h5>
																			<div class="clearfix"></div>

																			<div class="col-md-12 lessonForm">
																				<!-- Portlet card -->
																				<div class="card text-secondary on-hover-action mb-2" id="lesson-1">
																					<div class="card-body thinner-card-body">
																						<div class="card-widgets display-none" id="widgets-of-lesson-1" style="display: none;float:right;">
																							<a href="javascript::"><i class="fas fa-pencil-alt text-dark" style="font-size: 16px;"></i> </a>
																							<a href="javascript::"><i class="fas fa-times text-dark" style="font-size: 16px;"></i></a>
																						</div>
																						<h5 class="card-title mb-0">
																							<span class="font-weight-light">
																								<i class="fas fa-file-pdf text-dark" alt="" width="16"></i>
																								Lesson 1 </span>: EACEEAWARDS
																						</h5>
																					</div>
																				</div> <!-- end card-->
																				
																			</div>

																		</div> <!-- end card-body-->
																	</div> <!-- end card-->
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="tab-pane" id="pricing">
													<div class="row justify-content-center">
														<div class="col-xl-8">
														
															<div class="form-group row mb-3">
																<label class="col-md-2 col-form-label" for="price">Currency</label>
																<div class="col-md-10">
																	<select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="level" id="level" data-select2-id="level" tabindex="-1" aria-hidden="true">
																		<option value="Tsh" selected="" data-select2-id="4">Tsh</option>
																		<option value="$">$</option>
																	</select>
																</div>
															</div>

															<div class="form-group row mb-3">
																<label class="col-md-2 col-form-label" for="price">Course Price</label>
																<div class="col-md-10">
																	<input type="number" class="form-control" id="price" name="price" min="0" placeholder="Enter Course Course Price" value="0">
																</div>
															</div>

															<div class="form-group row mb-3">
																<label class="col-md-2 col-form-label" for="discounted_price">Discounted Price</label>
																<div class="col-md-10">
																	<input type="number" class="form-control" name="discounted_price" id="discounted_price" onkeyup="calculateDiscountPercentage(this.value)" value="0" min="0">
																	<small class="text-muted">This Course Has <span id="discounted_percentage" class="text-danger">0%</span> Discount</small>
																</div>
															</div>
														</div> <!-- end col -->
													</div> <!-- end row -->
												</div> <!-- end tab-pane -->
												
												<div class="tab-pane" id="media">
													<div class="row justify-content-center">

														<div class="col-xl-8">
															<div class="form-group row mb-3">
																<label class="col-md-2 col-form-label" for="course_overview_provider">Course Overview Provider</label>
																<div class="col-md-10">
																	<select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="course_overview_provider" id="course_overview_provider" data-select2-id="course_overview_provider" tabindex="-1" aria-hidden="true">
																		<option value="youtube" data-select2-id="8">Youtube</option>
																		<option value="html5">Html5</option>
																	</select>
																</div>
															</div>
														</div> <!-- end col -->

														<div class="col-xl-8">
															<div class="form-group row mb-3">
																<label class="col-md-2 col-form-label" for="course_overview_url">Course Overview Url</label>
																<div class="col-md-10">
																	<input type="text" class="form-control" name="course_overview_url" id="course_overview_url" placeholder="E.g: https://www.youtube.com/watch?v=oBtf8Yglw2w" value="">
																</div>
															</div>
														</div> <!-- end col -->

														<div class="col-xl-8">
															<div class="form-group row mb-3">
																<label class="" for="">Course Overview Url</label>
																<small>Students who watch a well-made promo video are 5X more likely to enroll in your course. We've seen that statistic go up to 10X for exceptionally awesome videos. Learn how to make yours awesome! </small>
																<input type="text" class="dropify" name="">
															</div>
														</div> <!-- end col -->

														<div class="col-xl-8">
															<div class="form-group row mb-3">
																<label class="" for="">Course Thumbnail</label>
																<small>Upload your course thumbnail here. It must meet our course thumbnail quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</small>
																<input type="text" class="dropify" name="">
															</div>
														</div> <!-- end col -->

													</div> <!-- end row -->
												</div>
												<div class="tab-pane" id="seo">
													<div class="row justify-content-center">
														<div class="col-xl-8">
															<div class="form-group row mb-3">
																<label class="col-md-2 col-form-label" for="website_keywords">Meta Keywords</label>
																<div class="col-md-10">
																	                      <input type="text" class="form-control inputtags">
																</div>
															</div>
														</div> <!-- end col -->
														<div class="col-xl-8">
															<div class="form-group row mb-3">
																<label class="col-md-2 col-form-label" for="meta_description">Meta Description</label>
																<div class="col-md-10">
																	<textarea name="meta_description" class="form-control"></textarea>
																</div>
															</div>
														</div> <!-- end col -->
													</div> <!-- end row -->
												</div>
												<div class="tab-pane" id="finish">
													<div class="row">
														<div class="col-12">
															<div class="text-center">
																<h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
																<h3 class="mt-0">Thank you !</h3>

																<p class="w-75 mb-2 mx-auto">You Are Just One Click Away</p>

																<div class="mb-3 mt-3">
																	<button type="button" class="btn btn-primary text-center" onclick="checkRequiredFields()">Submit</button>
																</div>
															</div>
														</div> <!-- end col -->
													</div> <!-- end row -->
												</div>

												<ul class="list-inline mb-0 wizard text-center">
													<li class="previous list-inline-item disabled">
														<a href="javascript::" class="btn btn-info"> <i class="fas fa-long-arrow-alt-left"></i> </a>
													</li>
													<li class="next list-inline-item">
														<a href="javascript::" class="btn btn-info"> <i class="fas fa-long-arrow-alt-right"></i> </a>
													</li>
												</ul>

											</div> <!-- tab-content -->
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
</div>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
	var blank_outcome = jQuery('#blank_outcome_field').html();
	var blank_requirement = jQuery('#blank_requirement_field').html();
	var sectionForm = document.querySelector('.sectionForm');
	var lessonForm = document.querySelector('.lessonForm');
	console.log(sectionForm);
	console.log(lessonForm);
	$(document).ready(function(){
		
	});

	jQuery(document).ready(function() {
		jQuery('#blank_outcome_field').hide();
		jQuery('#blank_requirement_field').hide();
		calculateDiscountPercentage($('#discounted_price').val());
	});

	function appendOutcome() {
		jQuery('#outcomes_area').append(blank_outcome);
	}

	function removeOutcome(outcomeElem) {
		jQuery(outcomeElem).parent().parent().remove();
	}

	function appendRequirement() {
		jQuery('#requirement_area').append(blank_requirement);
	}

	function removeRequirement(requirementElem) {
		jQuery(requirementElem).parent().parent().remove();
	}



	function priceChecked(elem) {
		if (jQuery('#discountCheckbox').is(':checked')) {

			jQuery('#discountCheckbox').prop("checked", false);
		} else {

			jQuery('#discountCheckbox').prop("checked", true);
		}
	}

	function topCourseChecked(elem) {
		if (jQuery('#isTopCourseCheckbox').is(':checked')) {

			jQuery('#isTopCourseCheckbox').prop("checked", false);
		} else {

			jQuery('#isTopCourseCheckbox').prop("checked", true);
		}
	}

	function isFreeCourseChecked(elem) {

		if (jQuery('#' + elem.id).is(':checked')) {
			$('#price').prop('required', false);
		} else {
			$('#price').prop('required', true);
		}
	}

	function calculateDiscountPercentage(discounted_price) {
		if (discounted_price > 0) {
			var actualPrice = jQuery('#price').val();
			if (actualPrice > 0) {
				var reducedPrice = actualPrice - discounted_price;
				var discountedPercentage = (reducedPrice / actualPrice) * 100;
				if (discountedPercentage > 0) {
					jQuery('#discounted_percentage').text(discountedPercentage.toFixed(2) + "%");

				} else {
					jQuery('#discounted_percentage').text('0%');
				}
			}
		}
	}

	$('.on-hover-action').mouseenter(function() {
		var id = this.id;
		$('#widgets-of-' + id).show();
	});
	$('.on-hover-action').mouseleave(function() {
		var id = this.id;
		$('#widgets-of-' + id).hide();
	});
</script>
