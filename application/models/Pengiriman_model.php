<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengiriman_model extends CI_Model
{
    private $_table = "bajusales834";
    private $_table_baju = "baju834";
    private $_table_fee = "tb_biaya";
    private $_table_courier = "tb_kurir";

    private $_table_deliver = "tb_pengiriman";

    public $sale_id;
    public $id_pengiriman;
    public $id_kurir;
    public $nama_customer;
    public $phone;
    public $nama_barang;
    public $alamat_pengiriman;
    public $harga_barang;
    public $ongkos_kirim;
    public $tanggal_kirim;
    public $tanggal_sampai = "";
    public $status_pengiriman = "Dikirim";

    public function rules()
    {
        return [
            ['field' => 'nama_customer',
            'label' => 'nama_customer',
            'rules' => 'required'],
    
            ['field' => 'nama_barang',
            'label' => 'nama_barang',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'harga',
            'rules' => 'required'],

            ['field' => 'ongkos',
            'label' => 'ongkos',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required']
        ];
    }

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
    

    public function getById($id)
    {
        $this->db->select('*');
            $this->db->from($this->_table);
            $this->db->join($this->_table_baju, 'baju834.baju_id_834 = bajusales834.bajuk_id_834');
            $this->db->where('sale_id_834', $id);
        return $this->db->get()->row();
    }

    public function getFees($id)
    {
        $fees = $this->db->get($this->_table_fee)->result();
        foreach ($fees as $fee):
            $this->db->select('*');
            $this->db->from($this->_table);
            $this->db->like('customer_address_834', $fee->kabupaten, 'both');
            $this->db->where('sale_id_834 =', $id);
            $result = $this->db->get()->row();
            if($result != null) return $fee;
        endforeach;
    }

    public function getCourier()
    {
        return $this->db->get($this->_table_courier)->result();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->id_pengiriman = uniqid();
        $this->sale_id = $post["sale_id"];
        $this->id_kurir = $post["id_kurir"];
        $this->nama_customer = $post["nama_customer"];
        $this->phone = $post["phone"];
        $this->nama_barang = $post["nama_barang"];
        $this->alamat_pengiriman = $post["alamat"];
        $this->harga_barang = $post["harga"];
        $this->ongkos_kirim = $post["ongkos"];
        $this->tanggal_kirim = $post["tkirim"];
        $this->db->insert($this->_table_deliver, $this);
    }


    // =========================================
    // fungsi edit jang status
    public function update()
    {
        $post = $this->input->post();
        $id = $this->input->post('id_pengiriman');
    $data = array (
        'sale_id' => $post["sale_id"],
        'id_kurir' => $post["id_kurir"],
        'nama_customer' => $post["nama_customer"],
        'phone' => $post["phone"],
        'nama_barang' => $post["nama_barang"],
        'alamat_pengiriman' => $post["alamat"],
        'harga_barang' => $post["harga"],
        'ongkos_kirim' => $post["ongkos"],
        'tanggal_kirim' => $post["tkirim"],
        'tanggal_sampai' => date('Y-m-d H:i:s'),
        'status_pengiriman' => "Terkirim"
        );
    $this->db->where('id_pengiriman',$id);
    $this->db->update('tb_pengiriman',$data);
    }

}