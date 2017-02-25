<div class="panel-heading text-center">
    <h4><b>Candidate Voting Results</b></h4>
</div>
		
<div class="panel-body">
<center>
	<?php
	include('library/connect.php');
	$pos=new Position();
	foreach($pos->get_positionlist() as $val){
		$posid=$val['pos_id'];
				
		$can=new Candidate();
		foreach($can->get_cantotalvote($posid) as $val1){
			$totalvote=$val1['sum(can_votes)'];
		}
	?>
		<div style="margin-top: 18px; font-size: 20px;">
		<strong><?php echo $val['pos_name'] ?> Total Votes <?php echo $totalvote ?></strong><br>
	<?php
		$results = $db->prepare("SELECT * FROM tbl_candidate WHERE pos_id= $posid ORDER BY can_votes DESC");
		$results->execute();						
		for($i=0; $rows = $results->fetch(); $i++){
			if($posid=='Representative'){
				echo $rows['cor_id'].'&nbsp;&nbsp;'.$rows['can_fname']. ' ' . $rows['can_mname'] . ' ' . $rows['can_lname'] .'&nbsp;&nbsp;=&nbsp;&nbsp;'.$rows['can_votes'];
			}
			else {
				echo $rows['can_fname']. ' ' . $rows['can_mname'] . ' ' . $rows['can_lname'] .'&nbsp;&nbsp;=&nbsp;&nbsp;'.$rows['can_votes'];
			}
			echo " ";
			if($totalvote==0){
				echo "0"; 
			}
			else{
			?>
				<img src="images/poll.gif"
				width='<?php echo(100*round($rows['can_votes']/($totalvote),2)); ?>'
				height='10'>
				<?php echo (100*round($rows['can_votes']/($totalvote),3)); 
			}
			echo " %</b><br>";
		}
		echo '</div>';
	}
	?>
</center>
<br><br>	
    