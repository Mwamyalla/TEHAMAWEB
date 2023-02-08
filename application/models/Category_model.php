<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
	public function create($formArray)
	{
		$this->db->insert('categories', $formArray);
		return $id = $this->db->insert_id();
	}

	public function update($catid,$formArray)
	{
		$this->db->where('catid',$catid);
		$this->db->update('categories',$formArray);
	}


	public function getCategories()
	{
		$results = $this->db->order_by('id','DESC')->get('categories')->result_array();
		
		return $results;
	}

	public function getRow($catid)
	{
		$this->db->where('catid',$catid);
		$row = $this->db->get('categories')->row_array();
		return $row;
	}

	public function delete($catid)
	{
		$this->db->where('catid',$catid);
		$this->db->delete('categories');
	}
}
