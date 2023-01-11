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

    public function terkirim()
    {
        $data["barangs"] = $this->barang_model->getByTerk();
        $this->load->view("admin/barang/list_terkirim", $data);
    }

    public function dikirim()
    {
        $data["barangs"] = $this->barang_model->getByDiper();
        $this->load->view("admin/barang/list_dikirim", $data);
    }

    public function add()
    {
        $product = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/barang/new_form");
    }

    public function assign($id)
    {
        $product = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["products"] = $this->barang_model->getById($id);
        $this->load->view("admin/barang/new_form", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/barang');
       
        $product = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/barang/edit_form", $data);
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();
        
        if ($this->barang_model->delete($id)) {
            redirect(site_url('admin/barang'));
        }
    }

    
}