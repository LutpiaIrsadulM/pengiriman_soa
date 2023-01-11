<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $_table = "bajusales834";
    private $_table_baju = "baju834";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getAllBaju()
    {
        return $this->db->get($this->_table_baju)->result();
    }

}