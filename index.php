<?php
include 'library/config.php';
include 'class/class.position.php';
include 'class/class.party.php';
include 'class/class.college.php';
include 'class/class.course.php';
include 'class/class.year.php';
include 'class/class.candidate.php';
include 'class/class.student.php';
include 'class/class.admin.php';

$admin = new Admin();
if(!$admin->get_session()){
	header("location: system/login.php");
}

$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
$sub = (isset($_GET['sub']) && $_GET['sub'] != '') ? $_GET['sub'] : '';
$action = (isset($_GET['act']) && $_GET['act'] != '') ? $_GET['act'] : '';

$position = new Position();
$party = new Party();
$college = new College();
$course = new Course();
$year = new Year();
$candidate = new Candidate();
$student = new Student();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="images/logo.png">
	<!-- JS -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    <title>Home</title>

</head>
  <body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default " role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="span5"><b> Online Voting System </b></div>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse sidebar scrollspy">
                <ul class="nav navbar-nav side-nav" id="side-menu">
                    <li class="active">
                        <img class="home" src="images/logo.png">
                    </li>
					<li>
                        <a href="index.php?mod=cst"><i class="glyphicon glyphicon-stats"></i> Candidate Result</a>
                    </li>
					<li>
                        <a href="index.php?mod=win"><i class="glyphicon glyphicon-ok-sign"></i> Winner</a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demon"><i class="fa fa-sitemap fa"></i> Position <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demon" class="collapse">
							<li>
                                <a href="index.php?mod=apo"> Add Position</a>
                            </li>
                            <li>
                                <a href="index.php?mod=pos"> Positions</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-user"></i> Candidates <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
							<li>
                                <a href="index.php?mod=aca">Add Candidate</a>
                            </li>
                            <li>
                                <a href="index.php?mod=can">View Candidates</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demow"><i class="glyphicon glyphicon-tower"></i> Parties <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demow" class="collapse">
							<li>
                                <a href="index.php?mod=apa"> Add Parties</a>
                            </li>
                            <li>
                                <a href="index.php?mod=par"> Parties</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="index.php?mod=lov"><i class="glyphicon glyphicon-align-left"></i> List of Voters</a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demoq"><i class="glyphicon glyphicon-list"></i> Students <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demoq" class="collapse">
							<li>
                                <a href="index.php?mod=ast"> Add Student</a>
                            </li>
                            <li>
                                <a href="index.php?mod=spr"> Student Profile</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demob"><i class="glyphicon glyphicon-globe"></i> College <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demob" class="collapse">
							<li>
                                <a href="index.php?mod=aco"> Add College</a>
                            </li>
                            <li>
                                <a href="index.php?mod=clg"> College</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demop"><i class="glyphicon glyphicon-compressed"></i> Course <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demop" class="collapse">
							<li>
                                <a href="index.php?mod=acr"> Add Course</a>
                            </li>
                            <li>
                                <a href="index.php?mod=cor"> Course</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demov"><i class="glyphicon glyphicon-calendar"></i> Year <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demov" class="collapse">
							<li>
                                <a href="index.php?mod=aye"> Add Year</a>
                            </li>
                            <li>
                                <a href="index.php?mod=yer"> Year</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demor"><i class="glyphicon glyphicon-plus"></i> Admin <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demor" class="collapse">
							<li>
                                <a href="index.php?mod=adm"> Add Admin</a>
                            </li>
                            <li>
                                <a href="index.php?mod=adp"> Admin Profile</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="system/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">
            
			<?php
			switch($module){
			case 'apo':
				require_once 'candidate/positionadd.php';
				break;
			case 'pos':
				require_once 'candidate/positionview.php';
				break;
			case 'pos':
				require_once 'candidate/positionedit.php';
				break;
			case 'edtpos':
				require_once 'candidate/positionedit.php';
				break;
			case 'apa':
				require_once 'candidate/partyadd.php';
				break;
			case 'par':
				require_once 'candidate/partyview.php';
				break;
			case 'editpar':
				require_once 'candidate/partyedit.php';
				break;
			case 'aca':
				require_once 'candidate/candidateadd.php';
				break;
			case 'can':
				require_once 'candidate/candidateview.php';
				break;
			case 'edtcan':
				require_once 'candidate/candidateedit.php';
				break;
			case 'delcan':
				require_once 'candidate/candidateview.php';
				break;
			case 'aco':
				require_once 'student/collegeadd.php';
				break;
			case 'clg':
				require_once 'student/collegeview.php';
				break;
			case 'editclg':
				require_once 'student/collegeedit.php';
				break;
			case 'acr':
				require_once 'student/courseadd.php';
				break;
			case 'cor':
				require_once 'student/courseview.php';
				break;
			case 'editcor':
				require_once 'student/courseedit.php';
				break;
			case 'aye':
				require_once 'student/yearadd.php';
				break;
			case 'yer':
				require_once 'student/yearview.php';
				break;
			case 'edityer':
				require_once 'student/yearedit.php';
				break;
			case 'ast':
				require_once 'student/studentadd.php';
				break;
			case 'spr':
				require_once 'student/studentview.php';
				break;
			case 'adm':
				require_once 'admin/adminadd.php';
				break;
			case 'adp':
				require_once 'admin/adminview.php';
				break;
			case 'edtadm':
				require_once 'admin/adminedit.php';
				break;
			case 'deladm':
				require_once 'admin/adminview.php';
				break;
			case 'canpre':
				require_once 'vote/preview.php';
				break;
			case 'win':
				require_once 'result/winner.php';
				break;
			case 'lov':
				require_once 'student/studentvoted.php';
				break;
			case 'stureg':
				require_once 'registration/studentvoter.php';
				break;
			default:
				require_once 'main.php';
			}
			?>
        
</div>
            <!-- /.container-fluid -->

    </div>
    <!-- /#wrapper -->
    <script src="js/jquery.js"></script>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
</body>

</html>