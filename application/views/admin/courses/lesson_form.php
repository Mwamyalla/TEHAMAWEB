<form name="createLessonModel" id="createLessonModel" enctype="multipart/form-data" method="post">
	<div class="form-group">
		<label>Lesson Title</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text">
					<i class="fas fa-list"></i>
				</div>
			</div>
			<input type="text" class="form-control lesson_title" placeholder="title" name="title">
			<div id="urlid"></div>
		</div>
		<span class="title text-danger"></span>
	</div>

	<div class="form-group">
		<label for="section_id">Section</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text">
					<i class="fas fa-list"></i>
				</div>
			</div>
			<select class="form-control sections" name="section_id" id="section_id">

			</select>
		</div>
		<span class="section_id text-danger"></span>
	</div>

	<div class="form-group">
		<label>Articles</label>
		<textarea name="articles" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<label for="section_id">video Type</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text">
					<i class="fas fa-list"></i>
				</div>
			</div>
			<select class="form-control" name="lesson_type" id="lesson_type" onchange="show_lesson_type_form(this.value)">
				<option value="">select type of Video</option>
				<option value="video-file">Video local</option>
				<option value="video-file">Video url</option>
			</select>
		</div>
		<span class="lesson_type text-danger"></span>
	</div>

	<div class="" id="video" style="display: none;">

		<div class="form-group">
			<label for="lesson_provider">Lesson provider</label>
			<select class="form-control select2" data-toggle="select2" name="lesson_provider" id="lesson_provider" onchange="check_video_provider(this.value)">
				<option value="">select lesson provider</option>
				<option value="html5">HTML5</option>
				<option value="youtube">youtube</option>
			</select>
		</div>


		<div class="html5" id="html5" style="display: none;">

			<div class="form-group">
				<label>duration</label>
				<input type="text" class="form-control" name="duration" id="duration" placeholder="00:00:00">
			</div>

			<div class="my-4 row dropzone p-2">
				<div class="col-sm-4">
					<video controls class="js-video-upload-preview" style="width:100%;max-width:350px;height:220px;object-fit:cover;">
						<source src="" type="video/mp4" style="width:100%;max-width:350px;height:220px;object-fit:cover;">
					</video>
				</div>
				<div class="col-sm-8">
					<div class="h5"><b>Promotional video:</b></div>
					Students who watch a well-made promo video are 5X more likely to enroll in your course. We've seen that statistic go up to 10X for exceptionally awesome videos. Learn how to make yours awesome!

					<br><br>
					<label class="btn btn-primary light me-1 px-3 w-50"><i class="fa fa-camera m-0"></i>
						<input onchange="upload_course_video(event)" type="file" class="js-video-upload-input form-control d-none" name="video">
					</label>
					<div class="js-video-upload-info alert alert-primary light p-3 hide"></div>
					<button type="button" onclick="ajax_video_cancel()" class="js-video-upload-cancel-button btn btn-danger light btn-sm hide" style="float:right;">Cancel</button>
					<div class="progress my-4" style="height:7%;">
						<div class="progress-bar progress-bar-video" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
					</div>

				</div>
			</div>
		</div>

		<div class="" id = "youtube_vimeo" style="display: none;">
		    <div class="form-group">
                <label>duration</label>
                <input type="text" name ="duration" id = "duration" class="form-control" placeholder="00:00:00">
            </div>
            <div class="form-group">
                <label>video url</label>
                <input type="text" id = "video_url" name = "video_url" class="form-control" onchange="checkURLValidity(this.value)">
                <label class="form-label" id = "perloader" style ="margin-top: 4px; display: none;"><i class="mdi mdi-spin mdi-loading">&nbsp;</i>analyzing the url</label>
                <label class="form-label text-info" id = "status_verification" style ="margin-top: 4px;"></label>
            </div>
        </div>
        
        

	</div>

	<button type="submit" name="submit" id="submit" onchange="upload_course_video(event)" class="btn btn-primary m-t-15 waves-effect" style="display:none ;">Save</button>
</form>


<script>


	function show_lesson_type_form(param) {
		var file_type = document.querySelector(".file_types");
		var checker = param.split('-');
		var lesson_type = checker[0];
		var attachment_type = checker[1];

		if (lesson_type === "video") {
			$('#submit').hide();
			$('#video').show();
		} else {
			$('#video').hide();
			$('#submit').show();
		}
	}

	function check_video_provider(provider) {
		if (provider ===  'youtube' || provider === 'vimeo') {
            $('.html5').hide();
            $('#youtube_vimeo').show();
        	$('#submit').show();
        }else if(provider === 'html5'){
            $('#youtube_vimeo').hide();
            $('.html5').show();
        }else {
            $('#youtube_vimeo').hide();
            $('.html5').hide();
        }
	}

	function checkURLValidity(video_url) {
		var youtubePregMatch = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
		var vimeoPregMatch = /^(http\:\/\/|https\:\/\/)?(www\.)?(vimeo\.com\/)([0-9]+)$/;
		var verified = document.querySelector("#status_verification");
		if (video_url.match(youtubePregMatch)) {
			verified.innerHTML = "Valid link added";
			return true;
		} else if (vimeoPregMatch.test(video_url)) {
			verified.innerHTML = "Valid link added";
			return true;
		} else {
			verified.innerHTML = "invalid url your video source has to be either youtube";
			return false;
		}
	}
</script>
