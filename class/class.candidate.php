<?php
class Candidate{
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
		$sql = "SELECT adm_id, adm_fname, adm_lname FROM tbl_admin WHERE 
		adm_email = '$username' AND adm_password='$password'";
		$result=mysqli_query($this->db,$sql);
		$userdata=mysqli_fetch_array($result);
		$count = $result->num_rows;
		if($count == 1){
			$_SESSION['login']=true;
			$_SESSION['id']= $userdata[adm_id];
			$_SESSION['userdata']= $userdata[adm_fname].', '.$userdata[adm_lname];
			return true;
		}
		else{
			return false;
		}
	}*/
	//Function that adds a new record
	public function new_candidate($idnumber,$clname,$cfname,$cmname,$gender,$dob,$address,$mobile,$email,$posname,$partyname,$coursename,$yearname,$clgname){
		$sql="SELECT * FROM tbl_candidate WHERE can_idnumber='$idnumber'";
		$check=$this->db->query($sql);
		$count_row=$check->num_rows;
		
		if($count_row == 0){
			$sql="INSERT INTO tbl_candidate(can_idnumber,can_lname,can_fname,can_mname,can_gender,can_dob,can_address,can_mobile,can_email,can_date_added,can_time_added,pos_id,par_id,cor_id,yer_id,col_id)
			VALUES('$idnumber','$clname','$cfname','$cmname','$gender','$dob','$address','$mobile','$email',NOW(),NOW(),'$posname','$partyname','$coursename','$yearname','$clgname')";
			
			$result=mysqli_query ($this->db,$sql) or
			die (mysqli_error() . " - Data cannot be inserted.");
			return $result;
			
		}
		else{
			return false;
		}
	}
	
	public function edit_candidate($id,$idnumber,$clname,$cfname,$cmname,$gender,$dob,$address,$mobile,$email,$posname,$partyname,$coursename,$yearname,$clgname){
		$sql="UPDATE tbl_candidate SET can_idnumber='$idnumber',can_fname='$cfname',can_mname='$cmname',can_lname='$clname',can_dob='$dob',can_gender='$gender',can_address='$address',can_mobile='$mobile',can_email='$email',col_id='$clgname',yer_id='$yearname',cor_id='$coursename',pos_id='$posname',par_id='$partyname' WHERE can_id='$id'";
		$result=mysqli_query ($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
	public function get_candidatename(){
		$sql="SELECT * FROM tbl_candidate";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function get_candidate_vote($id){
		$sql="SELECT * FROM tbl_candidate WHERE can_idnumber='$id'";
		$result=mysqli_query($this->db,$sql);
		$row=mysqli_fetch_assoc($result);
		$can_fname = $row['can_lname'] . ', ' . $row['can_fname'] . ' ' . $row['can_mname'];
		return $can_fname;
	}
	public function get_candidate_data($posid){
		$sql="SELECT * FROM tbl_candidate WHERE pos_id= $posid";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function get_candidate_information($id){
		$sql="SELECT * FROM tbl_candidate WHERE can_id= $id";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	public function get_candidate_name($id){
		$sql="SELECT * FROM tbl_candidate WHERE can_id='$id'";
		$result=mysqli_query($this->db,$sql);
		$row=mysqli_fetch_assoc($result);
		$can_idnumber = $row['can_idnumber'];
		return $can_idnumber;
	}
	
	public function del_candidate($id){
		$sql="DELETE FROM tbl_candidate WHERE can_id = '$id'";
		$result=mysqli_query($this->db,$sql) or
		die (mysqli_error() . " - Data cannot be inserted.");
		return $result;
	}
	
	public function get_cantotalvote($posid){
		$sql="SELECT sum(can_votes) FROM tbl_candidate WHERE pos_id= $posid";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
}
?>