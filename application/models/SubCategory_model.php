<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SubCategory_model extends CI_Model
{
	public function create($formArray)
	{
		$this->db->insert('subcategories', $formArray);
		return $id = $this->db->insert_id();
	}

	public function update($subcatid,$formArray)
	{
		$this->db->where('subcatid',$subcatid);
		$this->db->update('subcategories',$formArray);
	}


	public function getSubCategories()
	{

		$this->db->select('subcategories.*,categories.category as category');
		$this->db->order_by('subcategories.created_at', 'DESC');
		$this->db->join('categories', 'categories.catid = subcategories.parentid', 'left');

		$query = $this->db->get('subcategories');
		$subcategories = $query->result_array();
		$this->db->last_query();
		return $subcategories;

	}

	public function getRow($subcatid)
	{
		$this->db->where('subcatid',$subcatid);
		$row = $this->db->get('subcategories')->row_array();
		return $row;
	}

	public function delete($subcatid)
	{
		$this->db->where('subcatid',$subcatid);
		$this->db->delete('subcategories');
	}
}
