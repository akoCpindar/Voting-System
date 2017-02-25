<div class="panel-heading text-center">
    <h4><b>Running For Candidate</b></h4>
</div>
<div class="panel-body">
	<form action="../process/process.candidate.php?action=candidateadd" method="POST" name="formadd">
        <div class="form-group text-center">
            <input class="form-control" name="idnumber" placeholder="ID Number" required>
            <input class="form-control" name="cfname" style="margin-top: 5px;" placeholder="First Name" required>
            <input class="form-control" name="clname" style="margin-top: 5px;" placeholder="Middle Name" required>
            <input class="form-control" name="cmname" style="margin-top: 5px;" placeholder="Last Name" required>
			<input type="date" class="form-control" name="dob" style="margin-top: 5px;" name="dob" required>
            <input class="form-control" name="gender" style="margin-top: 5px;" placeholder="Gender" required>
            <input type="email" class="form-control" style="margin-top: 5px;" name="email" placeholder="Email" required>
            <input class="form-control" name="mobile" style="margin-top: 5px;" placeholder="Mobile" required>
            <input class="form-control" name="address" style="margin-top: 5px;" placeholder="Address" required>
			<select name="clgname" style="margin-top: 5px;" class="form-control" required>
				<option>-Select College-</option>
				<?php
					$college = new College();
					$list = $college->get_collegename(); 
					foreach($list as $val){				
					?>
				<option value="<?php echo $val['col_id']?>"><?php echo $val['col_fname'];?></option>
				<?php } ?>
			</select>
			<select name="coursename" style="margin-top: 5px;" class="form-control" required>
				<option>-Select Course-</option>
				<?php
					$course = new Course();
					$list = $course->get_coursename(); 
					foreach($list as $val1){				
					?>
				<option value="<?php echo $val1['cor_id']?>"><?php echo $val1['cor_name'];?></option>
				<?php } ?>
			</select>
			<select name="yearname" style="margin-top: 5px;" class="form-control">
				<option>-Select Year-</option>
				<?php
					$yr = new Year();
					$list = $yr->get_yearname(); 
					foreach($list as $val4){				
					?>
				<option value="<?php echo $val4['yer_id']?>"><?php echo $val4['yer_number']?></option>
				<?php } ?>
			</select>
			<select name="posname" style="margin-top: 5px;" class="form-control" required>
				<option>-Select Position-</option>
				<?php
					$position = new Position();
					$list = $position->get_positioname(); 
					foreach($list as $val2){				
					?>
				<option value="<?php echo $val2['pos_id']?>"><?php echo $val2['pos_name'];?></option>
				<?php } ?>
			</select>
			<select name="partyname" style="margin-top: 5px;" class="form-control" required>
				<option>-Select Party-</option>
				<?php
					$party = new Party();
					$list = $party->get_partyname(); 
					foreach($list as $val3){				
					?>
				<option value="<?php echo $val3['par_id']?>"><?php echo $val3['par_name'];?></option>
				<?php } ?>
			</select>
			<a href="../system/login.php" class="btn btn-primary" style="color: white;margin-top: 5px;">Back</a> | <button type="submit" style="margin-top: 5px;"  class="btn btn-outline btn-primary">Submit</button>
        </div>
	</form>
    </div>