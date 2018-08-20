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
            $yearSQL = 'SELECT *  
            FROM student_admission';
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
