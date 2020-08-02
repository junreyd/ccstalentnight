<?php

class Tabulation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabulation_model');
    }

    public function mrtabulation_recalculate()
    {
        $mrcan_no = $this->input->post('mrcan_no');
        $this->Tabulation_model->mrtabulation_recalculate($mrcan_no);
    
        http_response_code(200);
        $response['status'] = 'ok';
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function mstabulation_recalculate()
    {

        $mscan_no = $this->input->post('mscan_no');
        $this->Tabulation_model->mstabulation_recalculate($mscan_no);
    
        http_response_code(200);
        $response['status'] = 'ok';
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
}
