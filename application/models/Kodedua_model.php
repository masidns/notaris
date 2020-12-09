<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kodedua_model extends CI_Model {

    public function getdata() 
    {
        $query = $this->db->query('SELECT * FROM kategorikbli ORDER BY idKategorikbli ASC');
        return $query->result();
    }

    public function select()
    {
        // $query = $this->db->query('SELECT * FROM kategorikbli ORDER BY idKategorikbli ASC');
        return $this->db->query("SELECT
        `kodedua`.*, `kategorikbli`.`subkategori`, `kategorikbli`.`ketkategori`,
        `kategorikbli`.`deskripsikategori`
      FROM
        `kodedua` LEFT JOIN
        `kategorikbli` ON `kodedua`.`idKategorikbli` = `kategorikbli`.`idKategorikbli`")->result();
        // return $query->result();
    }

    public function insert($params)
    {
        $result = $this->db->insert('kodedua', $params);
        return $result;
    }

    public function update($params, $id)
    {
        $this->db->where('idkodedua', $id);
        $result = $this->db->update('kodedua', $params);
        return $result;
    }

    public function delete($id)
    {
        $this->db->where('idkodedua', $id);
        $resul = $this->db->delete('kodedua');
    }

    public function selectbyid($id)
    {
        return $this->db->get_where('kodedua', ['idkodedua'=>$id])->result()[0];
    }

}

/* End of file Kodedua_model.php */
