<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function registration()
    {
        if ($this->input->post('submit')) {
            $this->M_auth->create();
            if ($this->db->affected_rows() > 0) { //apabila ada data yang dirubah 
                $this->session->set_flashdata('masg', '<p style="color:green">user Successfuly added !</p>');
            } else {
                $this->session->set_flashdata('masg', '<p style="color:red">user add failed !</p>');
            }
            redirect('auth/login'); //untuk mengembalikan ke kontroler
        }
        $this->load->view('auth/form_registration');
    }

    public function login()
    {
        if ($this->input->post('login') && $this->validation('login')) {
            $login = $this->M_auth->getuser($this->input->post('username'));
            if ($login != NULL) {
                if (password_verify($this->input->post('password'), $login->password)) {
                    $data = array(
                        /*
                        'name' => $this->input->post('name'),
                        'username' => $this->input->post('username'),
                        'email' => $this->input->post('email'),
                        'no_telp' => $this->input->post('no_telp'),
                        'usertype' => $this->input->post('usertype'),
                        'password' => password_hash($this->input->post('usertype'), PASSWORD_DEFAULT)
                        */
                        // Set pake $login
                        'id' => $login->id_user,
                        'name' => $login->name,
                        'username' => $login->username,
                        'email' => $login->email,
                        'no_telp' => $login->no_telp,
                        'usertype' => $login->usertype,
                        'photo' => $login->photo
                        
                    );
                    $this->session->set_userdata($data);
                    if($this->session->userdata('usertype')== "Kurir"){
                        redirect('admin/overview/kurir');
                    }else{
                        redirect('admin/overview');
                    }
                }
            }
            $this->session->set_flashdata('asg', '<p style="color: red">Invalid username or password !</p>');
        }
        $this->load->view('auth/form_login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function changephoto()
    {
        if (!$this->session->userdata('username')) redirect('auth/login'); //fillter login
        $data['error'] = ''; //untuk eror upload 
        if ($this->input->post('upload')) { //jika sukses upload
            if ($this->upload()) {
                $this->M_auth->changephoto($this->upload->data('file_name')); //ubah data foto di database
                $this->session->set_userdata('photo', $this->upload->data('file_name')); // update data session
                $this->session->set_flashdata('asg', '<p style="color:green">Photo succesfully changed ! <?p>');     //pedan sukses
            } else $data['error'] = $this->upload->display_errors(); // jika gagal upload
        }
        $this->load->view('auth/form_photo', $data);
    }

    private function upload()
    {
        $config['upload_path']          = './uploads/user/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '100';
        $config['max-width']            = '1024';
        $config['max_height']           = '768';

        $this->load->library('upload', $config);
        return $this->upload->do_upload('photo');
    }

    public function changepass()
    {
        if (!$this->session->userdata('username')) redirect('auth/login'); //fillter login
        if ($this->input->post('change') && $this->validation('change')) {
            $change = $this->M_auth->getuser($this->session->userdata('username'));
            if (password_verify($this->input->post('oldpassword'), $change->password)) {
                if ($this->M_auth->changepass())
                    $this->session->set_flashdata('masg', '<p style="color:red">Password succesfully changed !</p>');
                else
                    $this->session->set_flashdata('masg', '<p style="color:red">Change Password failed !</p>');
            } else {
                $this->session->set_flashdata('asg', '<p style="color:red">Wrong old password !</p>');
            }
        }
        $this->load->view('auth/form_password');
    }

    private function validation($type)
    {
        $this->load->library('form_validation');

        if ($type == 'login') {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
        } else {
            $this->form_validation->set_rules('oldpassword', 'Old Password', 'required');
            $this->form_validation->set_rules('newpassword', 'New Password', 'required');
        }
        if ($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }
    
}
