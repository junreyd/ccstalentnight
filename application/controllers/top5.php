<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top5 extends CI_Controller {

    public function __construct(){
        parent::__construct();    
        $this->load->model(['Tabulation_model', 'top5_model']);
    }
    
    function index(){
        $duc = $this->top5_model;

        $this->Tabulation_model->mrtabulation_recalculate();
        $this->Tabulation_model->mstabulation_recalculate();

        $data['mrtop'] = $mrtop = $duc->get_all_mrtop5();
        $data['mrtop_asc'] = array_reverse($mrtop);
        $data['mstop'] = $mstop = $duc->get_all_mstop5();
        $data['mstop_asc'] = array_reverse($mstop);
        $data['title'] = 'Top5';
        $data['main'] = 'top5';
        $this->load->view('include/template',$data);
    }

    function get_top(){
        $id = $this->input->post('id');
        $duc = $this->top5_model->get_mrtop5_by_id($id);
        echo json_encode($duc); 
    }
}
?>