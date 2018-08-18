<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batches extends MY_Controller {

	public function add_batch()
	{
		$this->load->model('Batches_model','_batchmodel');

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->_batchmodel->checkBatch($this->input->post('field_class_id'), $this->input->post('field_year_id'), $this->input->post('field_section_id'));
        }else{

		$data['allProfs'] = $this->_batchmodel->get_all_teachers();
		$data['allSubjects'] = $this->_batchmodel->get_all_subjects();
        $data['classes'] = $this->_batchmodel->get_all_classes();
        $data['years'] =$this->_batchmodel->get_all_years();
        $data['sections'] =$this->_batchmodel->get_all_sections();
		$this->load->view('batches-add',$data);
		}
	}
}
