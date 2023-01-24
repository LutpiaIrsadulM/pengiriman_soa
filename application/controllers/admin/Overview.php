<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("barang_model");
		$this->load->model("pengiriman_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
		$product = $this->barang_model;
		$data["customers"] = $product->getAll();
        $this->load->view("admin/overview", $data);
	}

	public function kurir()
	{
		if($this->input->post('submit')) {
			$this->pengiriman_model->update();
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">Data Ongkir Berhasil Diupdate !');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">Data Ongkir Gagal Diupdate !');
			}
			$data["barangs"] = $this->barang_model->getByKurir();
	        $this->load->view("admin/overview_kurir", $data);
		}
			$data["barangs"] = $this->barang_model->getByKurir();
	        $this->load->view("admin/overview_kurir", $data);
	}

}
