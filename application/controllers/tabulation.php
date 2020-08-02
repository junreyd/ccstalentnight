<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabulation extends CI_Controller {

	public function __construct(){
        parent::__construct();    
        $this->load->model('tabulation_model');
    }
    
    function index(){
        $duc = $this->tabulation_model;
        
        $this->tabulation_model->mrtabulation_recalculate();
        $this->tabulation_model->mstabulation_recalculate();

        $data['mrtab'] = $duc->get_all_mrtab();
        $data['mstab'] = $duc->get_all_mstab();  
       
        $data['title'] = 'Tabulation';
        $data['main'] = 'tabulation';
		$this->load->view('include/template',$data);
    }

    function get_mrtab(){
        $duc = $this->tabulation_model;        
        $duc->get_mrtabulate();
        redirect('tabulation?get_mrtab');
    }

    function get_mstab(){
        $duc = $this->tabulation_model;        
        $duc->get_mstabulate();
        redirect('tabulation?get_mstab');
    }
}
?>