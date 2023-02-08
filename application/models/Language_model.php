<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Language_model extends CI_Model
{
	public function create($formArray)
	{
		$this->db->insert('languages', $formArray);
		return $id = $this->db->insert_id();
	}

	public function update($lang_id,$formArray)
	{
		$this->db->where('lang_id',$lang_id);
		$this->db->update('languages',$formArray);
	}


	public function getLanguages()
	{
		$results = $this->db->order_by('lang_id','DESC')->get('languages')->result_array();
		
		return $results;
	}

	public function getRow($lang_id)
	{
		$this->db->where('lang_id',$lang_id);
		$row = $this->db->get('languages')->row_array();
		return $row;
	}

	public function delete($lang_id)
	{
		$this->db->where('lang_id',$lang_id);
		$this->db->delete('languages');
	}
}
