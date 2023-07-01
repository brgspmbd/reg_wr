<?php 
 
class M_submission_paper extends CI_Model{
	function tampil_data(){
		$sql="SELECT full_paper.*,user.full_name as nama_user from full_paper
		inner join user on user.id = full_paper.id_user";
		$query = $this->db->query($sql);
		return $query;
	}
}