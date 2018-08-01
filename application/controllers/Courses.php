<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends MY_Controller {

	public function index()
	{
		$this->load->view('courses');
	}

	public function add_courses()
	{
		$this->load->view('add-courses');
	}
	public function courses_info()
	{
		$this->load->view('courses-info');
	}

}
