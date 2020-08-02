<?php

class Judge_model extends CI_Model {

    function add_judge(){
       
        $data = array(
                'username' => $this->input->post('username'),
                'name' => $this->input->post('name')
            );        
        $this->db->insert('judge',$data);
        return TRUE;
    }
    
    function get_all_judges(){
        $q = $this->db
                    ->get('judge')                    
                    ->result();
        return $q;
    }

    function get_judge_by_id($judge_id){
        $this->db->select('judge.name,judge.judge_id,judge.username');
        $this->db->where('judge_id',$judge_id);     
        $q = $this->db->get('judge')->result();               

        return $q;
    }
          
    function update_judge(){
        $post = $this->input->post();
        $data = array(
                'name' => $post['name'],
                'username' => $post['username']
            );
        $judge_id = $post['judge_id'];
        $this->db->where('judge_id', $judge_id);
        $this->db->update('judge', $data); 
        return true;
    }
  
    function delete_judge(){
        $ids = $this->input->post('judge_id');
        $c = count($ids);
        if($c == 0){
            $ids = array($this->uri->segment(3));   
        }
        $c = count($ids);
        for($i=0; $i < $c; $i++){
            $judge_id = $ids[$i];   
            echo $judge_id;
            $this->db
                    ->where('judge_id',$judge_id)
                    ->delete('judge'); 
        }
        
    }
}
?>