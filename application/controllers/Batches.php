<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Batches extends MY_Controller
{
    public function add_batch()
    {
        $this->load->model('batches_model', '_batchmodel');

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $arr = $this->input->post('teachers');
        }
        $data['classes'] = $this->_batchmodel->get_all_classes();
        $data['years'] =$this->_batchmodel->get_all_years();
        $data['sections'] =$this->_batchmodel->get_all_sections();
        $data['allteachers'] =$this->_batchmodel->get_all_teachers();
        $data['allsubjects'] =$this->_batchmodel->get_all_subjects();
        $this->load->view('batches-add', $data);
    }
}
