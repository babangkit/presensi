<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $useraktif = $this->session->userdata('username');
        $roleaktif = $this->session->userdata('role_id');
        if ($useraktif) {
            if ($roleaktif == 1) {
                redirect('admin');
            } else {
                redirect('user');
            }
        } else {
            $this->form_validation->set_rules('username', 'Username', 'trim|required', [
                'required' => '*Username wajib diisi!'
            ]);
            $this->form_validation->set_rules('password', 'Password', 'trim|required', [
                'required' => '*Password wajib diisi!'
            ]);

            if ($this->form_validation->run() == false) {

                $data['title'] = 'Halaman Login';
                $this->load->view('templates/header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/footer');
            } else {
                $this->_login();
            }
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        if ($user) {
            if ($user['is_active'] == 1) {

                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id'],
                    ];

                    $this->session->set_userdata($data);

                    if($user['profile'] == 1){

                        if ($user['role_id'] == 1) {
                            $this->session->set_flashdata('notif', '
                                        <script src="assets/js/core/jquery.3.2.1.min.js"></script>
                                        <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
                                        <script src="assets/js/notif.js"></script>                      
                            ');
                            redirect('admin');
                        } else {
                            $this->session->set_flashdata(
                                'notif',
                                '
                                        <script src="assets/js/core/jquery.3.2.1.min.js"></script>
                                        <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
                                        <script src="assets/js/notif.js"></script>  
                            '
                            );
                            redirect('user');
                        }
                    }else{
                        redirect('profile/edit');
                    }
                } else {
                    $this->session->set_flashdata('message', "<script>
                    
                    $.notify({
                        icon: 'far fa-tired',
                        title: 'Error ',
                        message: 'Password salah!',
                    }, {
                        type: 'danger',
                        placement: {
                            from: 'top',
                            align: 'right'
                        },
                        time: 1000,
                    });
                </script>");
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', "<script>
                    
                $.notify({
                    icon: 'far fa-tired',
                    title: 'Warning!!',
                    message: 'Username belum teraktivasi!',
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
        } else {
            $this->session->set_flashdata('message', "<script>
                    
            $.notify({
                icon: 'far fa-times-circle',
                title: 'Error!!',
                message: 'User tidak ditemukan!',
            }, {
                type: 'danger',
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

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => '*Nama wajib diisi!',
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'required' => '*Username wajib diisi!',
            'is_unique' => '*Username telah terdaftar!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => '*Email wajib diisi!',
            'valid_email' => '*Email tidak sesuai!',
            'is_unique' => '*Email telah terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'required' => '*Password wajib diisi!',
            'min_length' => '*Password Terlalu Pendek!',
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Registrasi';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/footer');
        } else {
            $data = [

                'username' => htmlspecialchars($this->input->post('username', true)),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()


            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', "<script>
                    
            $.notify({
                icon: 'far fa-laugh-wink',
                title: 'Success!!',
                message: 'Pendaftaran berhasil, silahkan log in!'
            }, {
                type: 'success',
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

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', "<script>
                    
        $.notify({
            icon: 'far fa-laugh-beam',
            title: 'Success!!',
            message: 'Berhasil Logout',
        }, {
            type: 'success',
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