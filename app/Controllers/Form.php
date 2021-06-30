<?php 
namespace App\Controllers;

use App\Models\UserModel;

class Form extends BaseController
{
	public function index(){
		//model initialize
		$model = new UserModel();

		//pager initialize
		$pager = \Config\Services::pager();
		$data = array(
			'posts' => $model->paginate(2,'post'),
			'pager' => $model->pager,
			'title' => 'Home | Rakatu'
		);
		return view('index_v',$data);
	}

	public function register()
	{
		$data = [];
		helper(['form','url']);

			// //validation
			// $rules = [
			// 	'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
			// 	'nama_depan' => 'required',
			// 	'nama_belakang' => 'required',
			// 	'username' => 'required|min_length[6]|max_length[50]|is_unique[user.id_user]',
			// 	'jk' => 'required',
			// 	'password' => 'required|min_length[8]|max_length[255]',
			// 	'password_conf' => 'matches[password]'
			// ];
			$validation =  $this->validate([
					'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
					'nama_depan' => 'required',
					'nama_belakang' => 'required',
					'username' => 'required|min_length[6]|max_length[50]|is_unique[user.id_user]',
					'jk' => 'required',
					'password' => 'required|min_length[8]|max_length[255]',
					'password_conf' => 'matches[password]'
				]
			);
			// dd($validation);

			if (!$validation){
				$data= [
					'title' => 'Sign Up | RAKATU',
					'validation' => $this->validator
				];
				return view('sign_up_v',$data);
			}
			else{
				$data= [
					'title' => 'Log In | RAKATU'
				];
				//store the user in our database
				$model= new UserModel();
				$foto = '';
				if ($this->request->getPost('jk')=="laki-laki") {
					$foto = '/assets/uploads/pp_lk.png';
				}else{
					$foto = '/assets/uploads/pp_pr.png';
				}
				$newData = [ 
				'id_user' => $this->request->getPost('username'),
				'email' => $this->request->getPost('email'),
				'namadepan' => $this->request->getPost('nama_depan'),
				'namablkg'  => $this->request->getPost('nama_belakang'),
				'password' => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
				'jeniskelamin' => $this->request->getPost('jk'),
				'foto' => $foto
				];
				$model->insert($newData);
				$session = session();
				$session->setFlashdata('success', 'Succesful Registration');
				// $data= [
				// 	'title' => 'Log In | RAKATU'
				// ];
				// return redirect()->to('Index/loginuser');
				return view('log_in_user_v',$data);
			}
	}
	
	//--------------------------------------------------------------------

}
