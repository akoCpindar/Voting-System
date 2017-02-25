<?php 
include '../library/config.php';
include '../class/class.party.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'partyadd':
		partyadd();
	break;
	case 'partyedit':
		partyEdit();
	break;
	case 'partydel':
		partyDel();
	break;
	default:
	header("location:../index.php?mod=apo");
} 
 function partyadd(){
	$partyname = $_POST['partyname'];
	$partydesc = $_POST['partydesc'];
	
	$par = new Party();
	$result = $par-> new_party ($partyname,$partydesc);
	if($result){
		header("location:../index.php?mod=par");
	}
	else{
		header("location:../index.php?mod=par");
	}
 }
 function partyEdit(){
	$id = $_POST['id'];
	$partyname = $_POST['partyname'];
	$partydesc = $_POST['partydesc'];
	
	$par = new Party();
	$result = $par-> edit_party ($id, $partyname,$partydesc);
	if($result){
		header("location:../index.php?mod=par");
	}
	else{
		header("location:../index.php?mod=par");
	}
 }
 function partyDel(){
	$id = $_GET['id'];
	
	$par = new Party();
	$result = $par->del_party($id);
	if($result){
		header("location:../index.php?mod=par");
	}
	else{
		header("location:../index.php?mod=par");
	}
 }
?>