<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Years extends MY_Controller {

	public function index()
	{
        $this->load->model('Years_model', '_years');
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (!empty($this->input->post('delete'))) {
                $this->_years->deletefromtable($this->input->post('id'));
            } else {
                $insertArray = array(
                        'year'=> $this->input->post('field_year')
                    );
                $this->_years->insertintotable($insertArray);
            }
            redirect('/years', 'refresh');
        }
        $data['result'] = $this->_years->getAllYears();
		$this->load->view('years',$data);
	}
}