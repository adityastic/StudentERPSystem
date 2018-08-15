<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batches extends MY_Controller {

	public function add_batch()
	{
		$this->load->view('add-courses');
	}
}
