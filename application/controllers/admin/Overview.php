<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("barang_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
		$product = $this->barang_model;
		$data["customers"] = $product->getAll();
        $this->load->view("admin/overview", $data);
	}
}
