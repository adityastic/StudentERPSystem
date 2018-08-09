<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Professor_all_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_prof()
    {

        $query = $this->db->get('professor_joining');
        return $query;

    }
}
