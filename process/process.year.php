<?php 
include '../library/config.php';
include '../class/class.year.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'yearadd':
		yearadd();
	break;
	case 'yearedit':
		yearEdit();
	break;
	case 'yeardel':
		yearDel();
	break;
	default:
	header("location:../index.php?mod=aye");
} 
 function yearadd(){
	$yernumber = $_POST['yernumber'];
	
	$yer = new Year();
	$result = $yer-> new_year($yernumber);
	if($result){
		header("location:../index.php?mod=yer");
	}
	else{
		header("location:../index.php?mod=yer");
	}
 }
 function yearEdit(){
	$id = $_POST['id'];
	$yernumber = $_POST['yernumber'];
	
	$yer = new Year();
	$result = $yer-> edit_year($id,$yernumber);
	if($result){
		header("location:../index.php?mod=yer");
	}
	else{
		header("location:../index.php?mod=yer");
	}
 }
 function yearDel(){
	$id = $_GET['id'];
	
	$yer = new Year();
	$result = $yer-> del_year($id);
	if($result){
		header("location:../index.php?mod=yer");
	}
	else{
		header("location:../index.php?mod=yer");
	}
 }
?>