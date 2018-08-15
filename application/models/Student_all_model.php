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

    public function get_all_students_2017()
    {

        $this->db->select('*');
        $this->db->from('student_admission');
        $this->db->like("year_id","2017");
        $query=$this->db->get();


        return $query;


    }
    public function get_all_students_2018()
    {
        $this->db->select('*');
        $this->db->from('student_admission');
        $this->db->like("year_id","2018");
        $query=$this->db->get();
        return $query;


    }
}
