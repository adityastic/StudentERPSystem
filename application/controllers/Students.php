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

            $errors = new stdClass();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('field_photo')) {
                $error = array('error' => $this->upload->display_errors());
                if (strpos($error['error'], 'filetype') !== false) {
                    $errors->has = true;
                    $this->setErrorMessage($errors, "- Upload a Supported filetype (jpg,jpeg,png)");
                } else {
                    $field_photo = './uploads' . $this->upload->data('file_name');
                }
            }

            //VALIDATION CODE
            $field_adm_number = $this->input->post('field_adm_number');
            $field_stud_ph = $this->input->post('field_stud_ph');
            $field_stud_dob = $obj_date = DateTime::createFromFormat('d/m/Y', $this->input->post('field_stud_dob'));
            $this->logAlert($this->input->post('field_stud_dob'));
            $this->logAlert($field_stud_dob->format('m/d/Y'));
            $field_city = $this->input->post('field_city');
            $field_curradd = $this->input->post('field_curradd');
            $field_currpin = $this->input->post('field_currpin');
            $field_permadd = $this->input->post('field_permadd');
            $field_permpin = $this->input->post('field_permpin');
            $field_father_number = $this->input->post('field_father_number');
            $field_mother_number = $this->input->post('field_mother_number');
            $field_father_onumber = $this->input->post('field_father_onumber');
            $field_mother_onumber = $this->input->post('field_mother_onumber');
            $password = $this->input->post('psw');

            $field_stud_fname = $this->input->post('field_stud_fname') ;
            if ($this->checkNumbersinString($field_stud_fname)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter First Name without numbers");
            }

            $field_stud_lname = $this->input->post('field_stud_lname');
            if ($this->checkNumbersinString($field_stud_lname)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Last Name without numbers");
            }

            $student_name = $field_stud_fname . " " . $field_stud_lname;

            $field_stud_gender = $this->input->post('field_stud_gender');
            if (strcmp($field_stud_gender, 'none') == 0) {
                $errors->has = true ;
                $this->setErrorMessage($errors, "- Enter Gender");
            }

            $field_stud_email = $this->input->post('field_stud_email');
            if (!$this->isValidEmail($field_stud_email)) {
                $errors->has = true ;
                $this->setErrorMessage($errors, "- Enter Email Correctly");
            }

            $field_stud_caste = $this->input->post('field_stud_caste');
            if (strcmp($field_stud_caste, 'none') == 0) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Category");
            }

            $field_state = $this->input->post('field_state');
            if (strcmp($field_state, 'none') == 0) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter State");
            }

            $field_bgroup = $this->input->post('field_bgroup');
            if (strcmp($field_bgroup, 'none') == 0) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Blood Group");
            }

            $field_father_name = $this->input->post('field_father_name');
            if ($this->checkNumbersinString($field_father_name)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Fathers's Name without numbers");
            }

            $field_mother_name = $this->input->post('field_mother_name');
            if ($this->checkNumbersinString($field_mother_name)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Mother's Name without numbers");
            }

            $field_father_email = $this->input->post('field_father_email');
            if (!$this->isValidEmail($field_father_email)) {
                $errors->has = true ;
                $this->setErrorMessage($errors, "- Enter Father's Email Correctly");
            }

            $field_class_id = $this->input->post('field_class_id');
            if (strcmp($field_class_id, 'none') == 0) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Class");
            }

            $field_year_id = $this->input->post('field_year_id');
            if (strcmp($field_year_id, 'none') == 0) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Academic Year");
            }
            //END VALIDATION CODE

            if (isset($errors->has)) {
                $data['errorstring'] = $errors->msg;
            } else {
                $data['done'] = true;

                date_default_timezone_set('Asia/Kolkata');
                $current_date = date('m/d/Y h:i:s a', time());

                $insertArray = array(
                        'adm_date'=>$current_date,
                        'stud_name'=>$student_name,
                        'father_name'=>$field_father_name,
                        'mother_name'=>$field_mother_name,
                        'father_number'=>$field_father_number,
                        'mother_number'=>$field_mother_number,
                        'current_address'=>$field_curradd,
                        'perma_address'=>$field_permadd,
                        'father_email'=>$field_father_email,
                        'stud_dob'=>$field_stud_dob,
                        'stud_gender'=>$field_stud_gender,
                        'stud_blood_group'=>$stud_blood_group,
                        'stud_caste'=>$field_stud_caste,
                        'city'=>$field_city,
                        'state'=>$field_state,
                        'perma_address_pin'=>$field_permpin,
                        'current_address_pin'=>$field_currpin,
                        'stud_email'=>$field_stud_email,
                        'stud_phone'=>$field_stud_ph,
                        'photo'=>$field_photo,
                        'faher_o_number'=>$field_father_onumber,
                        'mother_o_number'=>$field_mother_onumber,
                        'password'=>$password,
                        'class_id'=>$field_class_id,
                        'year_id'=>$field_year_id
                    );
            }
            $this->_student->get_adm_number($insertArray);
        }
        $data['admissionnumber'] = $this->_student->get_adm_number();

        
        $this->load->view('add-students', $data);
    }

    private function logAlert($prin)
    {
        echo '<script>alert(" ' . $prin . ' ")</script>';
    }

    private function checkNumbersinString($string)
    {
        if (preg_match('/[0-9]/', $string)) {
            return true;
        } else {
            return false;
        }
    }

    public function isValidEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    private function setErrorMessage($errors, $strin)
    {
        if (isset($errors->msg)) {
            $errors->msg = $errors->msg . "<br>" . $strin;
        } else {
            $errors->msg = $strin;
        }
    }
    public function index()
    {
        $this->load->view('students');
    }
}
