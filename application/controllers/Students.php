<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends MY_Controller
{

    public function add_students()
    {
        $this->load->model('studentmodel', '_student');
        $stack = array();
        $data['error_list'] = array();
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $count=0;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('field_photo')) {

                $error = array('error' => $this->upload->display_errors());
                if (strpos($error['error'], 'filetype') !== false) {
                    $errors = new stdClass();
                    $errors->has = true;
                    $this->setErrorMessage($errors,"- Upload a Supported filetype (jpg,jpeg,png)");
                                  if (isset($errors->has)) {
                        array_push($data['error_list'], $errors->msg);
                    }   
                }
            }

            $field_adm_number = $this->input->post('field_adm_number');

            $field_stud_fname = $this->input->post('field_stud_fname') ;
            if($field_stud_fname == ''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"- First name");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_stud_lname = $this->input->post('field_stud_lname');
            if($field_stud_lname == ''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"- Last name");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_stud_ph = $this->input->post('field_stud_ph');
            if($field_stud_ph == ''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"- Student Phone Number");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_stud_dob = $this->input->post('field_stud_dob');
            if($field_stud_dob == ''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"- Date of Birth");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
                }
            $field_stud_email = $this->input->post('field_stud_email');
            if($field_stud_email == ''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"- field_stud_email");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
                }
            $field_stud_gender = $this->input->post('field_stud_gender');
            if($field_stud_gender != 'Male' || $field_stud_gender != 'Female'){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Enter Gender");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_stud_caste = $this->input->post('field_stud_caste');
            if($field_stud_caste ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Caste");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_state = $this->input->post('field_state');
            if($field_state ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"State");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_city = $this->input->post('field_city');
            if($field_city ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"City");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_bgroup = $this->input->post('field_bgroup');
            if($field_bgroup ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Blood Group");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_curradd = $this->input->post('field_curradd');
            if($field_curradd ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Current Address");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_currpin = $this->input->post('field_currpin');
            if($field_currpin ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Current Pin");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_permadd = $this->input->post('field_permadd');
            if($field_permadd ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Permanent Address");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_permpin = $this->input->post('field_permpin');
            if($field_permpin ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Permanent Pin");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_father_name = $this->input->post('field_father_name');
            if($field_father_name ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Father's Name");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_mother_name = $this->input->post('field_mother_name');
            if($field_mother_name ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Mother's Name");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_father_phone = $this->input->post('field_father_phone');
            if($field_father_phone ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Father's Phone");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_mother_number = $this->input->post('field_mother_number');
            if($field_mother_number ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Mother's Phone");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_father_onumber = $this->input->post('field_father_onumber');
            $field_mother_onumber = $this->input->post('field_mother_onumber');
            $field_father_email = $this->input->post('field_father_email');
            $password = $this->input->post('psw');
            if($password ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Password");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_class_id = $this->input->post('field_class_id');
            if($field_class_id ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Enter Class");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }
            $field_year_id = $this->input->post('field_year_id');
            if($field_year_id ==''){
                $errors = new stdClass();
                $errors->has = true;
                $this->setErrorMessage($errors,"Academic Year");
                if (isset($errors->has)) {
                    array_push($data['error_list'], $errors->msg);
                }
            }

            //VALIDATION CODE

            //END VALIDATION CODE
        }
        $data['admissionnumber'] = $this->_student->get_adm_number();
      //  $data['error_list'] = $stack;
        
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
