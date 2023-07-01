<?php 
 
class M_business_forum extends CI_Model{
	function tampil_data(){
		$sql="SELECT business_forum.*,user.full_name as nama_user from business_forum
		inner join user on user.id = business_forum.id_user";    
		$query = $this->db->query($sql);
		return $query;
	}
}