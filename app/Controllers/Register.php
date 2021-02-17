<?php

namespace App\Controllers;


use App\Models\Level;

class Register extends BaseController
{
	public function index()
	{	
		$model = new Level();
		$data['level'] = $model->getLevel()->getResult();
		return view('auth/register',$data);
	}


	public function register(){
		$model = new level();
		$data = array(
			'nama' =>$this->request->getPost('nama'),
			'user_name' =>$this->request->getPost('username'),
			'level'=>$this->request->getPost('id_level'),
			'password'=>$this->request->getPost('pass'),
		);
		$model->simpanData($data);
		return redirect()->to('/Dashboard');
	}

	public function list(){

		$model = new level();
		$data['user'] = $model->getUser()->getResult();
		return view('tabel',$data);
	
	}


}
