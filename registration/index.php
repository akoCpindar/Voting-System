<?php
include '../library/config.php';
include '../class/class.course.php';
include '../class/class.position.php';
include '../class/class.party.php';
include '../class/class.college.php';
include '../class/class.year.php';

$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
$sub = (isset($_GET['sub']) && $_GET['sub'] != '') ? $_GET['sub'] : '';
$action = (isset($_GET['act']) && $_GET['act'] != '') ? $_GET['act'] : '';

?>
<!DOCTYPE html>
<html>
<head>
<title>Voting System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../css/plugins/dataTables.bootstrap.css" rel="stylesheet">
</head>
<body style="background: url(../images/voting.jpg); background-repeat: no-repeat; 
	background-position: center; 
	background-attachment: fixed;
	background-size: cover;">
<br>
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-default">
	
			<?php
			switch($module){
			case 'regstudent':
				require_once 'studentvoter.php';
				break;
			case 'regcandidate':
				require_once 'regcandidate.php';
				break;
			default:
				require_once 'main.php';
			}
			?>

   </div>
   </div>
</body>