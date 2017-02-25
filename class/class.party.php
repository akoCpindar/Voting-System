<?php
class Party{
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
	public function new_party($partyname,$partydesc){
		$sql="SELECT * FROM tbl_parties WHERE par_name='$partyname'";
		$check=$this->db->query($sql);
		$count_row=$check->num_rows;
		
		if($count_row == 0){
			$sql="INSERT INTO tbl_parties (par_name,par_description)VALUES('$partyname','$partydesc')";
			
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
			
		}
		else{
			return false;
		}
	}
	public function get_partyname(){
		$sql="SELECT * FROM tbl_parties";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function get_party_name($id){
		$sql="SELECT * FROM tbl_parties WHERE par_id='$id'";
		$result=mysqli_query($this->db,$sql);
		$row=mysqli_fetch_assoc($result);
		$par_name = $row['par_name'];
		return $par_name;
	}
	public function get_party_desc($id){
		$sql="SELECT * FROM tbl_parties WHERE par_id = '$id'";
		$result=mysqli_query($this->db,$sql);
		$row=mysqli_fetch_assoc($result);
		$par_description = $row['par_description'];
		return $par_description;
	}
	
	public function edit_party($id,$partyname,$partydesc){
		$sql="UPDATE tbl_parties SET par_name='$partyname', par_description='$partydesc' WHERE par_id='$id'";
		$result=mysqli_query ($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
	public function del_party($id){
		$sql="DELETE FROM tbl_parties WHERE par_id = '$id'";
		$result=mysqli_query($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
}
?>