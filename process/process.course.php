<?php 
include '../library/config.php';
include '../class/class.course.php';

$action=(isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
	case 'courseadd':
		courseadd();
	break;
	case 'courseedit':
		courseEdit();
	break;
	case 'coursedel':
		courseDel();
	break;
	default:
	header("location:../index.php?mod=acr");
} 
 function courseadd(){
	$corname = $_POST['corname'];
	
	$cor = new Course();
	$result = $cor-> new_course($corname);
	if($result){
		header("location:../index.php?mod=cor");
	}
	else{
		header("location:../index.php?mod=cor");
	}
 }
 function courseEdit(){
	$id = $_POST['id'];
	$corname = $_POST['corname'];
	
	$cor = new Course();
	$result = $cor-> edit_course($id,$corname);
	if($result){
		header("location:../index.php?mod=cor");
	}
	else{
		header("location:../index.php?mod=cor");
	}
 }
 function courseDel(){
	$id = $_GET['id'];
	
	$cor = new Course();
	$result = $cor-> del_course($id);
	if($result){
		header("location:../index.php?mod=cor");
	}
	else{
		header("location:../index.php?mod=cor");
	}
 }
?>