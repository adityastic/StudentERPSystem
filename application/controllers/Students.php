<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends MY_Controller
{
    public function add_students()
    {
        $this->load->model('student_admission_model', '_student');
        $data['error_list'] = array();
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $field_photo = '';

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpeg|jpg|png';

            $errors = new stdClass();
            $this->load->library('upload', $config);

            //VALIDATION CODE
            $field_adm_number = $this->input->post('field_adm_number');
            $field_stud_ph = $this->input->post('field_stud_ph');
           
            $date1 = $this->input->post('field_stud_dob');

            $field_stud_dob  = DateTime::createFromFormat('d/m/Y', $date1)->format('Y-m-d');
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
                $field_stud_fname = "";
            }

            $field_stud_lname = $this->input->post('field_stud_lname');
            if ($this->checkNumbersinString($field_stud_lname)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Last Name without numbers");
                $field_stud_lname="";
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
                $field_stud_email = "";
            }

            $field_stud_caste = $this->input->post('field_stud_caste');
            if (strcmp($field_stud_caste, 'none') == 0) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Category");
                $field_stud_caste="";
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

            $field_father_email = $this->input->post('field_father_email');
            if (!$this->isValidEmail($field_father_email)) {
                $errors->has = true ;
                $this->setErrorMessage($errors, "- Enter Father's Email Correctly");
                $field_father_email="";
            }

            $field_class_id = $this->input->post('field_class_id');
            $field_year_id = $this->input->post('field_year_id');
            $field_section_id = $this->input->post('field_section_id');

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

            if (!isset($errors->has)) {
                if (!$this->_student->checkBatch($field_class_id, $field_year_id, $field_section_id)) {
                    $errors = new stdClass();
                    $errors->has = true;
                    $this->setErrorMessage($errors, "- Batch not found, <a href=" . site_url('batches/add_batch') . ">Create a batch first</a>");
                }
            }
            //END VALIDATION CODE

            if (isset($errors->has)) {
                $data['errorstring'] = $errors->msg;
                $modifiedArray = array(
                    'field_stud_fname'=>$field_stud_fname,
                    'field_stud_lname'=>$field_stud_lname,
                    'field_father_name'=>$field_father_name,
                    'field_mother_name'=>$field_mother_name,
                    'field_father_number'=>$field_father_number,
                    'field_mother_number'=>$field_mother_number,
                    'field_curradd'=>$field_curradd,
                    'field_permadd'=>$field_permadd,
                    'field_father_email'=>$field_father_email,
                    'field_stud_dob'=>$date1,
                    'field_stud_gender'=>$field_stud_gender,
                    'field_bgroup'=>$field_bgroup,
                    'field_stud_caste'=>$field_stud_caste,
                    'field_city'=>$field_city,
                    'field_state'=>$field_state,
                    'field_permpin'=>$field_permpin,
                    'field_currpin'=>$field_currpin,
                    'field_stud_email'=>$field_stud_email,
                    'field_stud_ph'=>$field_stud_ph,
                    'field_father_onumber'=>$field_father_onumber,
                    'field_mother_onumber'=>$field_mother_onumber,
                    'field_class_id'=>$field_class_id,
                    'field_year_id'=>$field_year_id,
                    'field_section_id'=>$field_section_id
                );
                $data['_reEntry'] = $modifiedArray;
            } else {
                date_default_timezone_set('Asia/Kolkata');
                $date = date('d.m.Y H:i:s', time());
                $current_date  = DateTime::createFromFormat('d.m.Y H:i:s', $date)->format('Y-m-d h:i:s');

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
                    'stud_blood_group'=>$field_bgroup,
                    'stud_caste'=>$field_stud_caste,
                    'city'=>$field_city,
                    'state'=>$field_state,
                    'perma_address_pin'=>$field_permpin,
                    'currrent_address_pin'=>$field_currpin,
                    'stud_email'=>$field_stud_email,
                    'stud_phone'=>$field_stud_ph,
                    'photo'=>$field_photo,
                    'father_o_number'=>$field_father_onumber,
                    'mother_o_number'=>$field_mother_onumber,
                    'password'=>$password,
                );
                $this->_student->insertintoadmission($insertArray, $field_class_id, $field_year_id, $field_section_id);
                $sessarr = array(
                    'add_done' => 'yes',
                );
                $this->session->set_userdata($sessarr);
                redirect('/students/add_students', 'refresh');
            }
        }

        if (!empty($this->session->userdata('add_done'))) {
            $this->session->sess_destroy();
            $data['done'] = true;
        }

        $data['admissionnumber'] = $this->_student->get_adm_number();
        $data['classes'] = $this->_student->get_all_classes();
        $data['years'] =$this->_student->get_all_years();
        $data['sections'] =$this->_student->get_all_sections();
        $this->load->view('students-add', $data);
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

    public function all_students()
    {
        $this->load->model('Student_all_model', '_student');
        $data['details']=$this->_student->get_all_students();
        $data['details1']=$this->_student->get_years();

        if (!empty($this->session->userdata('add_student'))) {
            $this->session->sess_destroy();
            $data['done'] = true;
        }

        $this->load->view('students-all', $data);
    }

    public function show_profile($id)
    {
        if (!empty($id)) {
            $this->load->model('Student_profile_model', '_student');
            $result = $this->_student->get_profile($id);

            $data['name'] = $result->stud_name;
            $data['id'] = $id;
            $data['current_address'] = $result->current_address;
            
            $data['stud_email'] = $result->stud_email;
            $data['stud_phone'] = $result->stud_phone;
            $data['photo']=$result->photo;
            $this->load->view('students-profile', $data);
        }
    }

    public function update_student($id)
    {
        $this->load->model('student_update_model', '_studentupdate');

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->model('student_admission_model', '_student');
            $this->load->model('student_update_model', '_studentupdate');

            $field_photo = '';

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpeg|jpg|png';

            $errors = new stdClass();
            $this->load->library('upload', $config);

            //VALIDATION CODE
            $field_adm_number = $this->input->post('field_adm_number');
            $field_stud_ph = $this->input->post('field_stud_ph');
           
            $date1 = $this->input->post('field_stud_dob');

            $field_stud_dob  = DateTime::createFromFormat('d/m/Y', $date1)->format('Y-m-d');
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
                $field_stud_fname = "";
            }

            $field_stud_lname = $this->input->post('field_stud_lname');
            if ($this->checkNumbersinString($field_stud_lname)) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Last Name without numbers");
                $field_stud_lname="";
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
                $field_stud_email = "";
            }

            $field_stud_caste = $this->input->post('field_stud_caste');
            if (strcmp($field_stud_caste, 'none') == 0) {
                $errors->has = true;
                $this->setErrorMessage($errors, "- Enter Category");
                $field_stud_caste="";
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

            $field_father_email = $this->input->post('field_father_email');
            if (!$this->isValidEmail($field_father_email)) {
                $errors->has = true ;
                $this->setErrorMessage($errors, "- Enter Father's Email Correctly");
                $field_father_email="";
            }

            $field_class_id = $this->input->post('field_class_id');
            $field_year_id = $this->input->post('field_year_id');
            $field_section_id = $this->input->post('field_section_id');

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

            if (!isset($errors->has)) {
                if (!$this->_student->checkBatch($field_class_id, $field_year_id, $field_section_id)) {
                    $errors = new stdClass();
                    $errors->has = true;
                    $this->setErrorMessage($errors, "- Batch not found, <a href=" . site_url('batches/add_batch') . ">Create a batch first</a>");
                }
            }
            //END VALIDATION CODE

            if (isset($errors->has)) {
                $data['errorstring'] = $errors->msg;

                $data['name'] = $field_stud_fname;
                $data['current_address'] = $field_curradd;
                $data['stud_email'] = $field_stud_email;
                $data['stud_phone'] = $field_stud_ph;
                $data['photo']=$result->photo;
                $data['father_name']=$field_father_name;
                $data['mother_name']=$field_mother_name;
                $data['father_no']=$field_father_number;
                $data['mother_no']=$field_mother_number;
                $data['perma_address']=$field_permadd;
                $data['father_email']=$field_father_email;
                $data['student_dob']  = $date1;
                $data['student_gender']=$field_stud_gender;
                $data['student_bg']=$field_bgroup;
                $data['student_caste']=$field_stud_caste;
                $data['city']=$field_city;
                $data['state']=$field_state;
                $data['perma_address_pin']=$field_permpin;
                $data['father_office_no']=$field_father_onumber;
                $data['mother_office_no']=$field_mother_onumber;
                $data['stud_password']=$result->password;
                $data['current_address_pin']=$field_currpin;
                $data['admissionnumber'] = $id;

                $data['old_batch_id'] = $this->input->post('old_batch_id');
                $data['yearSelected'] = $batch_content->year;
                $data['classSelected'] = $batch_content->class;
                $data['sectionSelected'] = $batch_content->section;

                $data['classes'] = $field_class_id;
                $data['years'] =$field_year_id;
                $data['sections'] =$field_section_id;
                $this->load->view('students-update', $data);
            } else {
                $insertArray = array(
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
                    'stud_blood_group'=>$field_bgroup,
                    'stud_caste'=>$field_stud_caste,
                    'city'=>$field_city,
                    'state'=>$field_state,
                    'perma_address_pin'=>$field_permpin,
                    'currrent_address_pin'=>$field_currpin,
                    'stud_email'=>$field_stud_email,
                    'stud_phone'=>$field_stud_ph,
                    'photo'=>$field_photo,
                    'father_o_number'=>$field_father_onumber,
                    'mother_o_number'=>$field_mother_onumber,
                    'password'=>$password,
                );

                $this->_studentupdate->updateStudent($this->input->post('old_batch_id'), $insertArray, $id, $field_class_id, $field_year_id, $field_section_id);
                $sessarr = array(
                    'add_student' => 'yes',
                );
                $this->session->set_userdata($sessarr);
                redirect('/students/all_students', 'refresh');
            }
        } else {
            $this->load->model('student_update_model', '_studentupdate');
            $this->load->model('student_admission_model', '_student_adm');

            $result = $this->_studentupdate->get_profile($id);
            $data['name'] = $result->stud_name;
            $data['current_address'] = $result->current_address;
            $data['stud_email'] = $result->stud_email;
            $data['stud_phone'] = $result->stud_phone;
            $data['photo']=$result->photo;
            $data['father_name']=$result->father_name;
            $data['mother_name']=$result->mother_name;
            $data['father_no']=$result->father_number;
            $data['mother_no']=$result->mother_number;
            $data['perma_address']=$result->perma_address;
            $data['father_email']=$result->father_email;
            $data['student_dob']  = DateTime::createFromFormat('Y-m-d', $result->stud_dob)->format('d/m/Y');
            $data['student_gender']=$result->stud_gender;
            $data['student_bg']=$result->stud_blood_group;
            $data['student_caste']=$result->stud_caste;
            $data['city']=$result->city;
            $data['state']=$result->state;
            $data['perma_address_pin']=$result->perma_address_pin;
            $data['father_office_no']=$result->father_o_number;
            $data['mother_office_no']=$result->mother_o_number;
            $data['stud_password']=$result->password;
            $data['current_address_pin']=$result->currrent_address_pin;
            $data['admissionnumber'] = $id;

            $data['old_batch_id'] = $result->batch_id;
            $batch_content = $this->_studentupdate->get_batch($result->batch_id)->row();
            $data['yearSelected'] = $batch_content->year;
            $data['classSelected'] = $batch_content->class;
            $data['sectionSelected'] = $batch_content->section;

            $data['classes'] = $this->_student_adm->get_all_classes();
            $data['years'] =$this->_student_adm->get_all_years();
            $data['sections'] =$this->_student_adm->get_all_sections();
            $this->load->view('students-update', $data);
        }
    }
}
