<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');

    class Admin extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_admin');
            $this->load->helper('url');
        }

        public function admin()
        {
            $data['admin'] = $this->M_admin->viewALL()->result();
            $this->load->view("admin/_template/head.php");
            $this->load->view("admin/_template/navbar.php");
            $this->load->view("admin/v_dta_admin", $data);
            $this->load->view("admin/_template/footer.php");
            $this->load->view("admin/_template/scrolltop.php");
            $this->load->view("admin/_template/modal.php");
            $this->load->view("admin/_template/js.php");
        }

        public function tbhadm()
        {
            $this->load->view("admin/_template/head.php");
            $this->load->view("admin/_template/navbar.php");
            $this->load->view("admin/v_tbhadm");
            $this->load->view("admin/_template/footer.php");
            $this->load->view("admin/_template/scrolltop.php");
            $this->load->view("admin/_template/modal.php");
            $this->load->view("admin/_template/js.php");
        }

        public function inputadm(){
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $jk = $this->input->post('jk');
            $hp = $this->input->post('hp');
            $alamat = $this->input->post('alamat');
            $uname = $this->input->post('uname');
            $pass = $this->input->post('pass');
            $hak = $this->input->post('hak');
            $foto = $_FILES['foto'];
            if($foto=''){

            }else{
                $config['upload_path'] = './upload/admin';
                $config['allowed_types'] = 'jpg|png';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){
                    echo "Gagal Upload"; 
                    die();
                }else{
                    $foto=$this->upload->data('file_name');
                }
            }
     
            $data = array(
                'id_adm' => $id,
                'nama_adm' => $nama,
                'jk_adm' => $jk,
                'no_hp' => $hp,
                'alamat_adm' => $alamat,
                'username_adm' => $uname,
                'password_adm' => $pass,
                'foto_adm' => $foto,
                'status' => $hak
                );
            $this->M_admin->input_adm($data,'admin');
            redirect('admin/Admin/admin');
        }

        public function ubhadm($id){
            $where = array('id_adm' => $id);
            $data['admin'] = $this->M_admin->ubh_adm($where,'admin')->result();
            $this->load->view("admin/_template/head.php");
            $this->load->view("admin/_template/navbar.php");
            $this->load->view("admin/v_uptadm",$data);
            $this->load->view("admin/_template/footer.php");
            $this->load->view("admin/_template/scrolltop.php");
            $this->load->view("admin/_template/modal.php");
            $this->load->view("admin/_template/js.php");
        }

        public function updateadm(){
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $jk = $this->input->post('jk');
            $hp = $this->input->post('hp');
            $alamat = $this->input->post('alamat');
            $uname = $this->input->post('uname');
            $foto = $this->input->post('foto');
            if($foto=''){

            }else{
                $config['upload_path'] = './upload/admin';
                $config['allowed_types'] = 'jpg|png';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){

                }else{
                    $foto=$this->upload->data('file_name');
                }
            }
        
            $data = array(
                'nama_adm' => $nama,
                'jk_adm' => $jk,
                'no_hp' => $hp,
                'alamat_adm' => $alamat,
                'username_adm' => $uname,
                'foto_adm' => $foto
            );
        
            $where = array(
                'id_adm' => $id
            );
            
            $this->M_admin->update_adm($where,$data,'admin');
            redirect('admin/Admin/admin');
        }

        public function hapusadm($id){
            $where = array('id_adm' => $id);
            $this->M_admin->delete_adm($where,'admin');
            redirect('admin/Admin/admin');
        }
    
    }
?>
