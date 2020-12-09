<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing_model extends CI_Model {

    public function getdata() 
    {
        $query = $this->db->query('SELECT * FROM kategorikbli ORDER BY idKategorikbli ASC');
        return $query->result();
    }

}

/* End of file Testing_model.php */
