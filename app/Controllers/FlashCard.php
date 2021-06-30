<?php namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AdminModel;

class FlashCard extends BaseController
{
	public function kartu()
	{	
		$session = session();
		$model = new UserModel();
		$username = $session->get('id_user');
		$data = $model->getDataUser($username);
		$data['title'] = 'FlashCard | RAKATU';
		echo view('flashcard_v.php',$data);
	}
	public function kartuAdmin()
	{	
		$session = session();
		$model = new AdminModel();
		$username = $session->get('id_admin');
		$data = $model->getDataAdmin($username);
		$data['title'] = 'FlashCard | RAKATU';
		echo view('flashcard_admin_v.php',$data);
	}

	//--------------------------------------------------------------------

}
