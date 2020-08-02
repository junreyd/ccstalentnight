<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent::__construct();    
        $this->load->model('login_model');
        $this->load->model('register_model'); 
    }
    
    function index(){
        
        $data['title'] = 'Register';
        $data['main'] = 'register';
        $this->load->view('include/template',$data);
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
        if ($this->form_validation->run() == TRUE)
        {
            $this->register_model->add_admin();
            redirect('register?success');
        }
        else
        {
            NULL;
        }  
    }   
}
?>