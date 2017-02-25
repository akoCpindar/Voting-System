<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Edit Admin</b></h4>
        </div>
		<form action="process/process.admin.php?action=editadm" method="POST" name="formadd">
        <!-- /.panel-heading -->
                        <div class="panel-body">
						<?php
							$id=$_GET['id'];
							$adm = new Admin();
							foreach($adm->get_admin_data($id) as $val){
						?>
							<input type="hidden" name="id" value="<?php echo $id ?>">
							<div class="form-group col-xs-6 col-md-6">
                                <label>Email Address </label>
                                <input type="email" name="email" class="form-control" value="<?php echo $val['adm_email']; ?>" required>
                            </div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
                                <label>First Name </label>
                                <input type="text" name="fname" class="form-control" value="<?php echo $val['adm_fname']; ?>" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Last Name </label>
                                <input type="text" name="lname" class="form-control" value="<?php echo $val['adm_lname']; ?>" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Middle Name </label>
                                <input type="text" name="mname" class="form-control" value="<?php echo $val['adm_mname']; ?>" required>
                            </div><br><br><br><br><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Birthdate </label>
                                <input type="date" class="form-control" name="dob" value="<?php echo $val['adm_dob']; ?>" required>
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
							
							<?php } ?>
							<input type="submit" name="submit" class="btn btn-info col-md-6 col-md-offset-3" value="Submit">
                        </div>
                        <!-- /.panel-body -->
		</form>
        <div class="panel-footer text-center">
             Copyright 2016 Online Voting System - All Rights Reserved.
        </div>
    </div>
</div>