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
    public function update_student($data,$id,$classid,$yearid,$sectionid)
    {
        $query = $this->db->get_where('batches_all', array('class_id =' => $classid,'year_id =' => $yearid,'section_id =' => $sectionid))->row();

        $data['batch_id'] = $query->id;

        $this->db->where('id', $id);
        $this->db->update('student_admission', $data);
        
        $student_list = json_decode($query->students_list);
        foreach ($students_list as $key) {
            # code...
        }


        $this->db->where('id',$query->id);
        $this->db->update('batches_all',$data);



        /*$this->db->where('id',$query->id);
        $this->db->update('batches_all',$data);
*/
    }
}
