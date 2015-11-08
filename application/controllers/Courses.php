<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {
	
	public function index()
	{
		$this->load->model('Course');
		$show = $this->Course->get_all_courses();
		$this->load->view('index', array('show' => $show));
	}


	public function add_courses()
	{
		if($this->input->post('name') == NULL)
		{
			$this->session->set_userdata('error',"This field must be populated");
			redirect('/');
		}
		else { 
			$this->load->model('Course');
			$course = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description')
			);
			$this->Course->add_course($course);
			redirect('/');
		}
	}

	

	public function done($id)
	{
		$this->load->model('Course');
		$this->Course->delete_course($id);
		redirect('/');
	}


	public function delete($id)
	{
		$this->load->model('Course');
		$our_course = $this->Course->get_id($id);
		$this->load->view('destroy', $our_course);	
	}
}

