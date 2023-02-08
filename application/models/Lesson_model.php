<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lesson_model extends CI_Model
{
	public function create($formArray)
	{
		$this->db->insert('lessons', $formArray);
		$lesson_id = $this->db->insert_id();
		return $lesson_id;
	}

	public function update($lesson_id,$formArray)
	{
		$this->db->where('lesson_id',$lesson_id);
		$this->db->update('lessons',$formArray);
	}


	public function getLessons($courseid)
	{	
		$this->db->where('courseid', $courseid);

		$query = $this->db->get('lessons');
		$results = $query->result_array();
		return $results;

	}

	public function getBySection($section_id)
	{	
		$this->db->where('section_id', $section_id);

		$query = $this->db->get('lessons');
		$results = $query->result_array();
		return $results;

	}

	public function getRow($lesson_id)
	{
		$this->db->where('lesson_id',$lesson_id);
		$row = $this->db->get('lessons')->row_array();
		return $row;
	}

	public function delete($lesson_id)
	{
		$this->db->where('lesson_id',$lesson_id);
		$this->db->delete('lessons');
	}

}

