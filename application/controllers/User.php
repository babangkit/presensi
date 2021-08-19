<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $useraktif = $this->session->userdata('username');
        if ($useraktif) {
            $data1['title'] = 'Home';
            $data1['nav1'] = 'active';
            $data1['nav2'] = '';
            $data1['nav3'] = '';
            $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data3 = $this->session->set_flashdata('flash', $data2['user']['name']);

            $data2['menu'] = $this->db->get_where('desk', ['id' => 1])->row_array();
            
            $this->load->view('templates/user_header', $data1);
            $this->load->view('templates/user_menu', $data2);
            $this->load->view('user/index', $data2, $data3);
            $this->load->view('templates/user_footer');
        } else {
            $this->session->set_flashdata('message', "<script>
                    
            $.notify({
                icon: 'far fa-tired',
                title: 'Warning!!',
                message: 'Silahkan login terlebih dahulu!',
            }, {
                type: 'warning',
                placement: {
                    from: 'top',
                    align: 'right'
                },
                time: 1000,
            });
        </script>");
            redirect('auth');
        }
    }
}
