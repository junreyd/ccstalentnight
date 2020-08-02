<?php

class Register_model extends CI_Model {
   
    function add_admin(){
        $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );
            $this->db->insert('user',$data);
    }
}
?>