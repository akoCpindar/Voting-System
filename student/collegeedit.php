<div class="col-lg">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Edit College</b></h4>
        </div>
        <div class="panel-body">
		<br><br><br>
		<form action="process/process.college.php?action=collegeedit" method="POST" name="formadd">
			<?php
				$id=$_GET['id'];
			?>
            <div class="form-group col-md-6 col-md-offset-3 text-center">
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<label>College Name</label>
				<input class="form-control" name="cname" value="<?php echo $college->get_college_name($id)?>">
				<br>
				<label>College Description</label>
				<input class="form-control" name="cdesc" value="<?php echo $college->get_college_name($id)?>">
				<br>
				<button type="submit" class="btn btn-outline btn-primary">Submit</button>
            </div>
        </div>
		</form>
		<br><br>
        <div class="panel-footer text-center">
           Copyright 2016 Online Voting System - All Rights Reserved.
        </div>
    </div>
</div>