<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends MY_Controller {

	public function index()
	{
        $this->load->model('Classes_model', '_classes');
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (!empty($this->input->post('delete'))) {
                $this->_classes->deletefromtable($this->input->post('id'));
            } else {
                $insertArray = array(
                        'class'=> $this->input->post('field_class')
                    );
                $this->_classes->insertintotable($insertArray);
            }
        }
        $data['result'] = $this->_classes->getAllClasses();
		$this->load->view('classes',$data);
	}
}