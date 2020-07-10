<div class="container">
	<div class="jumbotron text-center">
		<h2>Add a Project</h2>
		<p>Adding projects, editing them and viewing them.</p>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form action="<?php echo base_url('admin/store_project'); ?>" method="post">
				<div class="row">
					<div class="col-md-2">
						<label for="name">Project Name</label>
					</div>
					<div class="col-md-4">
						<input type="text" name="project_name" class="form-control" placeholder="Type project name here...">
					</div>
					<div class="col-md-2">
						<label for="description">Project Description</label>
					</div>
					<div class="col-md-4">
						<textarea name="project_description" rows="3" class="form-control"></textarea>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-2">
						<label for="completion">Completed On</label>
					</div>
					<div class="col-md-4">
						<input type="date" name="project_completion" class="form-control">
					</div>
					<div class="col-md-2">
						<label for="description">Project Cost</label>
					</div>
					<div class="col-md-4">
						<input type="text" name="project_cost" class="form-control" placeholder="Type amount here...">
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-primary btn-sm">Save</button>
						<button type="reset" class="btn btn-warning btn-sm">Reset</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>