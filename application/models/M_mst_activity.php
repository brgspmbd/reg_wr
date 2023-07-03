<?php 
 
class M_mst_activity extends CI_Model{


	function add($data)
	{
		$this->db->insert('mst_activity', $data);
	}
	function update($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('mst_activity', $data);
	}
	function record_list_activity_count($search)
	{
		$result = $this->db->query("SELECT count(*) as a 
		FROM mst_activity
			where (activity_name like '%$search%' OR activity_code like '%$search%')");
		return $result;
	}
	function record_list_activity_data($start, $limit, $sidx, $sord, $search)
	{
		$result = $this->db->query("SELECT
		*
			FROM mst_activity
			where (activity_name like '%$search%' OR activity_code like '%$search%')
			ORDER BY $sidx $sord LIMIT $start,$limit ")->result();
		return $result;
	}
}