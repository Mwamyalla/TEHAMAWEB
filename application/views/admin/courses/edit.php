<?php $this->load->view('admin/includes/header'); ?>
<style>
	.required {
		color: red;
	}

	.hide {
		display: none;
	}
</style>
<?php $this->load->view('admin/includes/sideBar'); ?>
<div class="main-content" style="min-height: 559px;">
	<section class="section">
		<div class="section-body">
			<div class="row">
				<?php if (!empty($rows)) : ?>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Update: <?= $rows['title']; ?></h4>
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

										<div id="basicwizard">
											<ul class="nav nav-pills nav-justified form-wizard-header mb-3 bg-light">
												<li class="nav-item">
													<a href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 ">
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
													<a href="#curriculum" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
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
												<div class="tab-pane" id="basic">
													<form name="basicForm" id="basicForm" method="post">
														<div class="row justify-content-center">
															<div class="col-xl-12">
																<div class="form-row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label for="course_title">Course Title<span class="required">*</span></label>
																			<input type="text" class="form-control" id="title" name="title" placeholder="Enter Course Title" value="<?= set_value('title', $rows['title']); ?>" required="">
																		</div>
																	</div>
																</div>

																<div class="form-row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="" for="short_description">Short Description</label>
																			<textarea name="short_description" id="short_description" class="form-control"><?= set_value('short_description', $rows['short_description']); ?></textarea>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="" for="description">Description</label>
																			<textarea name="description" id="description" class="form-control"><?= set_value('description', $rows['description']); ?></textarea>
																		</div>
																	</div>
																</div>

																<div class="form-row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="" for="subcatid">Category<span class="required">*</span></label>
																			<select class="form-control" name="catid" id="catid">
																				<option value="">choose</option>
																				<?php foreach ($categories as $cat) : ?>
																					<option <?php if ($cat['catid'] == $rows['catid']) {
																								echo 'selected';
																							} ?> value="<?= $cat['catid'] ?>"><?= $cat['category'] ?></option>
																				<?php endforeach; ?>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="" for="description">Sub Category</label>
																			<select class="form-control" name="subcatid" id="subcatid">
																				<?php foreach ($subcategories as $subcat) : ?>
																					<option <?php if ($subcat['subcatid'] == $rows['subcatid']) {echo 'selected';} ?> value="<?= $subcat['subcatid'] ?>"><?= $subcat['subcategory'] ?></option>
																				<?php endforeach; ?>
																			</select>
																		</div>
																	</div>
																</div>

																<div class="form-row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="" for="level">Level<span class="required">*</span></label>
																			<select class="form-control" name="level" id="level">
																				<option <?php if ($rows['level'] == "beginner") echo 'selected'; ?> value="beginner">Beginner</option>
																				<option <?php if ($rows['level'] == "advanced") echo 'selected'; ?> value="advanced">Advanced</option>
																				<option <?php if ($rows['level'] == "intermediate") echo 'selected'; ?> value="intermediate">Intermediate </option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="" for="description">Language Made In</label>
																			<select class="form-control" d name="lang_id" id="lang_id" data-select2-id="lang_id">
																				<?php foreach ($languages as $lang) : ?>
																					<option <?php if ($lang['lang_id'] == $rows['lang_id']) {
																								echo 'selected';
																							} ?> value="<?= $lang['lang_id'] ?>"><?= $lang['language'] . ' (' . $lang['symbol'] . ')' ?></option>
																				<?php endforeach; ?>
																			</select>
																		</div>
																	</div>
																</div>

															</div> <!-- end col -->
														</div> <!-- end row -->
														<div class="mb-3 text-center">
															<button class="btn btn-white  btn-outline-secondary btn-sm w-25" onclick="SaveBasicInfo();">Save</button>
														</div>
													</form>
												</div> <!-- end tab pane -->

												<div class="tab-pane" id="requirements">
													<div class="row justify-content-center">
														<div class="col-xl-8">
															<form name="requrementForm" id="requrementForm" method="post">
																<div class="form-group row mb-3">
																	<label class="col-md-2 col-form-label" for="requirements">Requirements</label>
																	<div class="col-md-10">
																		<div id="requirement_area">
																			<?php if (!empty($rows['requirements'])) : ?>
																				<?php if (count(json_decode($rows['requirements'])) > 0) : ?>
																					<?php
																					$counter = 0;
																					foreach (json_decode($rows['requirements']) as $requirement) : ?>
																						<?php if ($counter == 0) :
																							$counter++; ?>
																							<div class="d-flex mt-2">
																								<div class="flex-grow-1 px-3">
																									<div class="form-group">
																										<input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="provide requirements" value="<?php echo $requirement; ?>">
																									</div>
																								</div>
																								<div class="">
																									<button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendRequirement()"> <i class="fa fa-plus"></i> </button>
																								</div>
																							</div>
																						<?php else : ?>
																							<div class="d-flex mt-2">
																								<div class="flex-grow-1 px-3">
																									<div class="form-group">
																										<input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="provide requirements" value="<?php echo $requirement; ?>">
																									</div>
																								</div>
																								<div class="">
																									<button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeRequirement(this)"> <i class="fa fa-minus"></i> </button>
																								</div>
																							</div>
																						<?php endif; ?>
																					<?php endforeach; ?>
																				<?php else : ?>
																					<div class="d-flex mt-2">
																						<div class="flex-grow-1 px-3">
																							<div class="form-group">
																								<input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="provide_requirements">
																							</div>
																						</div>
																						<div class="">
																							<button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendRequirement()"> <i class="fa fa-plus"></i> </button>
																						</div>
																					</div>

																				<?php endif; ?>
																			<?php else : ?>
																				<div class="d-flex mt-2">
																					<div class="flex-grow-1 px-3">
																						<div class="form-group">
																							<input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="provide requirements">
																						</div>
																					</div>
																					<div class="">
																						<button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendRequirement()"> <i class="fa fa-plus"></i> </button>
																					</div>
																				</div>
																			<?php endif; ?>
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
																		<div class="mb-3  text-center">
																			<button class="btn btn-white  btn-outline-secondary btn-sm w-25" onclick="SaveRequirements();">Save</button>
																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>

												<div class="tab-pane" id="outcomes">
													<div class="row justify-content-center">
														<div class="col-xl-8">
															<form name="outcomesForm" id="outcomesForm" method="post">
																<div class="form-group row mb-3">
																	<label class="col-md-2 col-form-label" for="outcomes">Outcomes</label>
																	<div class="col-md-10">
																		<div id="outcomes_area">
																			<?php if (!empty($rows['outcomes'])) : ?>
																				<?php if (count(json_decode($rows['outcomes'])) > 0) : ?>
																					<?php
																					$counter = 0;
																					foreach (json_decode($rows['outcomes']) as $outcome) : ?>
																						<?php if ($counter == 0) :
																							$counter++; ?>
																							<div class="d-flex mt-2">
																								<div class="flex-grow-1 px-3">
																									<div class="form-group">
																										<input type="text" class="form-control" name="outcomes[]" id="outcomes" placeholder="provide Outcomes" value="<?php echo $outcome; ?>">
																									</div>
																								</div>
																								<div class="">
																									<button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendOutcome()"> <i class="fa fa-plus"></i> </button>
																								</div>
																							</div>
																						<?php else : ?>
																							<div class="d-flex mt-2">
																								<div class="flex-grow-1 px-3">
																									<div class="form-group">
																										<input type="text" class="form-control" name="outcomes[]" id="outcomes" placeholder="provide outcomes" value="<?php echo $outcome; ?>">
																									</div>
																								</div>
																								<div class="">
																									<button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeOutcome(this)"> <i class="fa fa-minus"></i> </button>
																								</div>
																							</div>
																						<?php endif; ?>
																					<?php endforeach; ?>
																				<?php else : ?>

																					<div class="d-flex mt-2">
																						<div class="flex-grow-1 px-3">
																							<div class="form-group">
																								<input type="text" class="form-control" name="outcomes[]" id="outcomes" placeholder="provide outcomes">
																							</div>
																						</div>
																						<div class="">
																							<button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendOutcome()"> <i class="fa fa-plus"></i> </button>
																						</div>
																					</div>

																				<?php endif; ?>
																			<?php else : ?>
																				<div class="d-flex mt-2">
																					<div class="flex-grow-1 px-3">
																						<div class="form-group">
																							<input type="text" class="form-control" name="outcomes[]" id="outcomes" placeholder="provide outcomes">
																						</div>
																					</div>
																					<div class="">
																						<button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendOutcome()"> <i class="fa fa-plus"></i> </button>
																					</div>
																				</div>
																			<?php endif; ?>

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
																		<div class="mb-3  text-center">
																			<button class="btn btn-white  btn-outline-secondary btn-sm w-25" onclick="SaveOutcomes();">Save</button>
																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>

												<div class="tab-pane active" id="curriculum">
													<div class="row justify-content-center">
														<div class="col-xl-12 mb-4 text-center mt-3">
															<a href="javascript::void(0)" class="btn btn-outline-primary btn-rounded btn-sm ml-1" onclick="showSectionForm();"><i class="mdi mdi-plus"></i> Add Section</a>
															<a class="btn btn-outline-primary btn-rounded btn-sm ml-1" onclick="showLessonForm();"><i class="mdi mdi-plus"></i> Add Lesson</a>
															<a  class="btn btn-outline-primary btn-rounded btn-sm ml-1" onclick="ComingSoon();"><i class="mdi mdi-plus"></i> Add Quiz</a>
														</div>

														<div class="col-xl-8">
															<div class="row">
																<?php if (!empty($sections)) : ?>
																	<?php
																	$lesson_counter = 0;
																	$section_counter = 0;
																	$quiz_counter   = 0;

																	?>
																	<?php foreach ($sections as $key => $section) : ?>
																		<div class="col-xl-12 SectionFormContainer" id="SectionFormContainer" draggable="true" ondragstart="dragstart(event)" ondragover="dragover(event)" ondragend="drop(event)">
																			<div class="card bg-light text-seconday on-hover-action mb-5 shadow-sm rounded-0" id="section-<?= $section['section_id'] ?>">
																				<div class="card-body">
																					<h5 class="card-title" style="min-height: 35px;"><span class="font-weight-light">Section <?= ++$section_counter ?></span>: <?= $section['title'] ?> <div class="row justify-content-center alignToTitle float-right display-none" id="widgets-of-section-<?= $section['section_id'] ?>" style="display: none;">
																							<a href="" class="btn btn-outline-primary btn-rounded btn-sm ml-1" onclick="tab_action(event)"><i class="mdi mdi-sort-variant"></i> Move Down</a>
																							<a href="" class="btn btn-outline-primary btn-rounded btn-sm ml-1" id="move-up" onclick=""><i class="mdi mdi-sort-variant"></i> Move up</a>
																							<a href="" class="btn btn-outline-primary btn-rounded btn-sm ml-1" onclick="EditSectionForm('<?= $section['section_id'] ?>')"><i class="mdi mdi-sort-variant"></i> Edit Section</a>
																							<a href="<?= base_url() . 'admin/courses/deleteSection/' . $section['courseid'] . '/' . $section['section_id'] ?>" class="btn btn-outline-secondary btn-rounded btn-sm ml-1" name="button"><i class="mdi mdi-window-close"></i> Delete Section</a>
																						</div>
																					</h5>
																					<div class="clearfix"></div>
																					<?php foreach ($lessons as $index => $lesson) : ?>
																						<?php if ($section['section_id'] == $lesson['section_id']) : ?>
																							<div class="col-md-12 LessonFormContainer" draggable="true" ondragstart="dragstart(event)" ondragover="dragover(event)" ondragend="drop(event)">
																								<!-- Portlet card -->
																								<div class="card text-secondary on-hover-action shadow-sm rounded-0 mb-2" id="lesson-<?= $lesson['lesson_id'] ?>">
																									<div class="card-body thinner-card-body">
																										<div class="card-widgets display-none" id="widgets-of-lesson-<?= $lesson['lesson_id'] ?>" style="display: none;float:right;">
																											<a href="javascript::"><i class="fas fa-file text-dark" title="add attachment" onclick="addAtachmentForm('<?= $section['section_id'] ?>')" style="font-size: 16px;"></i> </a>
																											<a href="javascript::"><i class="fas fa-pencil-alt text-dark" title="edit lesson" onclick="ComingSoon();" style="font-size: 16px;"></i> </a>
																											<a href="<?= base_url() . 'admin/courses/deleteLesson/' . $lesson['courseid'] . '/' . $lesson['lesson_id'] ?>" title="delete lesson"><i class="fas fa-times text-dark" style="font-size: 16px;"></i></a>
																										</div>
																										<h5 class="card-title mb-0">
																											<span class="font-weight-light">
																												<?php if ($lesson['attachment_type'] == 'file') : ?>
																													<i class="fas fa-desktop text-dark" alt="" width="16"></i>
																												<?php elseif ($lesson['attachment_type'] == 'pdf') : ?>
																													<i class="fas fa-file-pdf text-dark" alt="" width="16"></i>
																												<?php elseif ($lesson['attachment_type'] == 'docx' || 'docx') : ?>
																													<i class="fas fa-file-word text-dark" alt="" width="16"></i>
																												<?php elseif ($lesson['attachment_type'] == 'img') : ?>
																													<i class="fas fa-images text-dark" alt="" width="16"></i>
																												<?php elseif ($lesson['attachment_type'] == 'text') : ?>
																													<i class="fas fa-file-code text-dark" alt="" width="16"></i>
																												<?php elseif ($lesson['attachment_type'] == 'zip') : ?>
																													<i class="fas fa-file-archive text-dark" alt="" width="16"></i>
																												<?php endif; ?>
																												Lesson <?= ++$lesson_counter ?> </span>: <?= $lesson['title'] ?>
																										</h5>
																									</div>
																								</div> <!-- end card-->

																							</div>
																						<?php endif; ?>
																					<?php endforeach; ?>
																				</div> <!-- end card-body-->
																			</div> <!-- end card-->
																		</div>
																	<?php endforeach; ?>
																<?php endif; ?>
															</div>
														</div>
													</div>
												</div>

												<div class="tab-pane" id="pricing">
													<form name="pricingForm" id="pricingForm" method="post">
														<div class="row justify-content-center">
															<div class="col-xl-8">
																<div class="form-group row mb-3">
																	<label class="col-md-2 col-form-label" for="price">Currency</label>
																	<div class="col-md-10">
																		<select class="form-control" name="currency_id" id="currency_id">
																			<option value="">choose</option>
																			<?php foreach ($currencies as $curr) : ?>
																				<option <?php if ($curr['currency_id'] == $rows['currency_id']) {
																							echo 'selected';
																						} ?> value="<?= $curr['currency_id'] ?>"><?= $curr['currency'] . " " . '(' . $curr['symbol'] . ')' ?></option>
																			<?php endforeach; ?>
																		</select>
																	</div>
																	<span class="price text-danger"></span>
																</div>

																<div class="form-group row mb-3">
																	<label class="col-md-2 col-form-label" for="price">Course Price</label>
																	<div class="col-md-10">
																		<input type="text" class="form-control" id="price" name="price" placeholder="Enter Course Course Price" value="<?= set_value('price', $rows['price']) ?>">
																	</div>
																	<span class="price text-danger"></span>
																</div>

																<div class="form-group row mb-3">
																	<label class="col-md-2 col-form-label" for="discounted_price">Discounted Price</label>
																	<div class="col-md-10">
																		<input type="text" class="form-control" name="discounted_price" id="discounted_price" value="<?= set_value('discounted_price', $rows['discounted_price']) ?>">
																	</div>
																	<span class="discounted_price text-danger"></span>
																</div>
															</div> <!-- end col -->
														</div> <!-- end row -->
														<div class="mb-3 text-center">
															<button class="btn btn-white  btn-outline-secondary btn-sm w-25" onclick="coursePrice();">Save</button>
														</div>
													</form>
												</div> <!-- end tab-pane -->

												<div class="tab-pane" id="media">
													<form name="mediaForm" id="mediaForm" enctype="multipart/form-data" action="<?= base_url() . 'admin/courses/saveMedia/' . $rows['courseid'] ?>" method="post" >
														<div class="row justify-content-center">

															<div class="col-xl-8">
																<div class="form-group row mb-3">
																	<label class="col-md-2 col-form-label" for="course_overview_provider">Course Overview Provider</label>
																	<div class="col-md-10">
																		<select class="form-control select2 select2-hidden-accessible" data-toggle="select2" onchange="check_Overview_provider(this.value)">
																			<option value="">choose</option>
																			<option value="youtube">Youtube</option>
																			<option value="html5">Html5</option>
																		</select>
																	</div>
																</div>
															</div> <!-- end col -->

															<div class="col-xl-8" id="youtube" style="display: none;">
																<div class="form-group row mb-3">
																	<label for="promo_link">Course Overview Url</label>
																	<input type="text" class="form-control" name="promo_link" id="promo_link" placeholder="E.g: https://www.youtube.com/watch?v=oBtf8Yglw2w" value="<?=set_value('promo_link',$rows['promo_link'])?>">
																</div>
															</div> <!-- end col -->

															<div class="col-xl-8" id="html5" style="display: none;">
																<div class="form-group row mb-3">
																	<label class="" for="">Course Overview Url</label>
																	<small>Students who watch a well-made promo video are 5X more likely to enroll in your course. We've seen that statistic go up to 10X for exceptionally awesome videos. Learn how to make yours awesome! </small>
																	<input type="file" class="dropify" name="promo_video" id="promo_video">
																</div>
															</div> <!-- end col -->

															<div class="col-xl-8">
																<div class="form-group row mb-3">
																	<label class="" for="">Course Thumbnail</label>
																	<small>Upload your course thumbnail here. It must meet our course thumbnail quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</small>
																	<input type="file" class="dropify" name="image" id="image" data-default-file="<?=base_url($rows['image'] ?? '')?>">
																</div>
															</div> <!-- end col -->

															<div class="col-xl-8 text-center">
																<button type="submit" name="submit" id="submit" class="btn btn-white  btn-outline-secondary btn-sm w-25" style="display:none ;">Save</button>
															</div> <!-- end col -->

														</div> <!-- end row -->
													</form>
												</div>
												<div class="tab-pane" id="seo">
													<form name="seoForm" id="seoForm" enctype="multipart/form-data" action="<?= base_url() . 'admin/courses/saveSeo/' . $rows['courseid'] ?>" method="post" >
													<div class="row justify-content-center">
														 <div class="col-xl-8">
															<div class="form-group row mb-3">
																<label class="col-md-2 col-form-label" for="website_keywords">meta keywords</label>
																<div class="col-md-10">
																	<input type="text" class="form-control bootstrap-tag-input" id = "meta_keywords" name="meta_keywords" data-role="tagsinput" style="width: 100%;" value="<?=set_value('meta_keywords',$rows['meta_keywords'])?>"/>
																</div>
																<span><?=form_error('meta_keywords')?></span>
															</div>
														</div> <!-- end col -->	


														<div class="col-xl-8">
															<div class="form-group row mb-3">
																<label class="col-md-2 col-form-label" for="meta_description">Meta Description</label>
																<div class="col-md-10">
																	<textarea name="meta_description" class="form-control"><?=set_value('meta_description',$rows['meta_description'])?></textarea>
																</div>
																<span><?=form_error('meta_description')?></span>
															</div>
														</div> <!-- end col -->
														
														<div class="col-xl-8 text-center">
																<button type="submit" name="submit" id="submit" class="btn btn-white  btn-outline-secondary btn-sm w-25">Save</button>
														</div> <!-- end col -->

													</div> <!-- end row -->
													</form>
												</div>
												<div class="tab-pane" id="finish">
													<div class="row">
														<div class="col-12">
															<div class="text-center">
																<h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
																<h3 class="mt-0">Thank you !</h3>

																<p class="w-75 mb-2 mx-auto">You Are Just One Click Away</p>

																<div class="mb-3 mt-3">
																	<a href="<?=base_url('admin/courses')?>"><button type="button" class="btn btn-primary text-center">Submit</button></a>
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

									</div>
								</div>
							</div>
						</div>

					</div>
				<?php else : ?>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Course Not found</h4>
							</div> <!-- end card body-->
						</div> <!-- end card -->
					</div><!-- end col-->
				<?php endif; ?>

			</div>
		</div>
	</section>
</div>

<!-- Modal with section form -->
<div class="modal fade content-admin-main" id="SectionFormModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModal">Add Section</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="SectionResponse"></div>
			</div>
		</div>
	</div>
</div>

<!-- Modal with section edit form -->
<div class="modal fade content-admin-main" id="EditSectionFormModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModal">Edit Section</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="EditSectionResponse"></div>
			</div>
		</div>
	</div>
</div>

<!-- Modal with Lesson form -->
<div class="modal fade content-admin-main" id="LessonFormModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModal">Add Lesson</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="LessonResponse"></div>
			</div>
		</div>
	</div>
</div>

<!-- Modal with Attachment form -->
<div class="modal fade content-admin-main" id="attachmentModel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModal">Add Attachment</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="attachmentResponse"></div>
			</div>
		</div>
	</div>
</div>

<!--- result sucess -->
<div class="modal fade content-admin-main" id="ajaxresponseModel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body text-center">
				<span><img src="<?= base_url() . 'assets/frontend/' ?>images/check.gif" width="160" alt=""></span>
				<div class="ajaxResponse"></div>
				<button type="button" class="btn btn-primary rounded rounded-circle" data-dismiss="modal" style="width:50px;height:50px;">Ok</button>
			</div>
		</div>
	</div>
</div>

<!--- comming soon -->
<div class="modal fade content-admin-main" id="comming_soon" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body text-center">
				<span><img src="<?= base_url() . 'assets/frontend/' ?>images/check.gif" width="160" alt=""></span>
				<div class=" message">
					<h4 class="text-primary">Coming Soon</h4>
				</div>
				<button type="button" class="btn btn-primary rounded rounded-circle" data-dismiss="modal" style="width:50px;height:50px;">Ok</button>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
	var blank_outcome = jQuery('#blank_outcome_field').html();
	var blank_requirement = jQuery('#blank_requirement_field').html();
	var mydiv = document.querySelector('.SectionFormContainer');
	var mydiv2 = document.querySelector('.LessonFormContainer');
	var SectionId = "";
	item_to_drag = null;
	item_to_drag_to = null;


	jQuery(document).ready(function() {
		jQuery('#blank_outcome_field').hide();
		jQuery('#blank_requirement_field').hide();
		calculateDiscountPercentage($('#discounted_price').val());

	});

	function ComingSoon() {
		var response = "Comming Soon";
		$('#comming_soon').modal("show");
		$('.message').innerHTML = response;
	}

	function showSectionForm() {
		$('#SectionFormModal').modal("show");

		$.ajax({

			url: '<?= base_url() . 'admin/courses/showSectionForm/' . $rows['courseid'] ?>',
			type: 'POST',
			data: {},
			dataType: 'json',
			success: function(response) {

				$('#SectionResponse').html(response["html"]);
				$('#urlid').html(response["urlid"]);
			}
		});

		$("body").on("submit", "#createSectionModel", function(e) {


			e.preventDefault();

			$.ajax({

				url: '<?= base_url() . 'admin/courses/saveSection/' . $rows['courseid'] ?>',
				type: 'POST',
				data: $(this).serializeArray(),
				dataType: 'json',
				success: function(response) {

					if (response['status'] == 0) {
						if (response["title"] != "") {
							$('.title').html(response["title"]).addClass('invalid-feedback d-block');
							$('#title').addClass('is-invalid d-block');

						} else {

							$('.title').html("").removeClass('invalid-feedback d-block');
							$('#title').removeClass('is-invalid d-block');
						}

					} else {

						$('#SectionFormModal').modal("hide");
						$('#ajaxresponseModel .ajaxResponse').html(response['message']);
						$('#ajaxresponseModel').modal("show");
						location.reload();

						$('.title').html("").removeClass('invalid-feedback d-block');
						$('#title').removeClass('is-invalid d-block');

					}
				}
			});
		});
	}

	function EditSectionForm(SectionId) {
		$('#EditSectionFormModal').modal("show");
		var SectionId = SectionId;
		console.log(SectionId);

		$.ajax({

			url: '<?= base_url() . 'admin/courses/showSectionEditForm/' ?>' + SectionId,
			type: 'POST',
			data: {},
			dataType: 'json',
			success: function(response) {

				$('#EditSectionResponse').html(response["html"]);
				$('#sectionsData').html(response["sections"]);
			}
		});

		$("body").on("submit", "#SectionEditModel", function(e) {


			e.preventDefault();

			$.ajax({

				url: '<?= base_url() . 'admin/courses/editSection/' ?>' + SectionId,
				type: 'POST',
				data: $(this).serializeArray(),
				dataType: 'json',
				success: function(response) {

					if (response['status'] == 0) {
						if (response["title"] != "") {
							$('.title').html(response["title"]).addClass('invalid-feedback d-block');
							$('#title').addClass('is-invalid d-block');

						} else {

							$('.title').html("").removeClass('invalid-feedback d-block');
							$('#title').removeClass('is-invalid d-block');
						}

					} else {

						$('#EditSectionFormModal').modal("hide");
						$('#ajaxresponseModel .ajaxResponse').html(response['message']);
						$('#ajaxresponseModel').modal("show");
						location.reload();

						$('.title').html("").removeClass('invalid-feedback d-block');
						$('#title').removeClass('is-invalid d-block');

					}
				}
			});
		});
	}

	function showLessonForm() {
		$('#LessonFormModal').modal("show");
		$.ajax({

			url: '<?= base_url() . 'admin/courses/showlessonForm/' . $rows['courseid'] ?>',
			type: 'POST',
			data: {},
			dataType: 'json',
			success: function(response) {

				$('#LessonResponse').html(response["html"]);
				$('.sections').html(response["sections"]);
			}
		});

		$("body").on("submit", "#createLessonModel", function(e) {


			e.preventDefault();
			$.ajax({

				url: '<?= base_url() . 'admin/courses/saveLesson/' . $rows['courseid'] ?>',
				type: 'POST',
				data: $(this).serializeArray(),
				dataType: 'json',
				success: function(response) {

					if (response['status'] == 0) {
						if (response["title"] != "") {
							$('.title').html(response["title"]).addClass('invalid-feedback d-block');
							$('#title').addClass('is-invalid d-block');

						} else {

							$('.title').html("").removeClass('invalid-feedback d-block');
							$('#title').removeClass('is-invalid d-block');
						}

					} else {


						$('#SectionFormModal .ImageajaxResponse').html(response['imagerrors']);
						$('#SectionFormModal').modal("hide");
						$('#ajaxresponseModel .ajaxResponse').html(response['message']);
						$('#ajaxresponseModel').modal("show");
						location.reload();

						$('.title').html("").removeClass('invalid-feedback d-block');
						$('#title').removeClass('is-invalid d-block');

					}
				}
			});
		});
	}

	function SaveBasicInfo() {

		$("body").on("submit", "#basicForm", function(e) {


			e.preventDefault();

			$.ajax({

				url: '<?= base_url() . 'admin/courses/SavebasicInfo/' . $rows['courseid'] ?>',
				type: 'POST',
				data: $(this).serializeArray(),
				dataType: 'json',
				success: function(response) {

					if (response['status'] == 0) {
						if (response["title"] != "") {
							$('.title').html(response["title"]).addClass('invalid-feedback d-block');
							$('#title').addClass('is-invalid d-block');

						} else {

							$('.title').html("").removeClass('invalid-feedback d-block');
							$('#title').removeClass('is-invalid d-block');
						}

					} else {

						$('#SectionFormModal').modal("hide");
						$('#ajaxresponseModel .ajaxResponse').html(response['message']);
						$('#ajaxresponseModel').modal("show");
						// location.reload();

						$('.title').html("").removeClass('invalid-feedback d-block');
						$('#title').removeClass('is-invalid d-block');

					}
				}
			});
		});
	}

	function SaveRequirements() {

		$("body").on("submit", "#requrementForm", function(e) {


			e.preventDefault();

			$.ajax({

				url: '<?= base_url() . 'admin/courses/requrementAdd/' . $rows['courseid'] ?>',
				type: 'POST',
				data: $(this).serializeArray(),
				dataType: 'json',
				success: function(response) {

					if (response['status'] == 0) {
						if (response["title"] != "") {
							$('.requirements').html(response["requirements"]).addClass('invalid-feedback d-block');
							$('#requirements').addClass('is-invalid d-block');

						} else {

							$('.requirements').html("").removeClass('invalid-feedback d-block');
							$('#requirements').removeClass('is-invalid d-block');
						}

					} else {

						$('#SectionFormModal').modal("hide");
						$('#ajaxresponseModel .ajaxResponse').html(response['message']);
						$('#ajaxresponseModel').modal("show");
						// location.reload();

						$('.requirements').html("").removeClass('invalid-feedback d-block');
						$('#requirements').removeClass('is-invalid d-block');

					}
				}
			});
		});
	}

	function SaveOutcomes() {

		$("body").on("submit", "#outcomesForm", function(e) {


			e.preventDefault();

			$.ajax({

				url: '<?= base_url() . 'admin/courses/outcomesAdd/' . $rows['courseid'] ?>',
				type: 'POST',
				data: $(this).serializeArray(),
				dataType: 'json',
				success: function(response) {

					if (response['status'] == 0) {
						if (response["title"] != "") {
							$('.outcomes').html(response["outcomes"]).addClass('invalid-feedback d-block');
							$('#outcomes').addClass('is-invalid d-block');

						} else {

							$('.outcomes').html("").removeClass('invalid-feedback d-block');
							$('#outcomes').removeClass('is-invalid d-block');
						}

					} else {

						$('#SectionFormModal').modal("hide");
						$('#ajaxresponseModel .ajaxResponse').html(response['message']);
						$('#ajaxresponseModel').modal("show");
						// location.reload();

						$('.outcomes').html("").removeClass('invalid-feedback d-block');
						$('#outcomes').removeClass('is-invalid d-block');

					}
				}
			});
		});
	}

	function coursePrice() {

		$("body").on("submit", "#pricingForm", function(e) {


			e.preventDefault();

			$.ajax({

				url: '<?= base_url() . 'admin/courses/savePrice/' . $rows['courseid'] ?>',
				type: 'POST',
				data: $(this).serializeArray(),
				dataType: 'json',
				success: function(response) {

					if (response['status'] == 0) {
						if (response["currency_id"] != "") {
							$('.currency_id').html(response["currency_id"]).addClass('invalid-feedback d-block');
							$('#currency_id').addClass('is-invalid d-block');

						} else {

							$('.currency_id').html("").removeClass('invalid-feedback d-block');
							$('#currency_id').removeClass('is-invalid d-block');
						}

						if (response["price"] != "") {
							$('.price').html(response["price"]).addClass('invalid-feedback d-block');
							$('#price').addClass('is-invalid d-block');

						} else {

							$('.price').html("").removeClass('invalid-feedback d-block');
							$('#price').removeClass('is-invalid d-block');
						}

						if (response["discounted_price"] != "") {
							$('.discounted_price').html(response["discounted_price"]).addClass('invalid-feedback d-block');
							$('#discounted_price').addClass('is-invalid d-block');

						} else {

							$('.discounted_price').html("").removeClass('invalid-feedback d-block');
							$('#discounted_price').removeClass('is-invalid d-block');
						}

					} else {

						$('#SectionFormModal').modal("hide");
						$('#ajaxresponseModel .ajaxResponse').html(response['message']);
						$('#ajaxresponseModel').modal("show");
						// location.reload();

						$('.price').html("").removeClass('invalid-feedback d-block');
						$('#price').removeClass('is-invalid d-block');

						$('.discounted_price').html("").removeClass('invalid-feedback d-block');
						$('#discounted_price').removeClass('is-invalid d-block');

						$('.currency_id').html("").removeClass('invalid-feedback d-block');
						$('#currency_id').removeClass('is-invalid d-block');

					}
				}
			});
		});
	}

	function addAtachmentForm(lessonId) {
		var lessonId = lessonId;
		console.log(lessonId);
		$('#attachmentModel').modal("show");
		$.ajax({

			url: '<?= base_url() . 'admin/courses/showattachmentForm/' ?>' + lessonId,
			type: 'POST',
			data: {},
			dataType: 'json',
			success: function(response) {

				$('#attachmentResponse').html(response["html"]);
				$('#sections').html(response["sections"]);
				$('#lessons').html(response["lessons"]);
			}
		});
	}

	function check_Overview_provider(provider) {
		if (provider === 'youtube') {
			$('#html5').hide();
			$('#youtube').show();
			$('#submit').show();
		} else if (provider === 'html5') {
			$('#youtube').hide();
			$('#html5').show();
			$('#submit').show();
		} else {
			$('#youtube').hide();
			$('#html5').hide();
		}
	}

	function dragstart(e) {

		mydiv.item_to_drag = e.currentTarget;
		mydiv2.item_to_drag = e.currentTarget;

	}

	function dragover(e) {
		mydiv.item_to_drag_to = e.currentTarget;
		mydiv2.item_to_drag_to = e.currentTarget;

	}

	function drop(e) {
		mydiv.item_to_drag_to.parentNode.insertBefore(mydiv.item_to_drag, mydiv.item_to_drag_to);
		mydiv2.item_to_drag_to.parentNode.insertBefore(mydiv2.item_to_drag, mydiv2.item_to_drag_to);

	}

	function tab_action(e) {
		var action = e.target.id;

		if (action == 'delete') {

			if (!confirm('Are you sure you want to delete this!')) {
				return;
			}

			e.currentTarget.remove();

		} else
		if (action == 'move-up') {
			var source = e.currentTarget;
			var destination = e.currentTarget.previousElementSibling;
			var container = e.currentTarget.parentNode;

			container.insertBefore(source, destination);
		} else
		if (action == 'move-down') {
			var source = e.currentTarget;
			var destination = e.currentTarget.nextElementSibling.nextElementSibling;
			var container = e.currentTarget.parentNode;

			container.insertBefore(source, destination);
		}


	}

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

	function ajax_get_sub_category(category_id) {
		console.log(category_id);
		$.ajax({
			url: 'http://localhost/Online_Learning_Management_System/user/ajax_get_sub_category/' + category_id,
			success: function(response) {
				jQuery('#sub_category_id').html(response);
			}
		});
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
			var percentage = document.querySelector('#discounted_percentag_input');
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


	var course_video_uploading = false;
	var ajax_course_video = null;

	function upload_course_video(e) {

		var form = document.querySelector('#createLessonModel');
		var inputs = form.querySelectorAll("input,select,textarea");
		var obj = {};
		var video_added = false;

		for (var i = 0; i < inputs.length; i++) {
			var key = inputs[i].name;

			if (key == 'video') {
				if (typeof inputs[i].files[0] == 'object') {
					obj[key] = inputs[i].files[0];
					video_added = true;
				}
			} else {
				obj[key] = inputs[i].value;
			}
		}

		if (course_video_uploading) {
			alert("Please wait while other video uploads");
			return;
		}
		//Getting file extension
		if (video_added) {

			var allowed = ['jpg', 'jpeg', 'png', 'mp4'];
			if (typeof obj.video == 'object') {
				var ext = obj.video.name.split(".").pop();
			}

			if (!allowed.includes(ext.toLowerCase())) {
				alert("Only these file types are allowed in profile video: " + allowed.toString(","));
				return;
			}
		}

		course_video_uploading = true;
		ajax_course_video_cancelled = false;
		document.querySelector('.js-video-upload-input').classList.add("hide");
		document.querySelector('.js-video-upload-cancel-button').classList.remove("hide");
		document.querySelector('.js-video-upload-info').classList.remove("hide");
		document.querySelector('.js-video-upload-info').innerHTML = obj.video.name;

		var myform = new FormData();
		for (key in obj) {
			myform.append(key, obj[key]);
		}

		var ajax = new XMLHttpRequest();

		ajax.addEventListener('readystatechange', function() {

			if (ajax.readyState == 4) {

				if (ajax.status == 200) {
					//everything went well
					$('#SectionFormModal').modal("hide");
					$('#ajaxresponseModel .ajaxResponse').innerHTML = ajax.responseText;
					$('#ajaxresponseModel').modal("show");
					window.location.reload();

				}

				course_video_uploading = false;
				document.querySelector('.js-video-upload-input').classList.remove("hide");
				document.querySelector('.js-video-upload-cancel-button').classList.add("hide");
				document.querySelector('.js-video-upload-info').classList.add("hide");
			}
		});

		ajax.addEventListener('error', function() {
			alert("an error occurred");
		});

		ajax.addEventListener('abort', function() {
			alert("Upload aborted");
		});
		ajax.upload.addEventListener('progress', function(e) {
			var percent = Math.round((e.loaded / e.total) * 100);
			document.querySelector('.progress-bar-video').style.width = percent + "%";
			document.querySelector('.progress-bar-video').innerHTML = percent + "%";

		});

		ajax.open('post', '<?= base_url() . 'admin/courses/saveLesson/' . $rows['courseid'] ?>', true);
		ajax.send(myform);

		ajax.open('post', '<?= base_url() . 'admin/courses/saveLesson/' . $rows['courseid'] ?>', true);
		ajax.send(myform);

	}


	function ajax_video_cancel() {

		ajax.abort();
	}

	var attachment_uploading = false;
	var ajax_attachment = null;

	function upload_attachment(e) {

		var form = document.querySelector('#addLessonAttachmentModel');
		var inputs = form.querySelectorAll("input,select,textarea");
		var obj = {};
		var attachment_added = false;

		for (var i = 0; i < inputs.length; i++) {
			var key = inputs[i].name;

			if (key == 'attachment') {
				if (typeof inputs[i].files[0] == 'object') {
					obj[key] = inputs[i].files[0];
					attachment_added = true;
				}
			} else {
				obj[key] = inputs[i].value;
			}
		}

		if (attachment_uploading) {
			alert("Please wait while other attachment uploads");
			return;
		}
		//Getting file extension
		if (attachment_added) {

			var allowed = ['zip', 'pdf', 'txt', 'xlsx', 'doc', 'docx', 'img', 'rar'];
			if (typeof obj.attachment == 'object') {
				var ext = obj.attachment.name.split(".").pop();
			}

			if (!allowed.includes(ext.toLowerCase())) {
				alert("Only these file types are allowed in profile attachment: " + allowed.toString(","));
				return;
			}
		}
		// console.log(obj);
		attachment_uploading = true;
		ajax_attachment_cancelled = false;
		document.querySelector('.js-attachment-upload-input').classList.add("hide");
		document.querySelector('.js-attachment-upload-cancel-button').classList.remove("hide");
		document.querySelector('.js-attachment-upload-info').classList.remove("hide");
		document.querySelector('.js-attachment-upload-info').innerHTML = obj.attachment.name;

		var myform = new FormData();
		for (key in obj) {
			myform.append(key, obj[key]);
		}

		var ajax = new XMLHttpRequest();

		ajax.addEventListener('readystatechange', function() {

			if (ajax.readyState == 4) {

				if (ajax.status == 200) {
					//everything went well
					$('#SectionFormModal').modal("hide");
					$('#ajaxresponseModel .ajaxResponse').innerHTML = ajax.responseText;
					$('#ajaxresponseModel').modal("show");
					window.location.reload();

				}

				attachment_uploading = false;
				document.querySelector('.js-attachment-upload-input').classList.remove("hide");
				document.querySelector('.js-attachment-upload-cancel-button').classList.add("hide");
				document.querySelector('.js-attachment-upload-info').classList.add("hide");
			}
		});

		ajax.addEventListener('error', function() {
			alert("an error occurred");
		});

		ajax.addEventListener('abort', function() {
			alert("Upload aborted");
		});
		ajax.upload.addEventListener('progress', function(e) {
			var percent = Math.round((e.loaded / e.total) * 100);
			document.querySelector('.progress-bar-attachment').style.width = percent + "%";
			document.querySelector('.progress-bar-attachment').innerHTML = percent + "%";

		});

		ajax.open('post', '<?= base_url() . 'admin/courses/addLessonAttachment/' . $rows['courseid'] ?>', true);
		ajax.send(myform);


	}
</script>
