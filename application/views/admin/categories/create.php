<form  name="createSubCategoryModel" id="createSubCategoryModel" enctype="multipart/form-data"  method="post">
	<div class="form-group">
		<label>Category</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text">
					<i class="fas fa-envelope"></i>
				</div>
			</div>
			<input type="text" class="form-control" placeholder="category" name="category">
		</div>
		<span class="category text-danger"></span>
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
