<div class="panel-heading text-center">
    <h4><b>Student Registration</b></h4>
</div>
<div class="panel-body">
	<form action="../process/process.student.php?action=regstu" method="POST" name="formadd">
        <div class="form-group text-center">
            <input class="form-control" name="idnumber" placeholder="ID Number" required>
            <input class="form-control" style="margin-top: 5px;" name="email" placeholder="Email Address" required>
            <input class="form-control" style="margin-top: 5px;" type="password" name="password" placeholder="Password" required>
            <input class="form-control" style="margin-top: 5px;" type="password" name="cpassword" placeholder="Confirm Password" required>
            <input class="form-control" style="margin-top: 5px;" name="sfname" placeholder="First Name" required>
            <input class="form-control" style="margin-top: 5px;" name="smname" placeholder="Middle Name" required>
            <input class="form-control" style="margin-top: 5px;" name="slname" placeholder="Last Name" required>
            <input class="form-control" style="margin-top: 5px;" name="dob" placeholder="Birthdate" type="date" required>
            <div class="form-group">
                                <label>Gender </label><br>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="optionsRadiosInline2" value="Male" checked>Male
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="optionsRadiosInline3" value="Female">Female
                                </label>
            </div>
            <input class="form-control" style="margin-top: 5px;" name="address" placeholder="Address"required>
            <input class="form-control" style="margin-top: 5px;" name="mobile" placeholder="Mobile No."required>
			
			<div class="form-group">
				<label>Course</label>
				<select name="coursename" class="form-control">
					<option>-No Selected-</option>
					<?php
					$cor = new Course();
					$list = $cor->get_coursename(); 
					foreach($list as $val2){				
					?>
					<option value="<?php echo $val2['cor_id']?>"><?php echo $val2['cor_name']?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Year</label>
				<select name="yearname" class="form-control">
					<option>-No Selected-</option>
					<?php
					$yr = new Year();
					$list = $yr->get_yearname(); 
					foreach($list as $val1){				
					?>
					<option value="<?php echo $val1['yer_id']?>"><?php echo $val1['yer_number']?></option>
					<?php } ?>
				</select>
			</div>
			<a href="../system/login.php" class="btn btn-primary" style="color: white;">Back</a> | <button type="submit" class="btn btn-outline btn-primary">Submit</button>
        </div>
	</form>
   </div>