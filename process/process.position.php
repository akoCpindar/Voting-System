<?php 
include '../library/config.php';
include '../class/class.position.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'positionadd':
		positionadd();
	break;
	case 'positionedit':
		positionEdit();
	break;
	case 'positiondel':
		positionDel();
	break;
	default:
	header("location:../index.php?mod=apo");
} 
 function positionadd(){
	$id=$_GET['id'];
	$position = $_POST['position'];
	
	$pos = new Position();
	$result = $pos-> new_position($position);
	if($result){
		header("location:../index.php?mod=pos");
	}
	else{
		header("location:../index.php?mod=pos");
	}
 }
 function positionEdit(){
	$id=$_POST['id'];
	$position = $_POST['position'];
	
	$pos = new Position();
	$result = $pos-> edit_position($id,$position);
	if($result){
		header("location:../index.php?mod=pos");
	}
	else{
		header("location:../index.php?mod=pos");
	}
 }
 
 function positionDel(){
	$id = $_GET['id'];
	
	$position = new Position();
	$result = $position->del_position($id);
	if($result){
		header("location:../index.php?mod=pos");
	}
	else{
		header("location:../index.php?mod=pos");
	}
 }
?>