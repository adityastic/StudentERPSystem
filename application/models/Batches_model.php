<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Batches_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // public function getAllSubjects()
    // {
    //     $query = $this->db->get('batches');
    //     return $query;
    // }

    // public function insertintotable($arr)
    // {
    //     $this->db->insert('subject_list', $arr);
    // }

    // public function deletefromtable($id)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->delete('subject_list');
    // }
    
    public function get_all_teachers()
    {
        $this->db->select('id, prof_name');
        return $this->db->get('professor_joining');
    }

    public function get_all_subjects()
    {
        $query = $this->db->get('subject_list');
        return $query;
    }

    public function get_all_classes()
    {
        $query = $this->db->get('classes_list');
        return $query;
    }
    public function get_all_years()
    {
        $query = $this->db->get('years_list');
        return $query;
    }
    public function get_all_sections()
    {
        $query = $this->db->get('section_list');
        return $query;
    }
}
