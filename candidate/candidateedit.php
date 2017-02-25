<!-- DataTables CSS -->
<link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4><b>Edit Candidate</b></h4>
        </div>
		<form action="process/process.candidate.php?action=candidateedit" method="POST" name="formadd">
        <!-- /.panel-heading -->
						<?php
							$id=$_GET['id'];
							foreach($candidate->get_candidate_information($id) as $val){
								
								
						?>
                        <div class="panel-body">
							<input type="hidden" name="id" value="<?php echo $id ?>">
							<div class="form-group col-xs-6 col-md-6">
								<label>Position Name</label>
								<select name="posname" class="form-control">
									<option value="<?php echo $val['pos_id']; ?>"><?php echo $position->get_position_name($val['pos_id']); ?></option>
									<?php
									$list = $position->get_positioname(); 
									foreach($list as $val1){				
									?>
									<option value="<?php echo $val1['pos_id'];?>"><?php echo $val1['pos_name'];?></option>
									<?php } ?>
								</select>
							</div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
								<label>Party Name</label>
								<select name="partyname" class="form-control">
									<option value="<?php echo $val['par_id']; ?>"><?php echo $party->get_party_name($val['par_id']); ?></option>
									<?php
									$list = $party->get_partyname(); 
									foreach($list as $val2){				
									?>
									<option value="<?php echo $val2['par_id']?>"><?php echo $val2['par_id']?></option>
									<?php } ?>
								</select>
							</div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Id Number </label>
                                <input type="number" name="idnumber" maxlength="7" class="form-control" value="<?php echo $val['can_idnumber']; ?>" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Email Address </label>
                                <input type="email" name="email" class="form-control" value="<?php echo $val['can_email']; ?>" required>
                            </div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
                                <label>First Name </label>
                                <input type="text" name="cfname" class="form-control" value="<?php echo $val['can_fname']; ?>" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Last Name </label>
                                <input type="text" name="clname" class="form-control" value="<?php echo $val['can_lname']; ?>" required>
                            </div>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Middle Name </label>
                                <input type="text" name="cmname" class="form-control" value="<?php echo $val['can_mname']; ?>" required>
                            </div><br><br><br><br><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Birthdate </label>
                                <input type="date" class="form-control" name="dob" value="<?php echo $val['can_dob']; ?>" required>
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
                                <input type="text" class="form-control" name="address" value="<?php echo $val['can_address']; ?>" required>
                            </div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
                                <label>Mobile No. </label>
                                <input type="number" name="mobile" class="form-control" value="<?php echo $val['can_mobile']; ?>" required>
                            </div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
								<label>College Name</label>
								<select name="clgname" class="form-control">
									<option value="<?php echo $val['col_id']; ?>"><?php echo $course->get_course_name($val['col_id']); ?></option>
									<?php
									$colle = new College();
									$list = $colle->get_collegename(); 
									foreach($list as $val5){				
									?>
									<option value="<?php echo $val5['col_id']?>"><?php echo $val5['col_fname']?></option>
									<?php } ?>
								</select>
							</div><br><br><br><br>
							<div class="form-group col-xs-6 col-md-6">
								<label>Course</label>
								<select name="coursename" class="form-control">
									<option value="<?php echo $val['cor_id']; ?>"><?php echo $course->get_course_name($val['cor_id']); ?></option>
									<?php
									$cor = new Course();
									$list = $cor->get_coursename(); 
									foreach($list as $val3){				
									?>
									<option value="<?php echo $val3['cor_id']?>"><?php echo $val3['cor_name']?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group col-xs-6 col-md-6">
								<label>Year</label>
								<select name="yearname" class="form-control">
									<option value="<?php echo $val['yer_id']; ?>"><?php echo $year->get_year_number($val['yer_id']); ?></option>
									<?php
									$yr = new Year();
									$list = $yr->get_yearname(); 
									foreach($list as $val4){				
									?>
									<option value="<?php echo $val4['yer_id']?>"><?php echo $val4['yer_number']?></option>
									<?php } ?>
								</select>
							</div>
							<?php } ?>
							<input type="submit" name="submit" class="btn btn-info col-md-6 col-md-offset-3" value="Update">
							
                        </div>
                        <!-- /.panel-body -->
		</form>
        <div class="panel-footer text-center">
             Copyright 2016 Online Voting System - All Rights Reserved.
        </div>
    </div>
</div>