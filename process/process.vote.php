<?php
include('../library/connect.php');
$idnum=$_POST['idnum'];
$status='Voted';
$sql = "UPDATE tbl_student SET stu_status=? WHERE stu_idnumber=?";
$qa = $db->prepare($sql);
$qa->execute(array($status,$idnum));

$add=1;
$edittable=$_POST['votes'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
	$sql1 = "UPDATE tbl_candidate SET can_votes=can_votes+? WHERE can_idnumber=?";
	$q = $db->prepare($sql1);
	$q->execute(array($add,$edittable[$i]));

	$sql2 = "INSERT INTO tbl_vlist (can_idnumber,stu_idnumber,vlt_date_voted,vlt_time_voted) VALUES (:canidnumber,:stuidnumber,NOW(),NOW())";
	$qs = $db->prepare($sql2);
	$qs->execute(array(':canidnumber'=>$edittable[$i],':stuidnumber'=>$idnum));
}
header("location: ../vote/notification.php");
mysql_close($con);
?>