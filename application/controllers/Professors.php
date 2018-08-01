<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class professors extends MY_Controller {

	public function all_professor()
	{
		$this->load->view('all-professor');
	}
}