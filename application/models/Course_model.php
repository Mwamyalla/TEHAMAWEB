<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Course_model extends CI_Model
{
	public function create($formArray)
	{
		$this->db->insert('courses', $formArray);
		return $id = $this->db->insert_id();
	}

	public function update($courseid,$formArray)
	{
		$this->db->where('courseid',$courseid);
		$this->db->update('courses',$formArray);
	}


	public function getCourses()
	{
		
		
		$this->db->select('*,categories.slug as cat_slug', 'subcategories.slug as subcat_slug');
		$this->db->from('courses');
		$this->db->join('users', 'users.userid = courses.instructor_id', 'left');
		$this->db->join('categories', 'categories.catid = courses.catid');
		$this->db->join('subcategories', 'subcategories.subcatid = courses.subcatid', 'left');
		$this->db->join('languages', 'languages.lang_id = courses.lang_id', 'left');


		$query = $this->db->get();
		$courses = $query->result_array();
		$this->db->last_query();
		return $courses;

	}

	public function getCourse($courseid)
	{
		
		$this->db->select('*,categories.slug as cat_slug','subcategories.slug as subcat_slug,users.firstname as Firstname,users.lastname as Lastname');
		$this->db->from('courses');
		$this->db->join('users', 'users.userid = courses.instructor_id' ,'left');
		$this->db->join('categories', 'categories.catid = courses.catid');
		$this->db->join('subcategories', 'subcategories.subcatid = courses.subcatid', 'left');
		$this->db->join('languages', 'languages.lang_id = courses.lang_id', 'left');
		
		$query = $this->db->where('courseid',$courseid);
		$query = $this->db->get();
		$courses = $query->row_array();
		return $courses;

	}

	public function getRow($courseid)
	{
		$this->db->where('courseid',$courseid);
		$row = $this->db->get('courses')->row_array();
		return $row;
	}

	public function delete($courseid)
	{
		$this->db->where('courseid',$courseid);
		$this->db->delete('courses');
	}
}
