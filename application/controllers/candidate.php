<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate extends CI_Controller {

	public function __construct(){
        parent::__construct();    
        $this->load->model('candidate_model');
    }
    
    function index(){
        $duc = $this->candidate_model;       
        $data['mrcan'] = $duc->get_all_mrcandidates();
        $data['mscan'] = $duc->get_all_mscandidates();       
        $data['title'] = 'Candidate';
        $data['main'] = 'candidate';
		$this->load->view('include/template',$data);
    }

    function read_mrcandidate(){
        $id = $this->input->post('id');
        $duc = $this->candidate_model->get_mrcandidate_by_id($id);
        //$this->load->view('read',$data);
        echo json_encode($duc); 
    }

    function read_mscandidate(){
        $id = $this->input->post('id');
        $duc = $this->candidate_model->get_mscandidate_by_id($id);
        //$this->load->view('read',$data);
        echo json_encode($duc); 
    }

    function add_mrcan(){
        $duc = $this->candidate_model;        
        $duc->add_mrcandidate();
        redirect('candidate?add_mrcan');
    }

    function add_mscan(){
        $duc = $this->candidate_model;        
        $duc->add_mscandidate();
        redirect('candidate?add_mscan');
    }

    function delete_mrcan(){
        $duc = $this->candidate_model;        
        $duc->delete_mrcandidate();
        redirect('candidate?delete_mrcan');
    }

    function delete_mscan(){
        $duc = $this->candidate_model;        
        $duc->delete_mscandidate();
        redirect('candidate?delete_mscan');
    }
   
    function update_mrcan(){
        $this->candidate_model->update_mrcandidate();
        redirect('candidate?update_mrcan');
    }
   
    function update_mscan(){
        $this->candidate_model->update_mscandidate();
        redirect('candidate?update_mscan');
    }
}

?>