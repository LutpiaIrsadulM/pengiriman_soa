<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pengiriman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barang_model");
        $this->load->model("pengiriman_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["barangs"] = $this->barang_model->getAll();
        $this->load->view("admin/barang/list", $data);
    }

    public function Diterima()
    {
        $data["barangs"] = $this->barang_model->getByDiterima();
        $this->load->view("admin/barang/list_terkirim", $data);
    }

    public function dikirim()
    {
        $data["barangs"] = $this->barang_model->getByDikirim();
        $this->load->view("admin/barang/list_dikirim", $data);
    }

    public function add()
    {
        $product = $this->pengiriman_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/overview/');
            
        }

        $this->load->view("admin/overview");
    }

    
    public function assign($id)
    {
        $data["products"] = $this->pengiriman_model->getById($id);
        $data["fees"] = $this->pengiriman_model->getFees($id);
        $data["couriers"] = $this->pengiriman_model->getCourier();
        $this->load->view("admin/barang/new_form", $data);
    }
    
}