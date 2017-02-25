<?php 
include '../library/config.php';
include '../class/class.candidate.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'candidateadd':
		newCandidate();
	break;
	case 'candidateedit':
		candidateEdit();
	break;
	case 'delcan':
		delcan();
	break;
	default:
	header("location:../index.php?mod=aca");
} 
 function newCandidate(){
	$idnumber = $_POST['idnumber'];
	$cfname = $_POST['cfname'];
	$clname = $_POST['clname'];
	$cmname = $_POST['cmname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$posname = $_POST['posname'];
	$partyname = $_POST['partyname'];
	$clgname = $_POST['clgname'];
	$coursename = $_POST['coursename'];
	$yearname = $_POST['yearname'];
	
	$cand = new Candidate();
	$result = $cand->new_candidate($idnumber,$clname,$cfname,$cmname,$gender,$dob,$address,$mobile,$email,$posname,$partyname,$coursename,$yearname,$clgname);
	if($result){
		header("location:../index.php?mod=can");
	}
	else{
		header("location:../index.php?mod=can");
	}
 }
 function candidateEdit(){
	$id = $_POST['id'];
	$posname = $_POST['posname'];
	$partyname = $_POST['partyname'];
	$idnumber = $_POST['idnumber'];
	$email = $_POST['email'];
	$cfname = $_POST['cfname'];
	$clname = $_POST['clname'];
	$cmname = $_POST['cmname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$clgname = $_POST['clgname'];
	$coursename = $_POST['coursename'];
	$yearname = $_POST['yearname'];
	
	$cand = new Candidate();
	$result = $cand->edit_candidate($id,$idnumber,$clname,$cfname,$cmname,$gender,$dob,$address,$mobile,$email,$posname,$partyname,$coursename,$yearname,$clgname);
	if($result){
		header("location:../index.php?mod=can");
	}
	else{
		header("location:../index.php?mod=can");
	}
 }
function delcan(){
	$id = $_GET['id'];
	
	$cand = new Candidate();
	$result = $cand->del_candidate($id);
	if($result){
		header("location:../index.php?mod=can");
	}
	else{
		header("location:../index.php?mod=can");
	}
 }
?>