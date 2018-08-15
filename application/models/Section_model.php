<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Section_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllSections()
    {
        $query = $this->db->get('section_list');
        return $query;
    }

    public function insertintotable($arr)
    {
        $this->db->insert('section_list', $arr);
    }

    public function deletefromtable($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('section_list');
    }
}
