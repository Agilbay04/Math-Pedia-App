<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');

    class Lihat extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_rumus');
            $this->load->helper('url');
        }

        public function rms($id){
            $where = array('id_rms' => $id);
            $data['rumus_mm'] = $this->M_rumus->ubh_rms($where,'rumus_mm')->result();
            $this->load->view("admin/_template/head.php");
            $this->load->view("admin/_template/navbar.php");
            $this->load->view("admin/v_lihat", $data);
            $this->load->view("admin/_template/footer.php");
            $this->load->view("admin/_template/scrolltop.php");
            $this->load->view("admin/_template/modal.php");
            $this->load->view("admin/_template/js.php");
        }
    }
?>