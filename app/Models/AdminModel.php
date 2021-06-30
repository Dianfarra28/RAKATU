<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model{
	protected $table= 'admin';
	protected $allowedFields = ['id_user','email','namadepan','namablkg','password','jeniskelamin','password','foto'];
	protected $beforeInsert = ['beforeInsert'];
	protected $beforeUpdate = ['beforeUpdate'];


	protected function beforeInsert (array $data){
		$data = $this->passwordHash($data);
		return $data;
	} 

	protected function beforeUpdate(array $data){
		$data = $this->passwordHash($data);
		return $data;
	}
	protected function passwordHash(array $data){
		if(!isset($data['data']['password']))
			$data['data']['password'] = password_hash($data['data']['password']. PASSWORD_DEFAULT);
		return $data;

	}
	public function getDataAdmin($id = false){
		if($id === false){
			return $this->table('admin')
						->get()
						->getResultArray();
		}
		else{
			return $this->table('admin')
						->where('id_admin',$id)
						->get()
						->getRowArray();
		}
	}
	public function update_data($newdata,$id){
    	return $this->db->table($this->table)->update($newdata,$id);
	} 
}
// } 
// protected $table= 'user';
	// protected $primaryKey = 'id_user';

	// protected $returnType = 'object';
	// protected $useSoftDeletes = true;

	// protected $allowedFields = ['id_user','email','namadepan','namablkg','password','jeniskelamin','password','foto'];
	
	// protected $useTimestamps = true;

	// protected $validation = [
	// 	'email' => 'required|valid_email|is_unique[user.email]',
	// 	'nama_depan' => 'required',
	// 	'nama_belakang' => 'required',
	// 	'username' => 'required|min_length[6]|max_length[50]|is_unique[user.id_user]',
	// 	'jk' => 'required',
	// 	'password' => 'required|min_length[6]',
	// 	'password_conf' => 'matches[password]',
	// ];

	// protected $validationMsg = [
	// 	'email' 	=>  [
	// 		'required' => 'Email Harus Diisi',
	// 		'is_unique' => 'Email Sudah Pernah digunakan Sebelumnya',
	// 		'valid_email' => 'Email yang digunakan tidak valid '
	// 	],
	// 	'nama_depan' => [
	// 		'required' => 'Nama Depan Harus Diisi',
	// 	],
	// 	'nama_belakang' => [
	// 		'required' => 'Nama Depan Harus Diisi',
	// 	],
	// 	'username' => [
	// 		'required' => 'Username Harus Diisi',
	// 		'min_length' => 'Username terlalu pendek',
	// 		'max_length' => 'Username terlalu panjang',
	// 		'is_unique' => 'Username sudah digunakan'
	// 	],
	// 	'password' => [
	// 		'required' => 'Password wajib diisi',
	// 		'min_length' => 'Password terlalu pendek'
	// 	],
	// 	'password_conf' => [
	// 		'matches' => 'Konfirmasi Password berbeda dengan Password'
	// 	]
	// ];

	// protected	$skipValidation = false;