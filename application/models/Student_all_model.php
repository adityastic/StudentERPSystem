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

//        $query = $this->db->get('student_admission');
//        return $query;

        $batchDetailsArray = array();
        $batchDetailsArray["ALL"] = array();

        // Years Loop
        $yearQuery = $this->db->get('years_list')->result();
        foreach ( $yearQuery as $row)
        {
            $yearSQL = 'SELECT batches_all.id, years_list.year , classes_list.class , section_list.section 
            , professor_joining.prof_name  
            FROM batches_all
            INNER JOIN years_list ON batches_all.year_id=years_list.id 
            INNER JOIN classes_list ON batches_all.class_id=classes_list.id
            INNER JOIN section_list ON batches_all.section_id=section_list.id

            INNER JOIN professor_joining ON batches_all.coordinator=professor_joining.id 
            where batches_all.year_id ='.$row->id;
            $yearQuery = $this->db->query($yearSQL)->result();

            $batchDetailsArray["ALL"] = array_merge($batchDetailsArray["ALL"],$yearQuery);
            $batchDetailsArray[$row->year] = $yearQuery;
        }
        return $batchDetailsArray;
    }

    public function get_years()
{

    $query = $this->db->get('years_list');
    return $query;
}

}
