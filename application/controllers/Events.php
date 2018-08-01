<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {

	public function event()
	{
		$this->load->view('events');
	}
}