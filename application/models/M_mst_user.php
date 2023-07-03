<?php 
 
class M_mst_user extends CI_Model{
	function tampil_data(){
		return $this->db->get_where('user', array('status_approved'=>'pending'));
	}

	function update($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}
	function record_list_user_count($search)
	{
		$result = $this->db->query("SELECT count(*) as a 
		FROM user
			where (full_name like '%$search%' OR email like '%$search%')");
		return $result;
	}
	function record_list_user_data($start, $limit, $sidx, $sord, $search)
	{
		$result = $this->db->query("SELECT
		*
			FROM user
			where (full_name like '%$search%' OR email like '%$search%')
			ORDER BY $sidx $sord LIMIT $start,$limit ")->result();
		return $result;
	}
}