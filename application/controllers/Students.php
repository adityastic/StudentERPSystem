<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends MY_Controller {

	public function add_students()
	{
		$this->load->view('add-students');
	}
}