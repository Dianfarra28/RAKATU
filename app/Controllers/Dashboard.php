<?php namespace App\Controllers;
use App\Models\UserModel;
use App\Models\MateriModel;
use App\Models\AdminModel;
use App\Models\SubmateriModel;
class Dashboard extends BaseController
{
	public function __construct(){
		$session = session();
	}
	public function index()
	{
		$session = session();
		$username = $session->get('id_user');
		$model = new UserModel();
		// $nama = $session->get('namadepan');
		$data = $model->getDataUser($username);
		$data['title'] = 'Welcome | RAKATU';
		////dd($data);
		return view('index_v', $data);
	}

	// USER-------------------------------------------------
	public function ProfilUser(){
		$session = session();
		$username = $session->get('id_user');
		$model = new UserModel();
		$data = $model->getDataUser($username);
		$data['title']= 'Profil | RAKATU';
		////dd($data);
		return view('profil_user_v',$data);
		}
	public function editProfilUser(){
		$session = session();
		$username = $session->get('id_user');
		$model = new UserModel();
		$data = $model->getDataUser($username);
		$data['title']= 'Edit Profil | RAKATU';
		return view('edit_profil_user_v',$data);
	}
	public function updateuser(){
		$session = session();
		$model = new UserModel();
		$username = $session->get('id_user');
		$data = $model->getDataUser($username);
		helper(['form','url']);
		$validation =  $this->validate([
					'email' => 'required|min_length[6]|max_length[50]|valid_email',
					'namadepan' => 'required',
					'namablkg' => 'required'
				]
			);
		if ($this->request->getVar('new_password')) {
			$pass = $data['password'];
			$cek = $model->where('id_user',$username)->first();
			$password = $this->request->getVar('password');
			$res = password_verify($password, $cek['password']);
			//if($pass == $input){
			if(password_verify($password, $pass)){
				$val =  $this->validate([
				'new_password' => 'required|min_length[8]|max_length[255]',
				'password_conf' => 'matches[new_password]',
				]);
				if (!$val){
					$session = session();
					$username =  $session->get('id_user');
					$email =  $session->get('email');
					$nama = $session->get('namadepan');
					$blkg = $session->get('namablkg');
					$jk = $session->get('jeniskelamin');
					$foto = $session->get('foto');
					$pass = $session->get('password');
					$data= [
						'id_user' => $session->get('id_user'),
						'title' => 'Edit Profil | RAKATU',
						'email' => $email,
						'namadepan' => $nama,
						'namablkg' => $blkg,
						'jeniskelamin' => $jk,
						'foto' => $foto,
						'username' => $username,
						'password' => $pass,
						'validation' => $this->validator
				];
						return view('edit_profil_user_v',$data);
					}
				else{
					$data['title'] = 'Edit Profil | RAKATU';
					//store the user in our database
					$model= new UserModel();

					$newData = [
					// 'id_user' => $this->request->getPost('username'),
					'email' => $this->request->getPost('email'),
					'namadepan' => $this->request->getPost('namadepan'),
					'namablkg'  => $this->request->getPost('namablkg'),
					'password' => password_hash($this->request->getPost('new_password'),PASSWORD_DEFAULT),	
					'jeniskelamin' => $this->request->getPost('jeniskelamin')
					];
					////dd($newData);
					$id = $data['id'];
					$update = $model->update_data($newData,['id' => $id]);
					//dd($newData);
					if($update){
						session()->setFlashdata('msg','Data Berhasil Diubah');
						return redirect()->to('ProfilUser');
						}
				}
			}
			else{
			////dd($password,$pass,$res);
			session()->setFlashdata('failed','Password tidak sama dengan password sebelumnya');
			return redirect()->to('ProfilUser');
			}
		}
		if (!$validation){
			//dd($validation);
			$session = session();
			$username = $session->get('id_user');
			$email =  $session->get('email');
			$nama = $session->get('namadepan');
			$blkg = $session->get('namablkg');
			$jk = $session->get('jeniskelamin');
			$foto = $session->get('foto');
			$pass = $session->get('password');
			$data= [
				'title' => 'Edit Profil | RAKATU',
				'email' => $email,
				'nama' => $nama,
				'blkg' => $blkg,
				'jk' => $jk,
				'foto' => $foto,
				'username' => $username,
				'pass' => $pass,
				'validation' => $this->validator
		];
				return view('edit_profil_user_v',$data);
			}
		else{
		$data['title'] = 'Edit Profil | RAKATU';
				//store the user in our database
				$model= new UserModel();
				$pass = $data['password'];
				$newData = [
				// 'id_user' => $this->request->getPost('username'),
				'email' => $this->request->getPost('email'),
				'namadepan' => $this->request->getPost('namadepan'),
				'namablkg'  => $this->request->getPost('namablkg'),
				'password' => $pass 	,
				'id_user' => $this->request->getPost('username'),		
				'jeniskelamin' => $this->request->getPost('jeniskelamin')
				];
				////dd($newData);
				$id = $data['id'];
				$update = $model->update_data($newData,['id' => $id]);
				//dd($update);
				if($update){
					session()->setFlashdata('msg','Data Berhasil Diubah');
					return redirect()->to('ProfilUser');
				}
		}
	}
		public function process_user(){
		$session = session();
		$model = new UserModel();
		$username = $session->get('id_user');
		$data = $model->getDataUser($username);
		if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('ProfilUser'));
        }
 		
 		////dd($this->request->getFile('file_upload'));
        $validated = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
        ////dd($validated);
  
        if ($validated == FALSE) {
 			//dd($this->request->getFile('file_upload'));            
            // Kembali ke function index supaya membawa data uploads dan validasi
            return redirect()->to(base_url('ProfilUser'));
 
        } else {
 
            $avatar = $this->request->getFile('file_upload');
            ////dd($avatar);
            $avatar->move(ROOTPATH . 'public/assets/uploads');
            $pic = $avatar->getName(); 
            $newdata = 
            [
                'foto' => '/assets/uploads/'.$pic
            ];
            ////dd($data);
  			$id = $data['id'];
			$model->update_data($newdata,['id' => $id]);
            return redirect()->to(base_url('Dashboard/ProfilUser'))->with('success', 'Upload successfully'); 
	        }
	} 			
   	public function menuuser(){
	$session = session();
	$username = $session->get('id_user');
	$model = new UserModel();
	$data = $model->getDataUser($username);
	$nama = $session->get('namadepan');
	// $data= [
	// 	'namadepan' => $nama, 
	// 	'title' => 'Menu | RAKATU'
	// ];
	$data['title'] = 'Menu | RAKATU';
	// $data['namadepan'] = $nama;
	////dd($data);
	return view('menu_user_v',$data);
	}

	public function menuu()
	{	
		$session = session();
	    $username = $session->get('id_user');
	    $model = new UserModel();
	    $data = $model->getDataUser($username);
	    $nama = $session->get('namadepan');
		$this->materiModel = new MateriModel();
		$data['title'] = 'Materi | RAKATU';
		$data['materi'] = $this->materiModel->getMateri();
		
		return view('menu_materi_user_v', $data);
	}

	public function detaill($id_m)
	{	
		$db = \Config\Database::connect();

			$query = $db->query("SELECT sm.judul_sm, sm.isi_sm, sm.gambar_sm FROM materi as m INNER JOIN submateri as sm on m.id_m = sm.id_m Where sm.id_m = $id_m");

			$results = $query->getResult();
		
		$session = session();
		$model = new UserModel();
		$username = $session->get('id_user');
		$data = $model->getDataUser($username);
		$nama = $session->get('namadepan');
		$this->materiModel = new MateriModel();
		$data['title'] = 'Materi| RAKATU';
		$data['materi'] = $this->materiModel->getMateri($id_m);
		$data['results'] = $results;

		return view('detail_user_v', $data);
	}

	public function ujian(){
		$session = session();
		$model = new UserModel();
		$username = $session->get('id_user');
		$data = $model->getDataUser($username);
		$data['title'] = 'Home | RAKATU';
		return view('ujian_v',$data);
	}
	public function ujian_admin(){
		$session = session();
		$model = new AdminModel();
		$username = $session->get('id_admin');
		$data = $model->getDataAdmin($username);
		$data['title'] = 'Home | RAKATU';
		return view('ujian_admin_v',$data);
	}

	// ADMIN------------------------------------
	public function index_admin()
	{		
		$session = session();
		$username = $session->get('id_admin');
		$model = new AdminModel();
		$data = $model->getDataAdmin($username);
		////dd($data);
		$data['title']= 'Welcome | RAKATU';
		return view('index_v_admin', $data);
	}


	
	public function ProfilAdmin(){
		$session = session();
		$username = $session->get('id_admin');
		$model = new AdminModel();
		$data = $model->getDataAdmin($username);
		$data['title']= 'Profil | RAKATU';
		////dd($data);
		return view('profil_admin_v',$data);
		}
	public function process_admin(){
		$session = session();
		$model = new AdminModel();
		$username = $session->get('id_admin');
		$data = $model->getDataAdmin($username);
		// dd($data);
		if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('ProfilAdmin'))->with('failed!');
        }
 		
 		////dd($this->request->getFile('file_upload'));
        $validated = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,8192]'
        ]);
        ////dd($validated);
  
        if ($validated == FALSE) {
            return redirect()->to(base_url('ProfilAdmin'))->with('failed', 'FAILED VALIDATION! GAMBAR TIDAK MEMENUHI');
 
        } else {
 
            $avatar = $this->request->getFile('file_upload');
            ////dd($avatar);
            $avatar->move(ROOTPATH . 'public/assets/uploads');
            $pic = $avatar->getName(); 
            $newdata = 
            [
                'foto' => '/assets/uploads/'.$pic
            ];
  			// dd($data);
  			$id = $data['id'];

			$model->update_data($newdata,['id' => $id]);
            return redirect()->to(base_url('Dashboard/ProfilAdmin'))->with('success', 'Upload successfully'); 
	        }
	} 	



	public function editProfilAdmin(){
		$session = session();
		$username = $session->get('id_admin');
		$model = new AdminModel();
		$data = $model->getDataAdmin($username);
		$data['title']= 'Edit Profil | RAKATU';
		return view('edit_profil_admin_v',$data);
	}

	public function updateadmin(){
		$session = session();
		$username = $session->get('id_admin');
		$model = new AdminModel();
		$data = $model->getDataAdmin($username);
		helper(['form','url']);
		$validation =  $this->validate([
					'email' => 'required|min_length[6]|max_length[50]|valid_email',
					'namadepan' => 'required',
					'namablkg' => 'required'
				]
			);
		if ($this->request->getVar('new_password')) {
			$pass = $data['password'];
			//dd($pass);
			////dd($pass);
			$input = $this->request->getPost('password');
			if($pass == $input){
				$val =  $this->validate([
					'new_password' => 'required|min_length[8]|max_length[255]',
					'password_conf' => 'matches[new_password]',
				]);
				if (!$val){
					$session = session();
					$username =  $session->get('id_admin');
					$email =  $session->get('email');
					$nama = $session->get('namadepan');
					$blkg = $session->get('namablkg');
					$jk = $session->get('jeniskelamin');
					$foto = $session->get('foto');
					$pass = $session->get('password');
					$data= [
						'id_admin' => $session->get('id_admin'),
						'title' => 'Edit Profil | RAKATU',
						'email' => $email,
						'namadepan' => $nama,
						'namablkg' => $blkg,
						'jeniskelamin' => $jk,
						'foto' => $foto,
						'username' => $username,
						'password' => $pass,
						'validation' => $this->validator
				];
						return view('edit_profil_admin_v',$data);
					}
				else{
				$data['title']= 'Edit Profil | RAKATU';
				//store the user in our database
				$model= new AdminModel();

				$newData = [
				// 'id_user' => $this->request->getPost('username'),
				'email' => $this->request->getPost('email'),
				'namadepan' => $this->request->getPost('namadepan'),
				'namablkg'  => $this->request->getPost('namablkg'),
				'password' => $this->request->getPost('new_password'),	
				'jeniskelamin' => $this->request->getPost('jeniskelamin')
				];
				////dd($newData);
				$id = $data['id'];
				$update = $model->update_data($newData,['id' => $id]);
				//dd($newData);
				if($update){
					session()->setFlashdata('msg','Data Berhasil Diubah');
					return redirect()->to('ProfilAdmin');
				}
          	}
          }
          else{
			session()->setFlashdata('failed','Password tidak sama dengan password sebelumnya');
			return redirect()->to('ProfilAdmin');
		}
        }
        

		if (!$validation){
			$session = session();
			$username =  $session->get('id_admin');
			$email =  $session->get('email');
			$nama = $session->get('namadepan');
			$blkg = $session->get('namablkg');
			$jk = $session->get('jeniskelamin');
			$foto = $session->get('foto');
			$pass = $session->get('password');
			$data= [
				'id_admin' => $session->get('id_admin'),
				'title' => 'Edit Profil | RAKATU',
				'email' => $email,
				'namadepan' => $nama,
				'namablkg' => $blkg,
				'jeniskelamin' => $jk,
				'foto' => $foto,
				'username' => $username,
				'password' => $pass,
				'validation' => $this->validator
		];
				return view('edit_profil_admin_v',$data);
			}
		else{
		$data['title']='Edit Profil | RAKATU';
				//store the user in our database
				$model= new AdminModel();
				////dd($data);
				$pass = $data['password'];
				$newData = [
				// 'id_user' => $this->request->getPost('username'),
				'email' => $this->request->getPost('email'),
				'namadepan' => $this->request->getPost('namadepan'),
				'namablkg'  => $this->request->getPost('namablkg'),
				'password' => $pass,	
				'jeniskelamin' => $this->request->getPost('jeniskelamin')
				];
				////dd($newData);
				$id = $data['id'];
				$update = $model->update_data($newData,['id' => $id]);
				//dd($newData);
				if($update){
					session()->setFlashdata('msg','Data Berhasil Diubah');
					return redirect()->to('ProfilAdmin');
				}
			}
		}



	public function menuadmin(){
		$session = session();
		$username = $session->get('id_admin');
		$model = new AdminModel();
		$data = $model->getDataAdmin($username);
		$nama = $session->get('namadepan');
		$data['title'] = 'Menu | RAKATU';
		// $data= [
		// 	'namadepan' => $nama, 
		// 	'title' => 'Menu | RAKATU'
		// ];
		return view('menu_admin_v',$data);
	}

	public function menu()
	{	
		$session = session();
		$model = new AdminModel();
		$username = $session->get('id_admin');
		$data = $model->getDataAdmin($username);
		$nama = $session->get('namadepan');
		$this->materiModel = new MateriModel();
		// $data= [
		// 	'title' => 'Menu Materi | RAKATU',
		// 	'materi' => $this->materiModel->getMateri()
		// ];
		$data['title'] = 'Menu | RAKATU';
		$data['materi'] = $this->materiModel->getMateri();
		
		return view('menu_materi_admin_v', $data);
	}

	public function detail($id_m)
	{	
		$db = \Config\Database::connect();

			$query = $db->query("SELECT sm.id_sm, sm.judul_sm, sm.isi_sm, sm.gambar_sm FROM materi as m INNER JOIN submateri as sm on m.id_m = sm.id_m Where sm.id_m = $id_m");

			$results = $query->getResult();
		
		$session = session();
		$model = new AdminModel();
		$username = $session->get('id_admin');
		$data = $model->getDataAdmin($username);
		$nama = $session->get('namadepan');
		$this->materiModel = new MateriModel();
		$data['title'] = 'Materi | RAKATU';
		$data['materi'] = $this->materiModel->getMateri($id_m);
		$data['results'] = $results;

		// $data = [
		// 	'title' => 'detail Materi | RAKATU',
		// 	'materi' => $this->materiModel->getMateri($id_m),
		// 	'results' => $results
		// ];
		return view('detail_admin_v', $data);
	}

	public function save(){
		//validasi input
		if (!$this->validate([
			'judul_m' => [
				'rules'=> 'required|is_unique[materi.judul_m]',
				'errors'=>[
					'required'=> '{field} Materi harus diisi',
					'is_unique' => '{field} Materi sudah terdaftar'
				]
			]
		])){
			$validation = \Config\Services::validation();
			return redirect()->to('/Dashboard/menu');
			$data['materi'] = $this->save([
				'id_m' => $this->request->getVar('id_m'),
				'judul_m' => $this->request->getVar('judul_m'),
				'isi_m' => $this->request->getVar('isi_m')
	
			]);
	
			session()->setFlashdata('info','Isi berhasil diubah');
			return redirect()->to('/Dashboard/menu');
		}
	}

	public function edit($id_m)
	{	
		$session = session();
		$model = new AdminModel();
		$username = $session->get('id_admin');
		$data = $model->getDataAdmin($username);
		$nama = $session->get('namadepan');
		$this->materiModel = new MateriModel();
		$data['title'] = 'Edit Materi | RAKATU';
		$data['materi'] = $this->materiModel->getMateri($id_m);

		// $data = [
		// 	'title' => 'detail Materi | RAKATU',
		// 	'materi' => $this->materiModel->getMateri($id_m),
		// 	'results' => $results
		// ];
		return view('edit_materi_v', $data);
	}

	

	public function update($id)
	{

		$this->materiModel = new MateriModel();
    // Mengambil value dari form dengan method POST
    $isi_m= $this->request->getPost('isi_m');
 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'isi_m' => $isi_m
    ];
 
    
    $ubah = $this->materiModel->update_materi($data, ['id' => $id]);
     
    // Jika berhasil melakukan ubah
    if($ubah)
    {
        // Deklarasikan session flashdata dengan tipe info
        session()->setFlashdata('info', 'Updated materi successfully');
        // Redirect ke halaman product
        return redirect()->to(base_url('/Dashboard/menu')); 
    }
} 
	public function edit_sub($id_sm)
	{	
		$session = session();
		$model = new AdminModel();
		$username = $session->get('id_admin');
		$data = $model->getDataAdmin($username);
		$nama = $session->get('namadepan');
		$model = new SubmateriModel();
		$data['title'] = 'Edit Materi | RAKATU';
		$data['submateri'] = $model->getSubmateri($id_sm);

		return view('edit_submateri_v', $data);
	}
	public function update_sub($id)
	{

		$model = new SubmateriModel();
	// Mengambil value dari form dengan method POST
	$isi_sm= $this->request->getPost('isi_sm');

	// Membuat array collection yang disiapkan untuk insert ke table
	$data = [
		'isi_sm' => $isi_sm
	];

	$ubah = $model->update_submateri($data, ['id' => $id]);
	
	// Jika berhasil melakukan ubah
	if($ubah)
	{
		// Deklarasikan session flashdata dengan tipe info
		session()->setFlashdata('info', 'Updated submateri successfully');
		// Redirect ke halaman product
		return redirect()->to(base_url('/Dashboard/menu')); 
	}
	} 
	
	public	function kontak_user(){
		$session = session();
		$username = $session->get('id_user');
		$model = new UserModel();
		$data = $model->getDataUser($username);
		$data['title']= 'About Us | RAKATU';
		return view('about_us_v',$data);
		}
	public	function kontak_admin(){
		$session = session();
		$username = $session->get('id_admin');
		$model = new AdminModel();
		$data = $model->getDataAdmin($username);
		$data['title']= 'About Us | RAKATU';
		return view('about_us_admin_v',$data);
		}


	}

