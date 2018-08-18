<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Batches_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

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
    public function checkBatch($class,$year,$section)
    {
        $query = $this->db->get_where('batches_all', array('class_id =' => $class,'year_id =' => $year,'section_id =' => $section));
        return ($query->num_rows() > 0)?true:false; 
    }
    
    public function insertBatch($arr)
    {
        $this->db->insert('batches_all', $arr);
    }
}
