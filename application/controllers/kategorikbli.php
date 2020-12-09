<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kategorikbli extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('Kategorikbli_model');
    }
    

    public function index()
    {
        $data['kategorikbli']= $this->Kategorikbli_model->select();
        // $data['title']="KBLI";
        $data['view']='kategorikbli/index';
        $this->load->view('dasbord', $data);
    }

    public function tambah()
    {
        if(count($_POST)>0){
            $data = [
                'subkategori'=>$this->input->post('subkategori'),
                'deskripsikategori'=>$this->input->post('deskripsikategori'),
                'ketkategori'=>$this->input->post('ketkategori')
            ];
            $this->Kategorikbli_model->insert($data);
            redirect('kategorikbli','refresh');
        }else{
            $data['view']='kategorikbli/add';
            $this->load->view('dasbord', $data);
        }
    }

    public function update($id)
    {
        if(count($_POST)>0)
        {
            $data = [
                'subkategori'=>$this->input->post('subkategori'),
                'deskripsikategori'=>$this->input->post('deskripsikategori'),
                'ketkategori'=>$this->input->post('ketkategori')
            ];
            $this->Kategorikbli_model->update($data, $id);
            redirect('kategorikbli','refresh');
        }else{
            # code...
            $data['kategorikbli'] = $this->Kategorikbli_model->selectbyid($id);
            $data['view']='kategorikbli/edit';
            $this->load->view('dasbord', $data); 
        }
    }

    public function hapus($id)
    {
        $this->Kategorikbli_model->delete($id);
        redirect('kategorikbli','refresh');
    }

}

/* End of file Kategorikbli.php */
