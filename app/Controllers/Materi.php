<?php 
namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\AdminModel;
use App\Models\UserModel;

class Materi extends BaseController
{
	protected $materiModel;
	public function __construct()
	{
		$this->materiModel = new MateriModel();
	}

	public function menu()
	{	
		// $session = session();
		// $model = new AdminModel();
		// $username = $session->get('id_admin');
		// $data = $model->getDataAdmin($username);	
		$data= [
			'title' => 'Menu Materi | RAKATU',
			'materi' => $this->materiModel->getMateri()
		];
		
		return view('menu_materi_admin_v', $data);
	}

	public function detail($id_m)
	{	
		$db = \Config\Database::connect();

			$query = $db->query("SELECT sm.judul_sm, sm.isi_sm, sm.gambar_sm FROM materi as m INNER JOIN submateri as sm on m.id_m = sm.id_m Where sm.id_m = $id_m");

			$results = $query->getResult();
		
		$session = session();
		$model = new AdminModel();
		$username = $session->get('id_admin');
		$data = $model->getDataAdmin($username);
		$nama = $session->get('namadepan');
		$this->materiModel = new MateriModel();
		$data['title'] = 'Menu | RAKATU';
		$data['materi'] = $this->materiModel->getMateri($id_m);
		$data['results'] = $results;

		// $data = [
		// 	'title' => 'detail Materi | RAKATU',
		// 	'materi' => $this->materiModel->getMateri($id_m),
		// 	'results' => $results
		// ];
		return view('detail_admin', $data);
	}

	public function detaild($id_m)
	{	
		$db = \Config\Database::connect();

			$query = $db->query("SELECT sm.judul_sm, sm.isi_sm, sm.gambar_sm FROM materi as m INNER JOIN submateri as sm on m.id_m = sm.id_m Where sm.id_m = $id_m");

			$results = $query->getResult();

		$data = [
			'title' => 'detail Materi | RAKATU',
			'materi' => $this->materiModel->getMateri($id_m),
			'results' => $results
		];
		return view('materi/detail', $data);
	}

	public function home()
	{
		$data = [
			'title' => 'Menu Materi | RAKATU'
		];
		
		return view('materi/home_v', $data);
	
	}

	//--------------------------------------------------------------------

}