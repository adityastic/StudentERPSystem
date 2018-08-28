<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Student_update_model extends CI_Model
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

    public function get_batch($id)
    {
        $query = 'SELECT years_list.year , classes_list.class , section_list.section 
            FROM batches_all
            INNER JOIN years_list ON batches_all.year_id=years_list.id 
            INNER JOIN classes_list ON batches_all.class_id=classes_list.id
            INNER JOIN section_list ON batches_all.section_id=section_list.id
            where batches_all.id = '.$id;

        $yearQuery = $this->db->query($query);
        return $yearQuery;
    }

    public function updateStudent($oldbatch_id, $arr, $student_id, $classid, $yearid, $sectionid)
    {   
        $oldbatch_student_list = json_decode($this->db->get_where('batches_all', array('id =' => $oldbatch_id))->row()->students_list);
        array_splice($oldbatch_student_list, array_search($student_id, $oldbatch_student_list), array_search($student_id, $oldbatch_student_list) +1 );
        
        $newbatch_query = $this->db->get_where('batches_all', array('class_id =' => $classid,'year_id =' => $yearid,'section_id =' => $sectionid))->row();
        $newbatch_id = $newbatch_query->id;
        $newbatch_student_list = json_decode($newbatch_query->students_list);
        $newbatch_student_list[] = (int)$student_id;
        $newbatch_student_list = array_unique($newbatch_student_list);

        $data=array('students_list'=>json_encode($oldbatch_student_list));
        $this->db->where('id',$oldbatch_id);
        $this->db->update('batches_all',$data);

        $data=array('students_list'=>json_encode($newbatch_student_list));
        $this->db->where('id',$newbatch_id);
        $this->db->update('batches_all',$data);

        $arr['batch_id'] = $newbatch_id;
        $this->db->where('id',$student_id);
        $this->db->update('student_admission',$arr);
    }
}
