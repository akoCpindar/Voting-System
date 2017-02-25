<?php 
include '../library/config.php';
include '../class/class.admin.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'adminadd':
		adminadd();
	break;
	case 'editadm':
		editadm();
	break;
	case 'deladm':
		deladm();
	break;
	default:
	header("location:../index.php?mod=adm");
} 
 function adminadd(){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mname = $_POST['mname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	
	$adm = new Admin();
	$result = $adm->new_admin($email,$password,$lname,$fname,$mname,$gender,$dob);
	if($result){
		header("location:../index.php?mod=adp");
	}
	else{
		header("location:../index.php?mod=adp");
	}
 }
function deladm(){
	$id = $_GET['id'];
	
	$adm = new Admin();
	$result = $adm->del_admin($id);
	if($result){
		header("location:../index.php?mod=adp");
	}
	else{
		header("location:../index.php?mod=adp");
	}
 }
function editadm(){
	$id = $_POST['id'];
	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mname = $_POST['mname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	
	$adm = new Admin();
	$result = $adm->edt_admin($email,$lname,$fname,$mname,$gender,$dob,$id);
	if($result){
		header("location:../index.php?mod=adp");
	}
	else{
		header("location:../index.php?mod=adp");
	}
 }
?>