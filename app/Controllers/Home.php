<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{
		// $model  = new UserModel();

		// print_r($model->findall());

		echo view('home');
	}
	public function done(){
		return view('success');
	}

	public function admin(){
		return view('admin');
	}

	public function insert(){

		$encrypter = \Config\Services::encrypter();

		$pass = $this->request->getVar('password');

		$k = $encrypter->encrypt($pass);

		$d = $encrypter->decrypt($k);
		$created_by =1;
		$data = [ 
			'full_name' => $this->request->getVar('full_name'),
			'email' => $this->request->getVar('email'),
			'created_by' => $created_by,
			'is_admin' => 'true',
			'password' => $k 
		];

		$model  = new UserModel();
		$model->insert($data);
		
		 return view('success');
	}
	//--------------------------------------------------------------------

}
