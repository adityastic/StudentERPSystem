<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Years_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllYears()
    {
        $query = $this->db->get('years_list');
        return $query;
    }
    
    public function insertintotable($arr)
    {
        $this->db->insert('years_list', $arr);
    }

    public function deletefromtable($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('years_list');
    }
}
