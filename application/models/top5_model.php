<?php

class Top5_model extends CI_Model {

    function get_all_mrtop5(){
        $q = $this->db           
            ->select('mrtabulation.mrcan_no,mrtabulation.mrcan_name,mrtabulation.mrtab_id,mrtabulation.total')
            ->select('mrcandidate.mrprofile')
            ->from('mrtabulation')
            ->join('mrcandidate', 'mrcandidate.mrcan_no = mrtabulation.mrcan_no')
            ->order_by('total', 'DESC')
            ->limit(5)
            ->get()
            ->result();
        return $q;
    }

    function get_all_mstop5(){
        $q = $this->db            
            ->select('mstabulation.mscan_no,mstabulation.mscan_name,mstabulation.mstab_id,mstabulation.total')
            ->select('mscandidate.msprofile')
            ->from('mstabulation')
            ->join('mscandidate', 'mscandidate.mscan_no = mstabulation.mscan_no')
            ->order_by('total', 'DESC')
            ->limit(5)
            ->get()
            ->result();
        return $q;
    }
}
