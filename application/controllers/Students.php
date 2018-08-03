<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends MY_Controller
{

    public function add_students()
    {
        $this->load->model('studentmodel', '_student');

        $errors = new stdClass();

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpeg|jpg|png';
      
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('field_photo')) {
                $error = array('error' => $this->upload->display_errors());
                if (strpos($error['error'], 'filetype') !== false) {
                    $errors->has = true;
                    $this->setErrorMessage($errors,"- Upload a Supported filetype (jpg,jpeg,png)");
                }
            }

            $field_adm_number = $this->input->post('field_adm_number');
            $field_stud_fname = $this->input->post('field_stud_fname');
            $field_stud_lname = $this->input->post('field_stud_lname');
            $field_stud_ph = $this->input->post('field_stud_ph');
            $field_stud_dob = $this->input->post('field_stud_dob');
            $field_stud_email = $this->input->post('field_stud_email');
            $field_stud_gender = $this->input->post('field_stud_gender');
            $field_stud_caste = $this->input->post('field_stud_caste');
            $field_state = $this->input->post('field_state');
            $field_city = $this->input->post('field_city');
            $field_bgroup = $this->input->post('field_bgroup');
            $field_curradd = $this->input->post('field_curradd');
            $field_currpin = $this->input->post('field_currpin');
            $field_permadd = $this->input->post('field_permadd');
            $field_permpin = $this->input->post('field_permpin');
            $field_father_name = $this->input->post('field_father_name');
            $field_mother_name = $this->input->post('field_mother_name');
            $field_father_phone = $this->input->post('field_father_phone');
            $field_mother_number = $this->input->post('field_mother_number');
            $field_father_onumber = $this->input->post('field_father_onumber');
            $field_mother_onumber = $this->input->post('field_mother_onumber');
            $field_father_email = $this->input->post('field_father_email');
            $password = $this->input->post('psw');
            $field_class_id = $this->input->post('field_class_id');
            $field_year_id = $this->input->post('field_year_id');

            //VALIDATION CODE

            //END VALIDATION CODE
        }
        $data['admissionnumber'] = $this->_student->get_adm_number();

        if (isset($errors->has)) {
        	$data['errorstring'] = $errors->msg;
        }
        $this->load->view('add-students', $data);
    }

    private function setErrorMessage($errors,$strin)
    {
    	if(isset($errors->msg))
    	{
    		$errors->msg = $errors->msg + "\n" + $strin;
    	}else
    	{
    		$errors->msg = $strin;
    	}
    }


    public function index()
    {
        $this->load->view('students');
    }
}
