<?php 
include '../library/config.php';
include '../class/class.student.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'studenteadd':
		studenteadd();
	break;
	case 'regstu':
		registerStudent();
	break;
	default:
	header("location:../index.php?mod=ast");
} 
 function studenteadd(){
	$idnumber = $_POST['idnumber'];
	$email = $_POST['email'];
	$sfname = $_POST['sfname'];
	$slname = $_POST['slname'];
	$smname = $_POST['smname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$coursename = $_POST['coursename'];
	$yearname = $_POST['yearname'];
	
	$stud = new Student();
	$result = $stud->new_student($idnumber,$slname,$sfname,$smname,$gender,$dob,$address,$mobile,$email,$coursename,$yearname);
	if($result){
		header("location:../index.php?mod=spr");
	}
	else{
		header("location:../index.php?mod=spr");
	}
 }
function registerStudent(){
	$idnumber = $_POST['idnumber'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$sfname = $_POST['sfname'];
	$slname = $_POST['slname'];
	$smname = $_POST['smname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$coursename = $_POST['coursename'];
	$yearname = $_POST['yearname'];
	
	if($password == $cpassword){
		$student = new Student();
		$result = $student->register_student($idnumber,$password,$slname,$sfname,$smname,$gender,$dob,$address,$mobile,$email,$coursename,$yearname);
		if($result){
			header("location:../index.php?mod=stureg");
		}
		else{
			header("location:../index.php?mod=stureg");
		}
	}
	else{
		header("location:../index.php?mod=stureg");
	}
 }
?>