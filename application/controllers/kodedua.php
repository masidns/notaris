<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kodedua extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('Kodedua_model');
    }
    

    public function index()
    {
        $data['idKategorikbli']= $this->Kodedua_model->getdata();
        $data['kodedua']= $this->Kodedua_model->select();
        $data['view']='kodedua/index';
        $this->load->view('dasbord', $data);
    }
    
    public function tambah()
    {
        if(count($_POST)>0)
        {
            $data = [
                'nokodedua'=>$this->input->post('nokodedua'),
                'namakodedua'=>$this->input->post('namakodedua'),
                'ketkodedua'=>$this->input->post('ketkodedua'),
                'idKategorikbli'=>$this->input->post('idKategorikbli')
            ];
            $this->Kodedua_model->insert($data);
            redirect('kodedua','refresh');
        }else{
            $data['idKategorikbli']= $this->Kodedua_model->getdata();
            $data['view']='kodedua/add';
            $this->load->view('dasbord', $data);
        }
    }

    public function update($id)
    {
        if(count($_POST)>0)
        {
            $data = [
                'nokodedua'=>$this->input->post('nokodedua'),
                'namakodedua'=>$this->input->post('namakodedua'),
                'ketkodedua'=>$this->input->post('ketkodedua'),
                'idKategorikbli'=>$this->input->post('idKategorikbli')
            ];
            $this->Kodedua_model->update($data, $id);
            redirect('kodedua','refresh');
        }else{
            $data['idKategorikbli']= $this->Kodedua_model->getdata($id);
            $data['kodedua']=$this->Kodedua_model->selectbyid($id);
            $data['view']='kodedua/edit';
            $this->load->view('dasbord', $data);
        }
    }

    public function hapus($id)
    {
        $this->Kodedua_model->delete($id);
        redirect('kodedua','refresh');
    }

}

/* End of file Kodedua.php */
