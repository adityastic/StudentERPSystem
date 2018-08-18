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
    
    public function logAlert($prin)
    {
        echo '<script>alert(" ' . $prin . ' ")</script>';
    }

    public function setErrorMessage($errors, $strin)
    {
        if (isset($errors->msg)) {
            $errors->msg = $errors->msg . "<br>" . $strin;
        } else {
            $errors->msg = $strin;
        }
    }
}