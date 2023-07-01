<?php 
 
class M_dashboard extends CI_Model{
	function tampil_data_user(){
		$sql="SELECT COUNT(*) as jumlah_user from user";    
		$query = $this->db->query($sql);
		return $query;
	}
	function tampil_data_approved(){
		$sql="SELECT COUNT(*) as jumlah_approved from user where status_approved = 'approved'";    
		$query = $this->db->query($sql);
		return $query;
	}
	function tampil_data_bf(){
		$sql="SELECT COUNT(*) as jumlah_bf from business_forum";    
		$query = $this->db->query($sql);
		return $query;
	}
	function tampil_data_sp(){
		$sql="SELECT COUNT(*) as jumlah_sp from full_paper";
		$query = $this->db->query($sql);
		return $query;
	}
	function tampil_data_latest(){
		$sql="SELECT *  from user order by created_at desc limit 0,20";
		$query = $this->db->query($sql);
		return $query;
	}
}