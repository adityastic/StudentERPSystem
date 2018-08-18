<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Student_admission_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_adm_number()
    {
        $this->db->select('MAX(id) as max');
        $query = $this->db->get('student_admission')->row();
        return $query->max ? ($query->max+1) :1;
    }

    public function insertintoadmission($arr,$classid,$yearid,$sectionid)
    {
        $query = $this->db->get_where('batches_all', array('class_id =' => $classid,'year_id =' => $yearid,'section_id =' => $sectionid))->row();
        $student_list = json_decode($query->students_list);
        $student_list[] = $this->get_adm_number();
        $student_list = array_unique($student_list);

        $data=array('students_list'=>json_encode($student_list));
        $this->db->where('id',$query->id);
        $this->db->update('batches_all',$data);

        $this->db->insert('student_admission', $arr);
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
}
