<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subject extends MY_Controller
{
    public function index()
    {
        $this->load->model('Subject_model', '_subject');
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (!empty($this->input->post('delete'))) {
                $this->_subject->deletefromtable($this->input->post('id'));
            } else {
                $insertArray = array(
                        'subject'=> $this->input->post('field_subject')
                    );
                $this->_subject->insertintotable($insertArray);
            }
            redirect('/subject', 'refresh');
        }
        $data['result'] = $this->_subject->getAllSubjects();
        $this->load->view('subjects', $data);
    }
}

