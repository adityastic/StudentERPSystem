<?php
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $data = new stdClass();
        $data->title = 'Laurels School Admin';
        $data->schoolname = 'Laurels School International';
        $data->schoollocation = 'Indore, India';

        $data->company_name = 'NxtVision';
        $data->welcome_string = 'by NxtVision';

        $data->theme = 'theme-purple';
        $this->load->vars($data);
    }
}