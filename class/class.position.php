<?php
class Position{
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
	public function new_position($position){
		$sql="SELECT * FROM tbl_position WHERE pos_name='$position'";
		$check=$this->db->query($sql);
		$count_row=$check->num_rows;
		
		if($count_row == 0){
			$sql="INSERT INTO tbl_position (pos_name)VALUES('$position')";
			
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
			
		}
		else{
			return false;
		}
	}
	public function edit_position($id,$position){
		$sql="UPDATE tbl_position SET pos_name='$position' WHERE pos_id='$id'";
		$result=mysqli_query ($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
	public function del_position($id){
		$sql="DELETE FROM tbl_position WHERE pos_id = '$id'";
		$result=mysqli_query($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
	public function get_positioname(){
		$sql="SELECT * FROM tbl_position";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function get_position_name($id){
		$sql="SELECT * FROM tbl_position WHERE pos_id='$id'";
		$result=mysqli_query($this->db,$sql);
		$row=mysqli_fetch_assoc($result);
		$pos_name = $row['pos_name'];
		return $pos_name;
	}
	public function get_positionlist(){
		$sql="SELECT * FROM tbl_position ORDER BY pos_id ASC";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
}
?>