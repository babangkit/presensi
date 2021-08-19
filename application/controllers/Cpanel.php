<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cpanel extends CI_Controller
{

    public function index()
    {
        $useraktif = $this->session->userdata('username');
        if ($useraktif) {
            $data1['title'] = 'Control Panel';
            $data1['nav1'] = '';
            $data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data3 = $this->session->set_flashdata('flash', $data2['user']['name']);

            $mM = "SELECT `id`, `is_active`, `title`
                                FROM `user_sub_menu`
                                WHERE `id` IN ('4', '9');
                ";

            $mn = "SELECT `id`, `is_active`, `title`
                        FROM `user_sub_menu`
                        WHERE `id` IN ('1', '3', '5');
             ";
                
            $qq =   "SELECT `user_menu`.`menu`, `user_sub_menu`.`id`, `user_sub_menu`.`title`, `user_sub_menu`.`is_active`
                    FROM `user_menu` JOIN `user_sub_menu`
                    ON `user_menu`.`id` = `user_sub_menu`.`menu_id`
                    WHERE `user_sub_menu`.`id` != 10
                    ORDER BY `user_sub_menu`.`menu_id` ASC
            ";

            $data2['cpanel1'] = $this->db->query($qq)->result_array();

            $data2['menu'] = $this->db->get_where('desk', ['id' => 1])->row_array();
            
            $this->form_validation->set_rules('idu', 'IdMenu', 'required' , [
                'required' => 'Menu Harus di isi!'
            ]);
            $this->form_validation->set_rules('is_active', 'Aktif', 'required' , [
                'required' => 'Menu Harus di isi!'
            ]);
            


            if($this->form_validation->run() == false){

                if ($data2['user']['role_id'] == 1) {
                    $this->load->view('templates/user_header', $data1);
                    $this->load->view('templates/user_menu', $data2);
                    $this->load->view('cpanel/index', $data2, $data3);
                    $this->load->view('templates/user_footer');
                } else {
                    redirect('user');
                }

            }else{
                
                    $aktif =  $this->input->post('is_active');
                    $where = $this->input->post('idu');
                    $this->db->set('is_active', $aktif);
                    $this->db->where('id', $where);
                    $this->db->update('user_sub_menu');
                    $this->session->set_flashdata("message", "<script type='text/javascript'>
                    setTimeout(function () {  
                     swal({
                      title: 'Berhasil!',
                      text:  'Sub Menu berhasil di update! ',
                      icon: 'success',
                      timer: 5000,
                      showConfirmButton: true
                     });  
                    },10);
                   </script>");
                    redirect('cpanel');

            }
            

        } else {
            redirect('auth');
        }
    }

}
