<form name="addLessonAttachmentModel" id="addLessonAttachmentModel" enctype="multipart/form-data" method="post">

	<div class="form-group">
		<label>Lesson</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text">
					<i class="fas fa-list"></i>
				</div>
			</div>
			<select class="form-control lessons" name="lesson_id" id="lessons">

			</select>
		</div>
		<span class="lesson_id text-danger"></span>
	</div>

	<div class="form-group">
		<label for="section_id">Attachment Type</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text">
					<i class="fas fa-list"></i>
				</div>
			</div>
			<select class="form-control" name="lesson_type" id="lesson_type" onchange="show_attachment_type_form(this.value)">
				<option value="">select type of attachment</option>
				<option value="other-txt">Text file</option>
				<option value="other-pdf">Pdf file</option>
				<option value="other-docx">Document file</option>
				<option value="other-zip">Zip file</option>
				<option value="other-rar">Rar file</option>
				<option value="other-img">Image file</option>
			</select>
		</div>
		<span class="lesson_type text-danger"></span>
	</div>

	<div class="" id="other" style="display: block;">



		<div class="my-4 row dropzone p-2">
			<div class="col-sm-4">
				<div controls class="js-attachment-upload-preview" style="width:100%;max-width:350px;height:220px;object-fit:cover;">
					<span class="file_extension justify-content-center align-content-center d-flex py-5">

					</span>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="h5"><b>Attachment File:</b></div>
				Learn how to make yours awesome!

				<br><br>
				<label class="btn btn-primary light me-1 px-3 w-50"><i class="fa fa-camera m-0"></i>
					<input onchange="upload_attachment(event)" type="file" class="js-attachment-upload-input form-control d-none" name="attachment">
				</label>
				<div class="js-attachment-upload-info alert alert-primary light p-3 hide"></div>
				<button type="button" onclick="ajax_attachment_cancel()" class="js-attachment-upload-cancel-button btn btn-danger light btn-sm hide" style="float:right;">Cancel</button>
				<div class="progress my-4" style="height:7%;">
					<div class="progress-bar progress-bar-attachment" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
				</div>

			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Attachment Title</label>
		<div class="input-group file_types">
			<span class="file_types text-danger"></span>

		</div>

	</div>

	<button type="submit" name="submit" id="submit" onchange="upload_attachment(event)" class="btn btn-primary m-t-15 waves-effect" style="display:none ;">Save</button>
</form>
<script>
	function show_attachment_type_form(param) {
		var file_type = document.querySelector(".file_types");
		var file_ext = document.querySelector(".file_extension");
		var checker = param.split('-');
		var lesson_type = checker[0];
		var attachment_type = checker[1];
		$('#other').show();
		file_type.innerHTML = '<input type="text" class="form-control" readonly="" placeholder="title" value="' + attachment_type + '" name="attachment_type">';

		if (attachment_type == 'pdf') {
			file_ext.innerHTML = '<i class="fas fa-file-pdf text-secondary" alt="pdf" style="width:100%;max-width:350px;height:220px;font-size:120px;"></i>';

		}

		if (attachment_type == 'docx') {
			file_ext.innerHTML = '<i class="fas fa-file-word text-secondary" alt="doc" style="width:100%;max-width:350px;height:220px;font-size:120px;"></i>';

		}

		if (attachment_type == 'zip') {
			file_ext.innerHTML = '<i class="fas fa-file-archive text-secondary" alt="zip" style="width:100%;max-width:350px;height:220px;font-size:120px;"></i>';

		}

		if (attachment_type == 'txt') {
			file_ext.innerHTML = '<i class="fas fa-file-code text-secondary" alt="txt" style="width:100%;max-width:350px;height:220px;font-size:120px;"></i>';

		}
		if (attachment_type == 'img') {
			file_ext.innerHTML = '<i class="fas fa-images text-secondary" alt="img" style="width:100%;max-width:350px;height:220px;font-size:120px;"></i>';
		}	

		if (lesson_type === "video") {
			$('#submit').hide();
			$('#video').show();
		} else {
			$('#video').hide();
			$('#submit').show();
		}
	}
</script>
