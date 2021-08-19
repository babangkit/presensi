<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function index()
    {
        $useraktif = $this->session->userdata('username');
        if ($useraktif) {
            $data1['title'] = 'Profile';
            $data1['nav1'] = '';
            $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data3 = $this->session->set_flashdata('flash', $data2['user']['name']);

            $this->load->view('templates/user_header', $data1);
            $this->load->view('templates/user_menu', $data2);
            $this->load->view('profile/index', $data2, $data3);
            $this->load->view('templates/user_footer');
        } else {
            redirect('auth');
        }
    }

    public function edit()
    {
        $useraktif = $this->session->userdata('username');
        if ($useraktif) {
            $data1['title'] = 'Edit Profile';
            $data1['nav1'] = '';
            $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data3 = $this->session->set_flashdata('flash', $data2['user']['name']);

            $this->load->view('templates/user_header', $data1);
            $this->load->view('templates/user_menu', $data2);
            $this->load->view('profile/edit', $data2, $data3);
            $this->load->view('templates/user_footer');
        } else {
            redirect('auth');
        }
    }
}
