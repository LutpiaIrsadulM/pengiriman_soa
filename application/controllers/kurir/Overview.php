<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("Kurir_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
		$kurir = $this->Kurir_model;
		$data["kurirs"] = $kurir->getAll();
        $this->load->view("kurir/overview", $data);
	}
}
