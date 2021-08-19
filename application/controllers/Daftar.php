<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

    public function index()
    {
        $useraktif = $this->session->userdata('username');
        if ($useraktif) {
            $data1['title'] = 'Daftar Matakuliah';
            $data1['nav1'] = '';
            $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

            $this->load->model('Amodel');

            $data2['matkul'] = $this->Amodel->getAllMatkul();

            $this->form_validation->set_rules('matkul', 'Matkul', 'required' , [
                'required' => 'Matkul Harus di isi!'
            ]);
            $this->form_validation->set_rules('prodi', 'Prodi', 'required' , [
                'required' => 'Prodi Harus di isi!'
            ]);
            $this->form_validation->set_rules('th', 'Th', 'required' , [
                'required' => 'Tahun Harus di isi!'
            ]);

            if($this->form_validation->run() == false){
                if ($data2['user']['role_id'] == 1) {
                    $this->load->view('templates/user_header', $data1);
                    $this->load->view('templates/user_menu', $data2);
                    $this->load->view('list/index', $data2);
                    $this->load->view('templates/user_footer');
                } else {
                    redirect('user');
                }
                
            }else{
                $data = [
                    'nama_matkul' => $this->input->post('matkul'),
                    'prodi' => $this->input->post('prodi'),
                    'tahun' => $this->input->post('th')

                ];

                $this->db->insert('matkul', $data);
                $this->session->set_flashdata("message", "<script type='text/javascript'>
                setTimeout(function () {  
                 swal({
                  title: 'Berhasil!',
                  text:  'Matakuliah berhasil ditambahkan!',
                  icon: 'success',
                  timer: 5000,
                  showConfirmButton: true
                 });  
                },10);
               </script>");
                redirect('daftar');
            }

        } else {
            redirect('auth');
        }
    }

    public function del()
    {
                $id = $this->input->post('id');
                $this->db->where('id',$id);
                $this->db->delete('matkul');

                $this->session->set_flashdata("message", "<script type='text/javascript'>
                setTimeout(function () {  
                 swal({
                  title: 'Berhasil!',
                  text:  'Matakuliah berhasil dihapus!',
                  icon: 'success',
                  timer: 5000,
                  showConfirmButton: true
                 });  
                },10);
               </script>");
                redirect('daftar');
   
    }
}
