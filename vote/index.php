<?php
include '../library/connect.php';
include '../library/config.php';
include '../class/class.candidate.php';
include '../class/class.position.php';
include '../class/class.party.php';
include '../class/class.admin.php';

$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
$sub = (isset($_GET['sub']) && $_GET['sub'] != '') ? $_GET['sub'] : '';
$action = (isset($_GET['act']) && $_GET['act'] != '') ? $_GET['act'] : '';

$candidate = new Candidate();
$position = new Position();
$party = new Party();
?>
<html>
<head>
    <title>WELCOME</title>
    <link rel="icon" type="image/png" href="favicon.png"/>
</head>
<body>
<!-- multistep form --><a href="../system/logout.php">Logout</a>
			<?php
			switch($module){
			case 'listcandidate':
				require_once 'listcandidates.php';
				break;
			case 'preview':
				require_once 'preview.php';
				break;
			default:
				require_once 'main.php';
			}
			?>
</body>
</html>