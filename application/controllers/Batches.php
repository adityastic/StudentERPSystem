<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Batches extends MY_Controller
{
    public function add_batch()
    {
        $this->load->model('Batches_add_model', '_batchmodel');

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $errors = new stdClass();

            if ($this->_batchmodel->checkBatch($this->input->post('field_class_id'), $this->input->post('field_year_id'), $this->input->post('field_section_id'))) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Batch Already Exists.");
            }

            $subjectTeachers = array();
            if (!empty($this->input->post('subjects')) && !empty($this->input->post('teachers'))) {
                $subjects = $this->input->post('subjects');
                $teachers = $this->input->post('teachers');
          
                for ($i = 0; $i < count($subjects) ; $i++) {
                    $teachersArray = array();
                    
                    for ($j = 0; $j < count($subjects) ; $j++) {
                        if ($subjects[$i] == $subjects[$j]) {
                            $teachersArray[] = $teachers[$j];
                        }
                    }
                    $teachersArray = array_unique($teachersArray);
                    $subjectTeachers[$subjects[$i]] = $teachersArray;
                }
            } else {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Subjects and their corresponding Teachers");
            }
            
            if (isset($errors->has)) {
                $data['errorstring'] = $errors->msg;
            } else {
                $insertArray = array(
                    'year_id'=>$this->input->post('field_year_id'),
                    'class_id'=>$this->input->post('field_class_id'),
                    'section_id'=>$this->input->post('field_section_id'),
                    'coordinator'=>$this->input->post('field_coordinator'),
                    'subject_teachers'=>json_encode($subjectTeachers),
                    'students_list'=>"[]",
                );
                $this->_batchmodel->insertBatch($insertArray);
                $sessarr = array(
                    'add_done' => 'yes',
                );
                $this->session->set_userdata($sessarr);
                redirect('/Batches/add_batch', 'refresh');
            }
        } elseif (!empty($this->session->userdata('add_done'))) {
            $this->session->sess_destroy();
            $data['done'] = true;
        }

        $data['allProfs'] = $this->_batchmodel->get_all_teachers();
        $data['allSubjects'] = $this->_batchmodel->get_all_subjects();
        $data['classes'] = $this->_batchmodel->get_all_classes();
        $data['years'] =$this->_batchmodel->get_all_years();
        $data['sections'] =$this->_batchmodel->get_all_sections();
        $this->load->view('batches-add', $data);
    }

    public function all_batch()
    {
        $this->load->model('Batches_all_model', '_batchmodel');
        $data['batchDetails']=$this->_batchmodel->getBatchDetails();
        $this->load->view('batches-all', $data);
    }
}
