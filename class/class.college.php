<?php
class College{
	public $db;
	
	public function __construct(){
		$this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Error: Could connect to Database.";
			exit;
		}
	}
	
	/*public function get_session(){
		if(isset($_SESSION['login']) && $_SESSION['login'] == true){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function check_login($username,$password){
		$sql = "SELECT usr_firstname, usr_lastname FROM tbl_users WHERE 
		usr_email = '$username' AND usr_password='$password'";
		$result=mysqli_query($this->db,$sql);
		$userdata=mysqli_fetch_array($result);
		$count = $result->num_rows;
		if($count == 1){
			$_SESSION['login']=true;
			$_SESSION['userdata']= $userdata[usr_lastname].','.$userdata[usr_firstname];
			return true;
		}
		else{
			return false;
		}
	}*/
	//Function that adds a new record
	public function new_college($cname,$cdesc){
		$sql="SELECT * FROM tbl_college WHERE col_fname='$cname'";
		$check=$this->db->query($sql);
		$count_row=$check->num_rows;
		
		if($count_row == 0){
			$sql="INSERT INTO tbl_college (col_fname,col_description)VALUES('$cname','$cdesc')";
			
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
			
		}
		else{
			return false;
		}
	}
	public function get_collegename(){
		$sql="SELECT * FROM tbl_college";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function get_college_name($id){
		$sql="SELECT * FROM tbl_college WHERE col_id='$id'";
		$result=mysqli_query($this->db,$sql);
		$row=mysqli_fetch_assoc($result);
		$col_fname = $row['col_fname'];
		return $col_fname;
	}
	public function edit_college($id,$cname,$cdesc){
		$sql="UPDATE tbl_college SET col_fname='$cname', col_description='$cdesc' WHERE col_id='$id'";
		$result=mysqli_query ($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
	public function del_college($id){
		$sql="DELETE FROM tbl_college WHERE col_id = '$id'";
		$result=mysqli_query($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
}
?>