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
        // load view admin/overview.php
		$data["barangs"] = $this->barang_model->getAll();
        $this->load->view("admin/overview", $data);
	}
}