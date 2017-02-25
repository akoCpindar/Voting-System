<?php 
include '../library/config.php';
include '../class/class.college.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'collegeadd':
		collegeadd();
	break;
	case 'collegeedit':
		collegeEdit();
	break;
	case 'collegedel':
		collegeDel();
	break;
	default:
	header("location:../index.php?mod=aco");
} 
 function collegeadd(){
	$cname = $_POST['cname'];
	$cdesc = $_POST['cdesc'];
	
	$coll = new College();
	$result = $coll-> new_college ($cname,$cdesc);
	if($result){
		header("location:../index.php?mod=clg");
	}
	else{
		header("location:../index.php?mod=clg");
	}
 }
 function collegeEdit(){
	$id = $_POST['id'];
	$cname = $_POST['cname'];
	$cdesc = $_POST['cdesc'];
	
	$coll = new College();
	$result = $coll-> edit_college ($id,$cname,$cdesc);
	if($result){
		header("location:../index.php?mod=clg");
	}
	else{
		header("location:../index.php?mod=clg");
	}
 }
 function collegeDel(){
	$id = $_GET['id'];
	
	$coll = new College();
	$result = $coll-> del_college ($id);
	if($result){
		header("location:../index.php?mod=clg");
	}
	else{
		header("location:../index.php?mod=clg");
	}
 }
?>