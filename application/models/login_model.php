<?php
class Login_model extends CI_Model{
    //cek nip dan password dosen
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE id_admin='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_pengguna($username,$password){
        $query=$this->db->query("SELECT * FROM pengguna WHERE nip='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
 
}