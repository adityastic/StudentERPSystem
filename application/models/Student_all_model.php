<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Student_all_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_students()
    {

        $query = $this->db->get('student_admission');
        return $query;

    }
}
