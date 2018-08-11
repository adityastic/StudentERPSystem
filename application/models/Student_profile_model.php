<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Student_profile_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_profile($id)
    {
    	$query = $this->db->get_where('student_admission', array('id =' => $id))->row();
        return $query;
    }
}
