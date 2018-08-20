<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Batches_display_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getBatchStudentInfo($id)
    {
        $batchSQL = 'SELECT student_admission.photo,student_admission.Id as id,student_admission.father_number,student_admission.stud_name as name,student_admission.father_name,student_admission.stud_email as email
            FROM batches_all
            INNER JOIN student_admission ON FIND_IN_SET(student_admission.id , LEFT(RIGHT(batches_all.students_list, CHAR_LENGTH(batches_all.students_list)-1),CHAR_LENGTH(batches_all.students_list)-2)) > 0
            where batches_all.id = '.$id;
        $batchQuery = $this->db->query($batchSQL)->result();

        return $batchQuery;
    }

    public function getBatchInfo($id)
    {
        $batchSQL = 'SELECT batches_all.id, years_list.year , classes_list.class , section_list.section , professor_joining.prof_name
                    FROM batches_all
                    INNER JOIN years_list ON batches_all.year_id=years_list.id 
                    INNER JOIN classes_list ON batches_all.class_id=classes_list.id
                    INNER JOIN section_list ON batches_all.section_id=section_list.id
                    INNER JOIN professor_joining ON batches_all.coordinator=professor_joining.id
                    where batches_all.id ='.$id;
        $batchQuery = $this->db->query($batchSQL)->row();

        return $batchQuery;
    }
}
