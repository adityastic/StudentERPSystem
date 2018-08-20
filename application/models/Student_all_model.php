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

        $batchDetailsArray = array();
        $batchDetailsArray["ALL"] = array();

        // Years Loop
        $yearQuery = $this->db->get('years_list')->result();
        foreach ( $yearQuery as $row)
        {
            $yearSQL = 'SELECT *  
            FROM batches_all
            INNER JOIN years_list ON batches_all.year_id=years_list.id 
            INNER JOIN student_admission ON FIND_IN_SET(student_admission.id , LEFT(RIGHT(batches_all.students_list, CHAR_LENGTH(batches_all.students_list)-1),CHAR_LENGTH(batches_all.students_list)-2)) > 0
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
