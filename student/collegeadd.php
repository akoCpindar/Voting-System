<div class="col-lg">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Add College</b></h4>
        </div>
        <div class="panel-body">
		<br><br><br>
		<form action="process/process.college.php?action=collegeadd" method="POST" name="formadd">
            <div class="form-group col-md-6 col-md-offset-3 text-center">
				<label>College Name</label>
				<input class="form-control" name="cname" placeholder="College Name">
				<br>
				<label>College Description</label>
				<input class="form-control" name="cdesc" placeholder="College Description">
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