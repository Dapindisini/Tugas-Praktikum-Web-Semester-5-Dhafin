<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->lihatData();
        //echo $data:
        $this->load->view('mahasiswa_view', $data);    
    }

    public function mhs_result()
    {
        $data['result'] = $this->Mahasiswa_model->metodeResult();
        //echo $data;
        $this->load->view('result_view', $data);   
    }

    public function mhs_resultArray()
    {
        $data['resultarray'] = $this->Mahasiswa_model->metodeResultArray();
        //echo $data;
        $this->load->view('resultarray_view', $data);   
    }

    public function mhs_rowArray()
    {
        $data['rowarray'] = $this->Mahasiswa_model->metodeRowArray();
        //echo $data;
        $this->load->view('rowarray_view', $data);   
    }
        
}
