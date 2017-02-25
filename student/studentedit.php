<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Edit Student</b></h4>
        </div>
		<form action="process/process.student.php?action=studenteadd" method="POST" name="formadd">
			<?php
				$id=$_GET['id'];
			?>
        <!-- /.panel-heading -->
                        <div class="panel-body">
							<div class="form-group col-xs-6 col-md-6">
                                <label>Id Number </label>
                                <input type="number" name="sidnumber" maxlength="7" class="form-control" placeholder="Ex. 1321080" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Email Address </label>
                                <input type="email" name="email" class="form-control" placeholder="Ex. me@gmail.com" required>
                            </div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
                                <label>First Name </label>
                                <input type="text" name="sfname" class="form-control" placeholder="first name" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Last Name </label>
                                <input type="text" name="slname" class="form-control" placeholder="last name" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Middle Name </label>
                                <input type="text" name="smname" class="form-control" placeholder="middle name" required>
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
                            </div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Address </label>
                                <input type="text" class="form-control" name="address" placeholder="Address" required>
                            </div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Mobile No. </label>
                                <input type="number" name="mobile" class="form-control" placeholder="Mobile No. " required>
                            </div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
								<label>Course</label>
								<select name="coursename" class="form-control">
									<option>-No Selected-</option>
									<?php
									$cor = new Course();
									$list = $cor->get_coursename(); 
									foreach($list as $val){				
									?>
									<option value="<?php echo $val['cor_id']?>"><?php echo $val['cor_name']?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group col-xs-6 col-md-6">
								<label>Year</label>
								<select name="yearname" class="form-control">
									<option>-No Selected-</option>
									<?php
									$yr = new Year();
									$list = $yr->get_yearname(); 
									foreach($list as $val){				
									?>
									<option value="<?php echo $val['yer_id']?>"><?php echo $val['yer_number']?></option>
									<?php } ?>
								</select>
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