<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends MY_Controller {

	public function add_students()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
		}else
		{
		}
		$this->load->view('add-students');
	}
	public function index()
	{
		$this->load->view('students');
	}
}