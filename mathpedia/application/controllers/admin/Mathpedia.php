<?php

class Mathpedia extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {   
        $this->load->view("admin/_template/head.php");
        $this->load->view("admin/_template/navbar.php");
        $this->load->view("admin/v_home.php");
        $this->load->view("admin/_template/footer.php");
        $this->load->view("admin/_template/scrolltop.php");
        $this->load->view("admin/_template/modal.php");
        $this->load->view("admin/_template/js.php");
    }

    public function login()
    {
        $this->load->view("admin/v_login.php");
    }
}

?>