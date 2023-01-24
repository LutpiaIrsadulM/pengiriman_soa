<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
    public function create()
    {
        $data = array(
            'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telp'),
			'usertype' => $this->input->post('usertype'),
            'password' => password_hash($this->input->post('usertype'), PASSWORD_DEFAULT)
        );
        $this->db->insert('tb_user', $data); // insert pengganti INSERT INTO 
    }

    public function changephoto($photo)
    {
        if ($this->session->userdata('photo') !== 'default.png') //
            unlink('./uploads/user/' . $this->session->userdata('photo')); //unlik untuk menghapus fto yang lama

        $this->db->set('photo', $photo);
        $this->db->where('username', $this->session->userdata('username'));
        return $this->db->update('tb_user');
    }

    public function getuser($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('tb_user')->row();
    }

    public function changepass()
    {
        $this->db->set('password', password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT));
        $this->db->where('username', $this->session->userdata('username'));
        return $this->db->update('tb_user');
    }


}
