<?php
class Admin{
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
	
	public function check_login($idnumber,$password){
		$sql = "SELECT * FROM tbl_admin WHERE adm_email = '$idnumber' AND adm_password='$password'";
		$result=mysqli_query($this->db,$sql);
		$userdata=mysqli_fetch_array($result);
		$count = $result->num_rows;
		if($count == 1){
			$_SESSION['login']=true;
			return true;
		}
		else{
			return false;
		}
	}
	public function check_login_voter($idnumber,$password){
		$sql = "SELECT * FROM tbl_student WHERE stu_idnumber = '$idnumber' AND stu_password='$password' AND stu_status='notvoted'";
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
	public function new_admin($email,$password,$lname,$fname,$mname,$gender,$dob){
		$sql="SELECT * FROM tbl_admin WHERE adm_email='$email'";
		$check=$this->db->query($sql);
		$count_row=$check->num_rows;
		
		if($count_row == 0){
			$newpass = md5($password);
			$sql="INSERT INTO tbl_admin(adm_email,adm_password,adm_lname,adm_fname,adm_mname,adm_gender,adm_dob,adm_date_added,adm_time_added)
			VALUES('$email','$newpass','$lname','$fname','$mname','$gender','$dob',NOW(),NOW())";
			
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
			
		}
		else{
			return false;
		}
	}
	
	public function get_adminname(){
		$sql="SELECT * FROM tbl_admin";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function get_admin_data($id){
		$sql="SELECT * FROM tbl_admin WHERE adm_id='$id'";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	
	public function get_admin_name($id){
		$sql="SELECT * FROM tbl_admin WHERE adm_id='$id'";
		$result=mysqli_query($this->db,$sql);
		$row=mysqli_fetch_assoc($result);
		$adm_idnumber = $row['adm_idnumber'];
		return $adm_idnumber;
	}
	
	public function del_admin($id){
		$sql="DELETE FROM tbl_admin WHERE adm_id = '$id'";
		$result=mysqli_query($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
	
	public function edt_admin($email,$lname,$fname,$mname,$gender,$dob,$id){
		$sql="UPDATE tbl_admin SET adm_email='$email',adm_lname='$lname',adm_fname='$fname',adm_mname='$mname',adm_gender='$gender',adm_dob='$dob' WHERE adm_id='$id'";
		$result=mysqli_query ($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
}
?>