<?php namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model{

	public function cek_login($username, $password){
		return $this->db->table('user')
		->where(array('id_user'=>$username, 'password'=>$password))
		->get()->getRowArray();
	}
	public function cek_login_admin($username, $password){
		return $this->db->table('admin')
		->where(array('id_user'=>$username, 'password'=>$password))
		->get()->getRowArray();
	}
}