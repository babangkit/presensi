<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $useraktif = $this->session->userdata('username');
        if ($useraktif) {
            $data1['title'] = 'Halaman Admin';
            $data1['nav1'] = 'active';
            $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data3 = $this->session->set_flashdata('flash', $data2['user']['name']);

            $data2['menu'] = $this->db->get_where('desk', ['id' => 1])->row_array();

            if ($data2['user']['role_id'] == 1) {
                $this->load->view('templates/user_header', $data1);
                $this->load->view('templates/user_menu', $data2);
                $this->load->view('admin/index', $data2, $data3);
                $this->load->view('templates/user_footer');
            } else {
                redirect('user');
            }
        } else {
            redirect('auth');
        }
    }
}
