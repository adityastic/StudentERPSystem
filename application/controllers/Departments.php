<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends MY_Controller {

	public function index()
	{
		$this->load->view('departments');
	}

	public function add_department()
	{
		$this->load->view('add-departments');
	}
	
}