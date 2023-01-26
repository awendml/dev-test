<?php 

/**
 * 
 */
class M_dev extends CI_Model
{
	public function get_data(){
		$this->db->select('k.category, COUNT(*	) as total');
		$this->db->from('kategori k');
		$this->db->join('data d', 'd.category_id=k.id');
		$this->db->group_by('category'); 
		$this->db->order_by('total'); 
		// return $this->db->get('kategori')->result_array();
		// return $this->db->get('kategori')->result_array();
		    return $this->db->get('kategori')->result_array();
	}
}