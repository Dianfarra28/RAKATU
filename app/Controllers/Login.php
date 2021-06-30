<?php namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AdminModel;

class Login extends BaseController
{
	public function __construct()
	{
		helper('form');
		$model = new UserModel();
	}

	public function index(){
		$data= [
			'title' => 'Log In | RAKATU'
		];
		return view('log_in_user_v');
	}

	public function auth(){
		$session = session();
		$model = new UserModel();
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');
		$cek = $model->where('id_user',$username)->first();
		// $cek = $this->LoginModel->cek_login($username, $password);
		// dd($cek);
		// if(($cek['id_user'] == $username) && ($cek['password']==$password)){
		// 	session()->set('username',$cek['username']);
		// 	return redirect()->to(base_url('Index'));
		// //
		// dd($password,$username);
		if($cek){
			// $pass = $cek['password'];
			// $verify_pass = password_verify($password, $pass);	
			// dd($verify_pass); 
			// if($password == $cek['password']){
			if(password_verify($password,$cek['password'])){
				$ses_data=[
					'email'		=> $cek['email'],
					'id_user'	=> $cek['id_user'],
					'namadepan'	=> $cek['namadepan'],
					'namablkg'	=> $cek['namablkg'],
					'jeniskelamin' => $cek['jeniskelamin'],
					'foto'	=> 'assets/images/pp_lk.png',
					'password' =>$cek['password'],
					'logged_in'	=> TRUE
				];
				//BENAR
				$session->set($ses_data);
				return redirect()->to('/Dashboard/index');
			}
			else{
				$session->setFlashdata('msg','Password yang anda masukan salah!');
				return redirect()->to('/Index/loginuser');
				}
		}
		else{
			$session->setFlashdata('msg','Username yang anda masukan salah! Atau Belum terdaftar');
			return redirect()->to('/Index/loginuser');
		} 
	}
	public function authadmin(){
		$session = session();
		$model = new AdminModel();
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');
		$cek = $model->where('id_admin',$username)->first();
		// $cek = $this->LoginModel->cek_login($username, $password);
		// dd($cek);
		// if(($cek['id_user'] == $username) && ($cek['password']==$password)){
		// 	session()->set('username',$cek['username']);
		// 	return redirect()->to(base_url('Index'));
		// //
		// dd($password,$username);
		if($cek){
			$pass = $cek['password'];
			$verify_pass = password_verify($password, $pass);	
			// dd($verify_pass); 
			if($password == $cek['password']){
				$ses_data=[
					'email'		=> $cek['email'],
					'id_admin'	=> $cek['id_admin'],
					'namadepan'	=> $cek['namadepan'],
					'namablkg'	=> $cek['namablkg'],
					'jeniskelamin' => $cek['jeniskelamin'],
					'foto'	=> $cek['foto'],
					'password' =>$cek['password'],
					'logged_in'	=> TRUE
				];
				//BENAR
				$session->set($ses_data);
				return redirect()->to('/Dashboard/index_admin');
			}
			else{
				$session->setFlashdata('msg','Password yang anda masukan salah!');
				return redirect()->to('/Index/loginadmin');
				}
		}
		else{
			$session->setFlashdata('msg','Username yang anda masukan salah! Atau Belum terdaftar');
			return redirect()->to('/Index/loginadmin');
		} 
	}
	public function logout(){
		$session = session ();
		$session->destroy();
		return redirect()->to('/Index/loginuser');
	}
}
	//--------------------------------------------------------------------
