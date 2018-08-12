<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Subject_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllSubjects()
    {
        $query = $this->db->get('subject_list');
        return $query;
    }

    public function insertintotable($arr)
    {
        $this->db->insert('subject_list', $arr);
    }

    public function deletefromtable($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('subject_list');
    }
}
