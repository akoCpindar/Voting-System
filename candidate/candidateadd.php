<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Add New Candidate</b></h4>
        </div>
		<form action="process/process.candidate.php?action=candidateadd" method="POST" name="formadd">
        <!-- /.panel-heading -->
                        <div class="panel-body">
							<div class="form-group col-md-6 col-md-offset-3 text-center">
                                <label>Id Number </label>
                                <input type="number" name="idnumber" maxlength="7" class="form-control" placeholder="Ex. 1321080" required>
                            </div><br><br><br><br>
							<center><input type="submit" name="submit" class="btn btn-outline btn-primary" value="Submit"></center>
                        </div>
                        <!-- /.panel-body -->
		</form>
        <div class="panel-footer text-center">
             Copyright 2016 Online Voting System - All Rights Reserved.
        </div>
    </div>
</div>