<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Classes_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllClasses()
    {
        $query = $this->db->get('classes_list');
        return $query;
    }
    
    public function insertintotable($arr)
    {
        $this->db->insert('classes_list', $arr);
    }

    public function deletefromtable($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('classes_list');
    }
}
