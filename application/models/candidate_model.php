<?php

class Candidate_model extends CI_Model {

    function add_mrcandidate(){

        $data = array(
                'mrcan_no' => $this->input->post('mrcan_no'),
                'mrcan_name' => $this->input->post('mrcan_name'),
            );

        if ($profile = $this->upload_mrprofile()) {
            $data['mrprofile'] = $profile;
        }

        $this->db->insert('mrcandidate',$data);
        return TRUE;
    }

    function add_mscandidate(){

        $data = array(
                'mscan_no' => $this->input->post('mscan_no'),
                'mscan_name' => $this->input->post('mscan_name')
        );

        if ($profile = $this->upload_msprofile()) {
            $data['msprofile'] = $profile;
        }

        $this->db->insert('mscandidate',$data);
        return TRUE;
    }

    function get_all_mrcandidates(){
        $q = $this->db
                    ->get('mrcandidate')
                    ->result();
        return $q;
    }

    function get_all_mscandidates(){
        $q = $this->db
                    ->get('mscandidate')
                    ->result();
        return $q;
    }

    function get_mrcandidate_by_id($mrcan_id){
        $this->db->select('mrcandidate.mrcan_name,mrcandidate.mrprofile,mrcandidate.mrcan_id,mrcandidate.mrcan_no');
        $this->db->where('mrcan_id',$mrcan_id);
        $q = $this->db->get('mrcandidate')->result();
        $this->db->select('mrcandidate.mrcan_name,mrcandidate.mrcan_id,mrcandidate.mrprofile,mrcandidate.mrcan_no');

        return $q;
    }

    function get_mscandidate_by_id($mrcan_id){
        $this->db->select('mscandidate.mscan_name,mscandidate.msprofile,mscandidate.mscan_id,mscandidate.mscan_no');
        $this->db->where('mscan_id',$mrcan_id);
        $q = $this->db->get('mscandidate')->result();

        return $q;
    }

    function update_mrcandidate(){
        $post = $this->input->post();
        $data = array(
                'mrcan_no' => $post['mrcan_no'],
                'mrcan_name' => $post['mrcan_name']
            );

        if ($profile = $this->upload_mrprofile()) {
            $data['mrprofile'] = $profile;
        }

        $mrcan_id = $post['mrcan_id'];
        $this->db->where('mrcan_id', $mrcan_id);
        $this->db->update('mrcandidate', $data);
        return true;
    }

    function update_mscandidate(){
        $post = $this->input->post();
        $data = array(
                'mscan_no' => $post['mscan_no'],
                'mscan_name' => $post['mscan_name']
            );

        if ($profile = $this->upload_msprofile()) {
            $data['msprofile'] = $profile;
        }

        $mscan_id = $post['mscan_id'];
        $this->db->where('mscan_id', $mscan_id);
        $this->db->update('mscandidate', $data);
        return true;
    }

    function delete_mrcandidate(){
        $ids = $this->input->post('mrcan_id');
        $c = count($ids);
        if($c == 0){
            $ids = array($this->uri->segment(3));
        }
        $c = count($ids);
        for($i=0; $i < $c; $i++){
            $mrcan_id = $ids[$i];
            echo $mrcan_id;
            $this->db
                    ->where('mrcan_id',$mrcan_id)
                    ->delete('mrcandidate');
        }

    }

    function delete_mscandidate(){
        $ids = $this->input->post('mscan_id');
        $c = count($ids);
        if($c == 0){
            $ids = array($this->uri->segment(3));
        }
        $c = count($ids);
        for($i=0; $i < $c; $i++){
            $mscan_id = $ids[$i];
            echo $mscan_id;
            $this->db
                    ->where('mscan_id',$mscan_id)
                    ->delete('mscandidate');
        }
    }

    function upload_mrprofile()
    {
        $temp_path = 'uploads/candidate';
        $upload_path = './'.$temp_path;
        if (! is_dir($upload_path)) { mkdir($upload_path, 0755, true); }

        $config['allowed_types'] = 'gif|jpg|png';
        $config['upload_path'] = $upload_path;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('mrprofile')) {
            $file = $this->upload->data();
            return $temp_path.'/'.$file['file_name'];
        } else {
            show_error($this->upload->display_errors());
        }
    }

    function upload_msprofile()
    {
        $temp_path = 'uploads/candidate';
        $upload_path = './'.$temp_path;
        if (! is_dir($upload_path)) { mkdir($upload_path, 0755, true); }

        $config['allowed_types'] = 'gif|jpg|png';
        $config['upload_path'] = $upload_path;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('msprofile')) {
            $file = $this->upload->data();
            return $temp_path.'/'.$file['file_name'];
        } else {
            show_error($this->upload->display_errors());
        }
    }
}
?>
