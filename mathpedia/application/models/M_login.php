<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');

    class M_login extends CI_Model {
        function cek_login($username_adm, $password_adm){		 
            $this->db->select('id_adm,username_adm,foto_adm');
            $this->db->from('admin');
            $this->db->where('username_adm', $username_adm);
            $this->db->where('password_adm', $password_adm);
            $this->db->limit(1);
            $query = $this->db->get();
            return $query->result();
        }
        // public function login($post)
        // {
        //  $this->db->select('*');Login
        //  $this->db->from('user');
        //  $this->db->where('username_adm', $post['usernaem']);
        //  $this->db->where('username_adm', $post['password']);
        //  $query = $this->db->get();
        //  return $query;
        // }
    }
?>