<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Add New Admin</b></h4>
        </div>
		<form action="process/process.admin.php?action=adminadd" method="POST" name="formadd">
        <!-- /.panel-heading -->
                        <div class="panel-body">
							<div class="form-group col-xs-6 col-md-6">
                                <label>Email Address </label>
                                <input type="email" name="email" class="form-control" placeholder="Ex. me@gmail.com" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Password </label>
                                <input type="password" name="password" class="form-control" required>
                            </div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
                                <label>First Name </label>
                                <input type="text" name="fname" class="form-control" placeholder="first name" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Last Name </label>
                                <input type="text" name="lname" class="form-control" placeholder="last name" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Middle Name </label>
                                <input type="text" name="mname" class="form-control" placeholder="middle name" required>
                            </div><br><br><br><br><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Birthdate </label>
                                <input type="date" class="form-control" name="dob" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Gender </label><br>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="optionsRadiosInline2" value="Male" checked>Male
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="optionsRadiosInline3" value="Female">Female
                                </label>
							</div>
							<input type="submit" name="submit" class="btn btn-info col-md-6 col-md-offset-3" value="Submit">
                        </div>
                        <!-- /.panel-body -->
		</form>
        <div class="panel-footer text-center">
             Copyright 2016 Online Voting System - All Rights Reserved.
        </div>
    </div>
</div>