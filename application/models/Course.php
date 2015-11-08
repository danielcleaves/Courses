<?php 

class Course extends CI_Model {
	
	public function get_all_courses()
	{
		return $this->db->query("SELECT * FROM courses")->result_array();
	}

	public function add_course($course)
	{

		$query = "INSERT INTO Courses(name,description,created_at,updated_at) 
		VALUES(?,?, NOW(), NOW())";
		$values = array($course['name'], $course['description']);
		$this->db->query($query, $values);
		return;
	}

	public function get_id($id)
	{
		$query = "SELECT name, description, id FROM courses WHERE id = '{$id}'";
		return $this->db->query($query)->row_array();
	}

	public function delete_course($id)
	{
		$query = "DELETE FROM courses WHERE id = '{$id}'";
		$this->db->query($query);
	}


}

?>