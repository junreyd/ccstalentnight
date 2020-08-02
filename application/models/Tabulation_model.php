<?php

class Tabulation_model extends CI_Model {

    function get_mrtabulate(){

        $data = array(
                'mrcan_no' => $this->input->post('mrcan_no'),
                'mrcan_name' => $this->input->post('mrcan_name'),
                'judge1' => $this->input->post('judge1'),
                'judge2' => $this->input->post('judge2'),
                'judge3' => $this->input->post('judge3'),
                'total' => $this->input->post('total')
            );
        $this->db->insert('mrtabulation',$data);
        return TRUE;
    }

    function get_mstabulate(){

        $data = array(
                'mscan_no' => $this->input->post('mscan_no'),
                'mscan_name' => $this->input->post('mscan_name'),
                'judge1' => $this->input->post('judge1'),
                'judge2' => $this->input->post('judge2'),
                'judge3' => $this->input->post('judge3'),
                'total' => $this->input->post('total')
            );
        $this->db->insert('mstabulation',$data);
        return TRUE;
    }


    function get_all_mrtab(){
        $q = $this->db->from('mrtabulation')->order_by('total', 'DESC')->get()->result();
        return $q;
    }

    function get_all_mstab(){
        $q = $this->db->from('mstabulation')->order_by('total', 'DESC')->get()->result();
        return $q;
    }

    function make_mrtop5(){
        $ids = $this->input->post('tab_id');
        $c = count($ids);
        if($c == 0){
            $ids = array($this->uri->segment(3));
        }
        $c = count($ids);
        for($i=0; $i < $c; $i++){
            $tab_id = $ids[$i];
            echo $tab_id;
            $this->db
                    ->where('tab_id',$tab_id)
                    ->insert('mrtop5');
        }

    }

    function make_mstop5(){
        $ids = $this->input->post('tab_id');
        $c = count($ids);
        if($c == 0){
            $ids = array($this->uri->segment(3));
        }
        $c = count($ids);
        for($i=0; $i < $c; $i++){
            $tab_id = $ids[$i];
            echo $tab_id;
            $this->db
                    ->where('tab_id',$tab_id)
                    ->insert('mstop5');
        }

    }

    function mrtabulation_recalculate($mrcan_no = 0)
    {
        if ($mrcan_no == 0) {
            $mrtabulations = $this->db->get('mrtabulation')->result();

            if ($mrtabulations) {
                foreach ($mrtabulations as $mrtabulation) {
                    $total = ($mrtabulation->judge1 + $mrtabulation->judge2 + $mrtabulation->judge3) / 3;
                    $data['total'] = round($total, 2);
                    $this->db->update('mrtabulation', $data, ['mrtab_id' => $mrtabulation->mrtab_id]);
                }
            }
        } else {
            $mr_tabulation = $this->db->where('mrcan_no', $mrcan_no)->get('mrtabulation')->row();

            $total = ($mr_tabulation->judge1 + $mr_tabulation->judge2 + $mr_tabulation->judge3) / 3;
            $data['total'] = round($total, 2);
            $this->db->update('mrtabulation', $data, ['mrcan_no' => $mrcan_no]);
        }
    }

    function mstabulation_recalculate($mrcan_no = 0)
    {
        if ($mrcan_no == 0) {
            $mstabulations = $this->db->get('mstabulation')->result();
            //var_dump($mstabulations);

            if ($mstabulations) {
                foreach ($mstabulations as $mstabulation) {
                    $total = ($mstabulation->judge1 + $mstabulation->judge2 + $mstabulation->judge3) / 3;
                    $data['total'] = round($total, 2);
                    $this->db->update('mstabulation', $data, ['mstab_id' => $mstabulation->mstab_id]);
                }
            }
        } else {
            $mr_tabulation = $this->db->where('mrcan_no', $mrcan_no)->get('mstabulation')->row();

            $total = ($mr_tabulation->judge1 + $mr_tabulation->judge2 + $mr_tabulation->judge3) / 3;
            $data['total'] = round($total, 2);
            $this->db->update('mstabulation', $data, ['mrcan_no' => $mrcan_no]);
        }
    }
}
?>