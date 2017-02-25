<?php
class Student{
	public $db;
	
	public function __construct(){
		$this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Error: Could connect to Database.";
			exit;
		}
	}
	
	public function get_session(){
		if(isset($_SESSION['login']) && $_SESSION['login'] == true){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function check_login_voter($idnumber){
		$sql = "SELECT * FROM tbl_student WHERE stu_idnumber = '$idnumber' AND stu_status='notvoted'";
		$result=mysqli_query($this->db,$sql);
		$userdata=mysqli_fetch_array($result);
		$count = $result->num_rows;
		if($count == 1){
			$_SESSION['login']=true;
			$_SESSION['id']= $userdata[stu_idnumber];
			return true;
		}
		else{
			return false;
		}
	}
	//Function that adds a new record
	public function new_student($idnumber){
		$sql="SELECT * FROM tbl_student WHERE stu_idnumber='$idnumber'";
		$check=$this->db->query($sql);
		$count_row=$check->num_rows;
		
		if($count_row == 0){
			$sql="INSERT INTO tbl_student(stu_idnumber,stu_lname,stu_fname,stu_mname,stu_gender,stu_status,stu_dob,stu_address,stu_mobile,stu_email,stu_date_added,stu_time_added,cor_id,yer_id)
			VALUES('$idnumber','$slname','$sfname','$smname','$gender','notvoted','$dob','$address','$mobile','$email',NOW(),NOW(),'$coursename','$yearname')";
			
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
			
		}
		else{
			return false;
		}
	}
	public function register_student($idnumber,$password,$slname,$sfname,$smname,$gender,$dob,$address,$mobile,$email,$coursename,$yearname){
		$sql="SELECT * FROM tbl_student WHERE stu_idnumber='$idnumber' AND stu_status='notvoted'";
		$check=$this->db->query($sql);
		$count_row=$check->num_rows;
		
		if($count_row == 1){
			$newpass = md5($password);
			$sql="UPDATE tbl_student SET stu_password='$newpass',stu_fname='$sfname',stu_mname='$smname',stu_lname='$slname',stu_address='$address',stu_mobile='$mobile',stu_email='$email',cor_id='$coursename',yer_id='$yearname',stu_gender='$gender',stu_dob='$dob' WHERE stu_idnumber='$idnumber'";
		
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
		}
		else{
			return false;
		}
	}
	public function get_studentname(){
		$sql="SELECT * FROM tbl_student";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function get_studentname_voted(){
		$sql="SELECT * FROM tbl_student WHERE stu_status='voted'";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function get_student_name($id){
		$sql="SELECT * FROM tbl_student WHERE stu_id='$id'";
		$result=mysqli_query($this->db,$sql);
		$row=mysqli_fetch_assoc($result);
		$stu_idnumber = $row['stu_idnumber'];
		return $stu_idnumber;
	}
}
?>