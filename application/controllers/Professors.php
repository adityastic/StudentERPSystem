<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class professors extends MY_Controller {

	public function all_professor()
	{
        $this->load->model('Professor_all_model', '_profesor');
        //load the method of model
        $data['details']=$this->_profesor->get_all_prof();

        $this->load->view('professors-all',$data);
	}

	public function add_professor()
	{
        $field_photo = '';
        $this->load->model('Professor_joining_model', '_profesor');
        $data['error_list'] = array();
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpeg|jpg|png';

            $errors = new stdClass();
            $this->load->library('upload', $config);

            //VALIDATION CODE
            $field_adm_number = $this->input->post('field_id');
            $field_prof_ph = $this->input->post('field_prof_ph');

            $date1 = $this->input->post('field_prof_dob');

            $field_prof_dob  = DateTime::createFromFormat('d/m/Y', $date1)->format('Y-m-d');
            $field_city = $this->input->post('field_city');
            $field_curradd = $this->input->post('field_curradd');
            $field_currpin = $this->input->post('field_currpin');
            $field_permadd = $this->input->post('field_permadd');
            $field_permpin = $this->input->post('field_permpin');
            $password = $this->input->post('psw');

            $field_prof_fname = $this->input->post('field_prof_fname') ;
            if ($this->checkNumbersinString($field_prof_fname)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter First Name without numbers");
                $field_prof_fname = "";
            }

            $field_prof_lname = $this->input->post('field_prof_lname');
            if ($this->checkNumbersinString($field_prof_lname)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Last Name without numbers");
                $field_prof_lname="";
            }

            $student_name = $field_prof_fname . " " . $field_prof_lname;

            $field_prof_gender = $this->input->post('field_prof_gender');
            if (strcmp($field_prof_gender, 'none') == 0) {
                $errors->has = true ;
                $this->setErrorMessage($errors, "- Enter Gender");
            }

            $field_prof_email = $this->input->post('field_prof_email');
            if (!$this->isValidEmail($field_prof_email)) {
                $errors->has = true ;
                $this->setErrorMessage($errors, "- Enter Email Correctly");
                $field_prof_email = "";
            }

            $field_prof_caste = $this->input->post('field_prof_caste');
            if (strcmp($field_prof_caste, 'none') == 0) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Category");
                $field_prof_caste="";
            }

            $field_state = $this->input->post('field_state');
            if (strcmp($field_state, 'none') == 0) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter State");
                $field_state="";
            }

            $field_bgroup = $this->input->post('field_bgroup');
            if (strcmp($field_bgroup, 'none') == 0) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Blood Group");
                $field_bgroup ="none";
            }

            $field_father_name = $this->input->post('field_father_name');
            if ($this->checkNumbersinString($field_father_name)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Fathers's Name without numbers");
                $field_father_name="";
            }

            $field_mother_name = $this->input->post('field_mother_name');
            if ($this->checkNumbersinString($field_mother_name)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Mother's Name without numbers");
                $field_mother_name="";
            }



            $field_bank_name = $this->input->post('field_bank_name');
            if ($this->checkNumbersinString($field_bank_name)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Bank Name");
                $field_bank_name="";
            }

            $field_branch_name = $this->input->post('field_branch_name');
            if ($this->checkNumbersinString($field_branch_name)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Bank Name");
                $field_branch_name="";
            }

            $field_acc_num = $this->input->post('field_acc_num');
            if ($this->checkNumbersinString($field_bank_name)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Account Number");
                $field_acc_num="";
            }

            $field_pan_num = $this->input->post('field_pan_num');
            $field_ifsc_code = $this->input->post('field_ifsc_code');

            $field_highest_qualification = $this->input->post('field_highest_qualification');
            if (strcmp($field_highest_qualification, 'none') == 0) {
                $errors->has = true ;
                $this->setErrorMessage($errors, "- Enter Qualification");
            }

            if (!isset($errors->has)) {
                if ($this->upload->do_upload('field_photo') == false) {
                    $error = array('error' => $this->upload->display_errors());
                    if (strpos($error['error'], 'filetype') !== false) {
                        $errors->has = true;
                        $this->setErrorMessage($errors, "- Upload a Supported filetype (jpg,jpeg,png)");
                    }
                } else {
                    $field_photo = $this->upload->data('file_name');
                }
            } else {
                $this->setErrorMessage($errors, "- Upload the file again");
            }

            //END VALIDATION CODE

            if (isset($errors->has)) {
                $data['errorstring'] = $errors->msg;
                $modifiedArray = array(
                    'field_prof_fname'=>$field_prof_fname,
                    'field_prof_lname'=>$field_prof_lname,
                    'field_father_name'=>$field_father_name,
                    'field_mother_name'=>$field_mother_name,
                    'field_curradd'=>$field_curradd,
                    'field_permadd'=>$field_permadd,
                    'field_prof_dob'=>$date1,
                    'field_prof_gender'=>$field_prof_gender,
                    'field_bgroup'=>$field_bgroup,
                    'field_prof_caste'=>$field_prof_caste,
                    'field_city'=>$field_city,
                    'field_state'=>$field_state,
                    'field_permpin'=>$field_permpin,
                    'field_currpin'=>$field_currpin,
                    'field_prof_email'=>$field_prof_email,
                    'field_prof_ph'=>$field_prof_ph,
                    'field_photo'=>$field_photo,
                    'field_acc_num'=>$field_acc_num,
                    'field_ifsc_code'=>$field_ifsc_code,
                    'field_branch_name'=>$field_branch_name,
                    'field_bank_name'=>$field_bank_name,
                    'field_pan_num'=>$field_pan_num,
                    'field_highest_qualification'=>$field_highest_qualification,
                );
                $data['_reEntry'] = $modifiedArray;
            } else {
                date_default_timezone_set('Asia/Kolkata');
                $date = date('d.m.Y H:i:s', time());
                $current_date  = DateTime::createFromFormat('d.m.Y H:i:s', $date)->format('Y-m-d h:i:s');

                $insertArray = array(
                    'join_date'=>$current_date,
                    'prof_name'=>$student_name,
                    'father_name'=>$field_father_name,
                    'mother_name'=>$field_mother_name,
                    'current_address'=>$field_curradd,
                    'permanent_address'=>$field_permadd,
                    'prof_dob'=>$field_prof_dob,
                    'gender'=>$field_prof_gender,
                    'prof_bloodgroup'=>$field_bgroup,
                    'prof_category'=>$field_prof_caste,
                    'city'=>$field_city,
                    'state'=>$field_state,
                    'permanent_address_pin'=>$field_permpin,
                    'current_address_pin'=>$field_currpin,
                    'email'=>$field_prof_email,
                    'phone'=>$field_prof_ph,
                    'photo'=>$field_photo,
                    'password'=>$password,
                    'bank_name'=>$field_bank_name,
                    'branch_name'=>$field_branch_name,
                    'ifsc'=>$field_ifsc_code,
                    'account_number'=>$field_acc_num,
                    'highest_qualification'=>$field_highest_qualification,
                    'pan_number'=>$field_pan_num,
                );
                $this->_profesor->insertintoprof($insertArray);

                $sessarr = array(
                    'add_done' => 'yes',
                );
                $this->session->set_userdata($sessarr);
                redirect('/professors/add_professor', 'refresh');
            }
        }
        if (!empty($this->session->userdata('add_done'))) {
            $this->session->sess_destroy();
            $data['done'] = true;
        }

        $data['profnumber'] = $this->_profesor->get_adm_number();
        $this->load->view('professors-add', $data);
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

}