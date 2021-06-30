<?php namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AdminModel;

class Index extends BaseController
{
	public function __construct(){
		$namadepan = 'DI RAKATU';
	}
	public function index()
	{
		$namadepan = '';
		$data['title'] = 'Home | RAKATU';
		$data['namadepan'] = $namadepan;
		$data['foto'] =  'assets/images/pp_lk.png';
		return view('index_v', $data);
	}

	public function loginuser(){
		$data= [
			'title' => 'Log In | RAKATU'
		];
		$model = new UserModel();
		helper('form');
		return view('log_in_user_v',$data);
	}

	public function loginadmin(){
		$data= [
			'title' => 'Admin | RAKATU'
		];
		$model = new UserModel();
		helper('form');
		return view('log_in_admin_v',$data);
	}

	public function signup(){
		$data= [
			'title' => 'Sign Up | RAKATU'
		];
		return view('sign_up_v',$data);
	}
	//--------------------------------------------------------------------

}
