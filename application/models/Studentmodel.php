<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class StudentModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_adm_number()
    {
        $this->db->select('MAX(id) as max');
        $query = $this->db->get('student_admission')->row();
    	return $query->max ?$query->max:1;
    }

    public function insertintoadmission($arr)
    {
        $this->db->insert('student_admission',$data);
    }
}
