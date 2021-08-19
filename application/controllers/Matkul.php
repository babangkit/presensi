<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{

    function __construct(){ 
        parent::__construct(); 
        $this->load->library('encrypt'); 
    } 

    public function index()
    {
        $useraktif = $this->session->userdata('username');
        if ($useraktif) {
            $data1['title'] = 'Presensi Asisten';
            $data1['nav1'] = '';
            $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            
$link = "BksCEAF2V2tTJRSQAsJBR1YTgxIHb87VXFaFSVE6tsa
2V2tTJwEZCQFdTlB8bZyBxRsJBR1YTgxIVXFaVQFSVE8HyA
8aHB5b8DSFNdsf7sJBR1YTg78hbHBdsf6VGUSVE8HyA";

            $link = explode("\n", $link);

            $data2['link'] = $link[mt_rand(0, count($link)-1)];
            
            
            $this->load->model('Amodel');
            $data2['matkul'] = $this->Amodel->getMatkul();

            $this->load->view('templates/user_header', $data1);
            $this->load->view('templates/user_menu', $data2);
            $this->load->view('matkul/index', $data2);
            $this->load->view('templates/user_footer');

            

        } else {
            redirect('auth');
        }
    }

    public function presensi($id)
    {

        $useraktif = $this->session->userdata('username');
        if ($useraktif) {

            
            $data1['title'] = 'Presensi Asisten';
            $data1['nav1'] = '';
            $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            if( $data2['user']['koor'] == 1){

                $id1 = $this->encrypt->decode($id);

                $this->load->model('Amodel');

                $data2['matkul'] = $this->Amodel->getNameMatkul($id1);
                $data2['presensi'] = $this->Amodel->getPresensi($id1);
                $data2['id'] = $this->Amodel->getIdMatkul($id1);

                $this->load->view('templates/user_header', $data1);
                $this->load->view('templates/user_menu', $data2);
                $this->load->view('matkul/absensi', $data2);
                $this->load->view('templates/user_footer');

               

            }else{

                $this->load->view('templates/user_header', $data1);
                $this->load->view('templates/user_menu', $data2);
                $this->load->view('matkul/absensikos', $data2);
                $this->load->view('templates/user_footer');
            }
           

        } else {
            redirect('auth');
        }
        
    }

    public function edit($id)
    {
        
        $useraktif = $this->session->userdata('username');
        if ($useraktif) {

            
            $data1['title'] = 'Presensi Asisten';
            $data1['nav1'] = '';
            $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            if( $data2['user']['koor'] == 1){
                
                $id1 = $this->encrypt->decode($id);

                $this->load->model('Amodel');

                $data2['data'] = $this->Amodel->getData($id1);
        
                $this->load->view('templates/user_header', $data1);
                $this->load->view('templates/user_menu', $data2);
                $this->load->view('matkul/edit', $data2);
                $this->load->view('templates/user_footer');

               

            }else{

                $this->load->view('templates/user_header', $data1);
                $this->load->view('templates/user_menu', $data2);
                $this->load->view('matkul/edit', $data2);
                $this->load->view('templates/user_footer');
            }

            

        } else {
            redirect('auth');
        }
        
    }

    public function kosong()
    {
        $data1['title'] = 'Presensi Asisten';
        $data1['nav1'] = '';
        $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/user_header', $data1);
        $this->load->view('templates/user_menu', $data2);
        $this->load->view('matkul/absensikos', $data2);
        $this->load->view('templates/user_footer');

    }
}
