<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classroom extends MY_Controller {

	public function index()
	{
		$this->load->view('classroom');
	}
}