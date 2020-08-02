<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function __construct(){
        parent::__construct(); 
        $this->load->model('login_model');     
    }
    
    function index()
	{
        $data['main'] = 'dashboard';
        $data['title'] = 'Home';        
		$this->load->view('include/template',$data);
        
	}
    function logout(){
        $this->session->sess_destroy();
		redirect('login');
    }     
}
?>
