	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<div id="page-wrapper"><br>
	<div class="col-lg-12">
		<div class="panel panel-default">
			<!-- /.panel-heading -->
			<div class="panel-heading text-center">
				<h4><b>Welcome to Voting System</b></h4>
			</div>

			<div class="panel-body">
				<form id="msform" action="../process/process.vote.php" method="Post">
					<input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="idnum" />
					<div style="font-size: 18px; margin-left: 390px;">
						<?php
						$result = $db->prepare("SELECT * FROM tbl_position");
						$result->execute();
						for($i=0; $row1 = $result->fetch(); $i++){
							$posname=$row1['pos_name'];
							if ($posname!='Senator' AND $posname!='Representative') {
								echo '<h3 class="fs-title">' . $posname . ':</h3>';
								echo '<div style="margin-left: 150px;">';
								if(isset($_POST[$posname])){
									echo '<input type="hidden" value="' . $_POST[$posname] . '" name="votes[]" />' . $candidate->get_candidate_vote($_POST[$posname]);
								}
								else{
									echo '-----------------';
								}
								echo '</div>';
							}
							if ($posname=='Senator') {

								echo '<h3 class="fs-title">' . $posname . ':</h3>';
								
								echo '<div style="margin-left: 150px;">';
								if(isset($_POST['votes'])){
									$senator=$_POST['votes'];
									$totalSenators = count($senator);
									for($i=0; $i < $totalSenators; $i++)
									{
										echo '<input type="hidden" value="' .  $senator[$i] . '" name="votes[]" />' . $candidate->get_candidate_vote($senator[$i]) . '<br>';
									}
								}
								else{
									echo '-----------------';
								}
								echo '</div>';
							}
							if ($posname=='Representative') {

								echo '<h3 class="fs-title">' . $posname . ':</h3>';
								
								echo '<div style="margin-left: 150px;">';
								if(isset($_POST['votes1'])){
									$representative=$_POST['votes1'];
									$totalSenators = count($representative);
									for($i=0; $i < $totalSenators; $i++)
									{
										echo '<input type="hidden" value="' .  $representative[$i] . '" name="votes[]" />' . $candidate->get_candidate_vote($representative[$i]) . '<br>';
									}
								}
								else{
									echo '-----------------';
								}
								echo '</div>';
							}
						}
						?>
						<div>
							<br><br>
						</div>
					</div>
					<center><a href="index.php?mod=listcandidate" class="btn btn-success">Cancel</a> -|- <button type="submit" class="btn btn-outline btn-primary">Submit</button></center><br>
				</form>
			</div>
			<div class="panel-footer text-center">
				Copyright 2016 <b>- Online Voting System -</b> All Rights Reserved.
			</div>
		</div>
	</div>
</div>
<!-- /#wrapper -->
<script src="../js/jquery.js"></script>

<!-- jQuery Version 1.11.0 -->
<script src="../js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="../js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
	$(document).ready(function() {
		$('#dataTables-example').dataTable();
	});
</script>
