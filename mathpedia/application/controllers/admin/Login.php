<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');

    class Login extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('M_login');
        }

        // fungsi yang akan dijalankan pertama kali dan dijalankan otomatis
        function index(){
            // berikut adalah baris kode yang berfungsi untuk menampilkan v_login
            $this->load->view('admin/v_login');
        }
        
        function aksi_login(){
            $data = $this->input->post();
            $username_adm = $data['username_adm'];
            $password_adm = $data['password_adm'];
            $cek = $this->M_login->cek_login($username_adm,$password_adm);
            if(!empty($cek)){
                foreach ($cek as $c)
                $data_session = array(
                    'id_adm' => $c->id_adm,
                    'username_adm' => $c->username_adm,
                    'foto_adm' => $c->foto_adm,
                    'status' => "login"
                    );
                // menambahkan sebuah session userdata berisi array diatas
                $this->session->set_userdata($data_session);
                
                redirect('admin/Mathpedia/index');
    
            }else{
                echo "Username dan password salah !";
            }
        }
        
        function logout(){
            //  baris kode yang akan menghapus session yang ada
            $this->session->sess_destroy();
            //  baris kode yang mengarahkan pengguna ke controller login
            redirect(base_url('admin/Mathpedia/index'));
        }

        // public function admin()
        // {
        //     $this->load->view("admin/v_login");
        // }

        // public function log()
        // {
        //     $post = $this->input->post(null, TRUE);
        //     if(isset($post['login'])){
        //         $this->load->model('M_login');
        //         $query->this->M_login->login($post);
        //         if($query->num_rows() > 0){
        //             $row = $query->row();
        //             $params = array(
        //                 'id_adm'=>$row->id_adm,
        //                 'status'=>$row->status
        //             );
        //             $this->session->set_userdata($params);
        //             redirect('admin/Mathpedia/index');
        //         } else {
        //             echo "gagal";
        //         }

        //     }
        // }
    }
?>