<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends MY_Controller {

	public function Lib()
	{
		$this->load->view('library');
	}
}