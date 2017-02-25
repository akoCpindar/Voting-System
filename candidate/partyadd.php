<div class="col-lg">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Add Party</b></h4>
        </div>
        <div class="panel-body">
		<br><br><br>
		<form action="process/process.party.php?action=partyadd" method="POST" name="formadd">
            <div class="form-group col-md-6 col-md-offset-3 text-center">
				<label>Party Name</label>
				<input class="form-control" name="partyname" placeholder="Party Name">
				<br>
				<label>Party Description</label>
				<input class="form-control" name="partydesc" placeholder="Party Description">
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