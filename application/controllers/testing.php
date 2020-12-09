<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('Testing_model');
    }
    

    public function index()
    {
        $data['datakategori'] = $this->Testing_model->getdata();
        $data['view']='kodedua/add';
        $this->load->view('dasbord', $data);
    }

}

/* End of file Testing.php */
