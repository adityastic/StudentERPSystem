<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Section extends MY_Controller
{
    public function index()
    {
        $this->load->model('section_model', '_section');
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if (!empty($this->input->post('delete'))) {
                $this->_section->deletefromtable($this->input->post('id'));
            } else {
                $insertArray = array(
                        'section'=> $this->input->post('field_section')
                    );
                $this->_section->insertintotable($insertArray);
            }
            redirect('/section', 'refresh');
        }
        $data['result'] = $this->_section->getAllSections();
        $this->load->view('sections', $data);
    }
}
