<div class="panel-heading text-center">
    <h4><b>Dashboard</b></h4>
</div>
		
<div class="panel-body">
<center>
				<?php
					include('library/connect.php');
					$pos=new Position();
					foreach($pos->get_positionlist() as $row1){
						$posname=$row1['pos_name'];
						if(($posname != 'Senator') AND ($posname != 'Representative')) {
							
							$posid=$row1['pos_id'];
							echo '<div style="margin-top: 18px;">';
							echo '<strong>'.$posname.'</strong><br>';
							
							$results = $db->prepare("SELECT * FROM tbl_candidate WHERE pos_id= :winid ORDER BY can_votes DESC LIMIT 1");
							$results->bindParam(':winid', $posid);
							$results->execute();
							for($i=0; $rows = $results->fetch(); $i++){
								echo $rows['can_fname']. ' ' . $rows['can_mname'] . ' ' . $rows['can_lname'] .'&nbsp;&nbsp;=&nbsp;&nbsp;'.$rows['can_votes'].'<br>';
							}
							echo '</div>';
						}
						if(($posname == 'Senator') AND ($posname != 'Representative')) {
							
							$posid=$row1['pos_id'];
							echo '<div style="margin-top: 18px;">';
							echo '<strong>'.$posname.'</strong><br>';
							
							$results = $db->prepare("SELECT * FROM tbl_candidate WHERE pos_id= :winid ORDER BY can_votes DESC LIMIT 6");
							$results->bindParam(':winid', $posid);
							$results->execute();
							for($i=0; $rows = $results->fetch(); $i++){
								echo $rows['can_fname']. ' ' . $rows['can_mname'] . ' ' . $rows['can_lname'] .'&nbsp;&nbsp;=&nbsp;&nbsp;'.$rows['can_votes'].'<br>';
							}
							echo '</div>';
						}
					}
						
					echo '<div style="margin-top: 18px;">';
					echo '<strong>Representative</strong><br>';
					
					$posname=$row1['pos_id'];
					$results1 = $db->prepare("SELECT * FROM tbl_course");
					$results1->execute();
					for($i=0; $row2 = $results1->fetch(); $i++){
						$couid=$row2['cor_id'];
						$posname=$row1['pos_id'];
						
						$results = $db->prepare("SELECT * FROM tbl_candidate WHERE pos_id= :winid AND cor_id= :corid ORDER BY can_votes DESC LIMIT 1");
						$results->bindParam(':winid', $posid);
						$results->bindParam(':corid', $couid);
						$results->execute();
						
						for($i=0; $rows = $results->fetch(); $i++){
							echo $rows['can_fname']. ' ' . $rows['can_mname'] . ' ' . $rows['can_lname'] . '&nbsp;&nbsp;=&nbsp;&nbsp;'.$rows['can_votes'].'<br>';
						}	
					}
			?>
</center>
<br><br>	
    