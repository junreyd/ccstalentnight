<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Judge extends CI_Controller {

    public function __construct(){
        parent::__construct();    
        $this->load->model('judge_model');
    }
    
    function index(){
        $duc = $this->judge_model;       
        $data['judge'] = $duc->get_all_judges();       
        $data['title'] = 'Judge';
        $data['main'] = 'Judge';
        $this->load->view('include/template',$data);
    }

    function read_judge(){
        $id = $this->input->post('id');
        $duc = $this->judge_model->get_judge_by_id($id);
        //$this->load->view('read_judge',$data);
        echo json_encode($duc); 
    }

    function add_judge(){
        $duc = $this->judge_model;        
        $duc->add_judge();
        redirect('judge?add_judge');
    }

    function delete(){
        $duc = $this->judge_model;        
        $duc->delete_judge();
        redirect('judge?delete');
    }
   
    function update_judge(){
        $this->judge_model->update_judge();
        redirect('judge?update_judge');
    }
}

?>