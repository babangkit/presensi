<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management extends CI_Controller
{

    public function index()
    {
        $useraktif = $this->session->userdata('username');
        if ($useraktif) {
            $data1['title'] = 'Menu Management';
            $data1['nav1'] = '';
            $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data3 = $this->session->set_flashdata('flash', $data2['user']['name']);

            $data2['menu'] = $this->db->get('user_menu')->result_array();

            $this->form_validation->set_rules('menu', 'Menu', 'required' , [
                'required' => 'Nama Harus di isi!'
            ]);

            if($this->form_validation->run() == false){
                if ($data2['user']['role_id'] == 1) {
                    $this->load->view('templates/user_header', $data1);
                    $this->load->view('templates/user_menu', $data2);
                    $this->load->view('management/index', $data2, $data3);
                    $this->load->view('templates/user_footer');
                } else {
                    redirect('user');
                }

            }else{
                $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil di tambahkan!</div>');
                redirect('management');
            }

        } else {
            redirect('auth');
        }
    }

    public function submenu()
    {
        $useraktif = $this->session->userdata('username');
        if ($useraktif) {
            $data1['title'] = 'Submenu Management';
            $data1['nav1'] = '';
            $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data3 = $this->session->set_flashdata('flash', $data2['user']['name']);
            $this->load->model('Menu_model', 'menu');

            $data2['subMenu'] = $this->menu->getSubMenu();
            $data2['menu'] = $this->db->get('user_menu')->result_array();

            $this->form_validation->set_rules('title', 'Title', 'required' , [
                'required' => 'Title Harus di isi!'
            ]);
            $this->form_validation->set_rules('menu_id', 'Menu', 'required' , [
                'required' => 'Menu Harus di isi!'
            ]);
            $this->form_validation->set_rules('url', 'Url', 'required' , [
                'required' => 'Url Harus di isi!'
            ]);
            $this->form_validation->set_rules('icon', 'Icon', 'required' , [
                'required' => 'Icon Harus di isi!'
            ]);

            if($this->form_validation->run() == false){
                if ($data2['user']['role_id'] == 1) {
                    $this->load->view('templates/user_header', $data1);
                    $this->load->view('templates/user_menu', $data2);
                    $this->load->view('management/submenu', $data2, $data3);
                    $this->load->view('templates/user_footer');
                } else {
                    redirect('user');
                }
            }else{
                $data = [
                    'title' => $this->input->post('title'),
                    'menu_id' => $this->input->post('menu_id'),
                    'url' => $this->input->post('url'),
                    'icon' => $this->input->post('icon'),
                    'is_active' => $this->input->post('is_active')

                ];

                $this->db->insert('user_sub_menu', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub Menu berhasil di tambahkan!</div>');
                redirect('management/submenu');
            }
        }
    }

}
