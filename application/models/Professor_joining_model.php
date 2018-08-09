<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Professor_joining_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_id()
    {
        $this->db->select('MAX(id) as max');
        $query = $this->db->get('professor_joining')->row();
    	return $query->max ?$query->max:1;
    }

    public function insertintoprof($arr)
    {
       // $data['data'] = $this->db->get('posts');
        $this->db->insert('professor_joining',$arr);
    }
}
