<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
        parent::__construct();  
        $this->load->model('login_model');
        $is_logged_in = $this->session->userdata('is_logged_in');
        if($is_logged_in){
        redirect('dashboard');
        }
    }
    
    function index()
	{
		$this->form_validation->set_rules('user', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			$this->load->model('login_model');
            $verify = $this->login_model->verify();
            if($verify){                                
                redirect('dashboard');
            }else{
                redirect('login?login=error'); 
            }                 
		}
        
	}
    
    
}

?>
