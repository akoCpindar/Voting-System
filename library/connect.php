<?php
$localhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_voting";

$db = new PDO('mysql:host='.$localhost.';dbname='.$dbname, $dbuser, $dbpass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>