
<form name="createCourseModel" id="createCourseModel" enctype="multipart/form-data" method="post">

	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputEmail4">Title</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="fas fa-envelope"></i>
					</div>
				</div>
				<input type="text" class="form-control" placeholder="title" name="title">
			</div>
			<span class="title text-danger"></span>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="inputEmail4">Category</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="fas fa-envelope"></i>
					</div>
				</div>
				<select  class="form-control categories" placeholder="catid" name="catid" id="catid">
					
				</select>
			</div>
			<span class="catid text-danger"></span>
		</div>
		<div class="form-group col-md-6">
			<label for="inputPassword4">Sub Category</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="fas fa-envelope"></i>
					</div>
				</div>
				<select  class="form-control subcategories" placeholder="subcatid" name="subcatid">
					
				</select>
			</div>
			<span class="subcatid text-danger"></span>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="inputEmail4">Level</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="fas fa-envelope"></i>
					</div>
				</div>
				<select  class="form-control" placeholder="level" name="level">
					<option value="">choose</option>
					<option value="Beginner">Beginner</option>
					<option value="Intermediate">Intermediate</option>
					<option value="Professional">Professional</option>
				</select>
			</div>
			<span class="level text-danger"></span>
		</div>
		<div class="form-group col-md-6">
			<label for="inputPassword4">Language</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="fas fa-envelope"></i>
					</div>
				</div>
				<select  class="form-control languages" placeholder="lang_id" name="lang_id">
					
				</select>
			</div>
			<span class="lang_id text-danger"></span>
		</div>
	</div>

	<button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
</form>
