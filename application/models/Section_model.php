<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Section_model extends CI_Model
{
	public function create($formArray)
	{
		$this->db->insert('sections', $formArray);
		return $id = $this->db->insert_id();
	}

	public function update($section_id,$formArray)
	{
		$this->db->where('section_id',$section_id);
		$this->db->update('sections',$formArray);
	}


	public function getSections()
	{
		$results = $this->db->get('sections')->result_array();
		
		return $results;
	}

	public function getSection($courseid)
	{	
		$this->db->where('courseid', $courseid);

		$results = $this->db->get('sections')->result_array();
		
		return $results;
	}

	public function getRow($section_id)
	{
		$this->db->where('section_id',$section_id);
		$row = $this->db->get('sections')->row_array();
		return $row;
	}

	public function delete($section_id)
	{
		$this->db->where('section_id',$section_id);
		$this->db->delete('sections');
	}
}
