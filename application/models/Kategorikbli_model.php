<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategorikbli_model extends CI_Model {

    public function select()
    {
        return $this->db->get('kategorikbli')->result();
    }

    public function insert($params)
    {
        $result = $this->db->insert('kategorikbli', $params);
        return $result;
    }

    public function update($params, $id)
    {
        $this->db->where('idKategorikbli', $id);
        $result = $this->db->update('kategorikbli', $params);
        return $result;
    }

    public function delete($id  )
    {
        $this->db->where('idKategorikbli', $id);
        $result = $this->db->delete('kategorikbli');
    }

    public function selectbyid($id)
    {
        return $this->db->get_where('kategorikbli', ['idKategorikbli'=>$id])->result()[0];
    }
    
}

/* End of file Kategorikbli_model.php */
