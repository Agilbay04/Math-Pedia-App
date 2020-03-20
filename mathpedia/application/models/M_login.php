<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');

    class M_login extends CI_Model {
        function cek_login($table,$where){		
            return $this->db->get_where($table,$where);
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