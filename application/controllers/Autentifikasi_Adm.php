<?php

class Autentifikasi_Adm extends CI_Controller
{

    public function index()
    {
        //jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
        if($this->session->userdata('email_adm')){
            redirect('home_adm');
        }

        $this->form_validation->set_rules('email_adm', 'Alamat Email', 'required|trim|valid_email', [
            'required' => 'Email Harus diisi!!',
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('password_adm', 'Password', 'required|trim', [
            'required' => 'Password Harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login_adm';
            $data['user'] = '';
            //kata 'login' merupakan nilai dari variabel judul dalam array $data dikirimkan ke view aute_header
            $this->load->view('templates/aute_header', $data);
            $this->load->view('autentifikasi_adm/login');
            $this->load->view('templates/aute_footer');
        } else {
            $this->_login_adm();
        }
    }

    private function _login_adm()
    {
        $email_adm = htmlspecialchars($this->input->post('email_adm', true));
        $password_adm = $this->input->post('password_adm', true);

        $user_adm = $this->ModelAdm->cekData(['email_adm' => $email_adm])->row_array();

        //jika usernya ada
        if ($user_adm) {
            //jika user_adm sudah aktif
            if ($user_adm['is_active_adm'] == 1) {
                //cek password
                if (password_verify($password_adm, $user_adm['password_adm'])) {
                    $data = [
                        'email_adm' => $user_adm['email_adm'],
                        'role_id_adm' => $user_adm['role_id_adm']
                    ];

                    $this->session->set_userdata($data);
                    redirect('home_adm');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                    redirect('autentifikasi_adm');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
                redirect('autentifikasi_adm');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('autentifikasi_adm');
        }
    }

    public function registrasi_adm()
    {
        if ($this->session->userdata('email_adm')) {
            redirect('user_adm');
        }
        //membuat rule untuk inputan nama_adm agar tidak boleh kosong dengan membuat pesan error dengan 
        //bahasa sendiri yaitu 'Nama Belum diisi'
        $this->form_validation->set_rules('nama_adm', 'Nama Lengkap', 'required', [
            'required' => 'Nama Belum diis!!'
        ]);
        //membuat rule untuk inputan email agar tidak boleh kosong, tidak ada spasi, format email harus valid
        //dan email belum pernah dipakai sama user lain dengan membuat pesan error dengan bahasa sendiri 
        //yaitu jika format email tidak benar maka pesannya 'Email Tidak Benar!!'. jika email belum diisi,
        //maka pesannya adalah 'Email Belum diisi', dan jika email yang diinput sudah dipakai user lain,
        //maka pesannya 'Email Sudah dipakai'
        $this->form_validation->set_rules('email_adm', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email Tidak Benar!!',
            'required' => 'Email Belum diisi!!',
            'is_unique' => 'Email Sudah Terdaftar!'
        ]);
        //membuat rule untuk inputan password agar tidak boleh kosong, tidak ada spasi, tidak boleh kurang dari
        //dari 3 digit, dan password harus sama dengan repeat password dengan membuat pesan error dengan  
        //bahasa sendiri yaitu jika password dan repeat password tidak diinput sama, maka pesannya
        //'Password Tidak Sama'. jika password diisi kurang dari 3 digit, maka pesannya adalah 
        //'Password Terlalu Pendek'.
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Sama!!',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
        //jika jida disubmit kemudian validasi form diatas tidak berjalan, maka akan tetap berada di
        //tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang 
        //diinput akan disimpan ke dalam tabel user
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'administrator Registration';
            $this->load->view('templates/aute_header', $data);
            $this->load->view('autentifikasi_adm/registrasi_adm');
            $this->load->view('templates/aute_footer');
        } else {
            $email_adm = $this->input->post('email_adm', true);
            $data = [
                'nama_adm' => htmlspecialchars($this->input->post('nama_adm', true)),
                'email_adm' => htmlspecialchars($email_adm),
                'image_adm' => 'default.jpg',
                'password_adm' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id_adm' => 2,
                'is_active_adm' => 1,
                'tanggal_input_adm' => time()
            ];

            $this->ModelAdm->simpanData($data); //menggunakan model

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun member anda sudah dibuat. Silahkan Aktivasi Akun anda</div>');
            redirect('autentifikasi_adm');
        }
    }


    public function logout_adm()
    {
        $this->session->unset_userdata('email_adm');
        $this->session->unset_userdata('role_id_adm');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('autentifikasi_adm');
    }

    public function blok_adm()
    {
        $this->load->view('autentifikasi_adm/blok');
    }

    public function gagal_adm()
    {
        $this->load->view('autentifikasi_adm/gagal');
    }
}
