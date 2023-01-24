<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $_table = "bajusales834";
    private $_table_baju = "baju834";
    private $_table_fee = "tb_biaya";
    private $_table_courier = "tb_kurir";

    private $_table_deliver = "tb_pengiriman";


    public function getAll()
    {
        $this->db->select('sale_id');
        $queryReadSave = $this->db->get($this->_table_deliver);

        $postIDs = $queryReadSave->result_array();
        
        if($queryReadSave->num_rows() > 0):
            $this->db->select('*');
            $this->db->from($this->_table);
            $this->db->join($this->_table_baju, 'baju834.baju_id_834 = bajusales834.bajuk_id_834');
            $this->db->where_not_in('sale_id_834', array_column($postIDs, 'sale_id'));
    
            $queryNewPost = $this->db->get()->result();
            return $queryNewPost;

        else:
            $this->db->select('*');
            $this->db->from($this->_table);
            $this->db->join($this->_table_baju, 'baju834.baju_id_834 = bajusales834.bajuk_id_834');
            $result =  $this->db->get()->result();    
            return $result;
        endif;
    }
    

    public function getByDikirim(){
        $this->db->select('*');
        $this->db->from($this->_table_deliver);
        $this->db->join($this->_table_courier, 'tb_kurir.id_kurir = tb_pengiriman.id_kurir');
        $this->db->where('tb_pengiriman.status_pengiriman ', "Dikirim");
        return $this->db->get()->result();
    }

    public function getByDiterima(){
        $this->db->select('*');
        $this->db->from($this->_table_deliver);
        $this->db->join($this->_table_courier, 'tb_kurir.id_kurir = tb_pengiriman.id_kurir');
        $this->db->where('status_pengiriman', "Terkirim");
        return $this->db->get()->result();
    }

    public function getByKurir(){
        $this->db->select('*');
        $this->db->from($this->_table_deliver);
        $this->db->join($this->_table_courier, 'tb_kurir.id_kurir = tb_pengiriman.id_kurir');
        $this->db->where('tb_pengiriman.id_kurir', $this->session->userdata('id'));
        return $this->db->get()->result();
    }


    

}