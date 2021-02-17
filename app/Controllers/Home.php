<?php

namespace App\Controllers;

use\App\Models\Usermodel;

class Home extends BaseController
{
	public function index()
	{
		return view('auth/login');
	}
	public function listUser(){
		echo  'halaman daftar user';
	}

	function login(){
		$session = session();
        $model = new Usermodel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('pass');
        $data = $model->where('user_name', $username)->first();

        if($data){
            $pass = $data['password'];
            // /$verify_pass = password_verify($password, $pass);
			//echo "password input:".$password."<br>"."password database:".$pass;
			
            if($password==$pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'nama'     => $data['nama'],
                    'username' => $data['user_name'],
                    'logged_in'=> TRUE
                ];
                $session->set($ses_data);
                 return redirect()->to('/Dashboard');
            }else{
                 $session->setFlashdata('msg', 'Wrong Password');
                 return redirect()->to('/Home');
            }		
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/Home');
        } 
	}
	function logout(){
		$session = session();
        $session->destroy();
        return redirect()->to('/Home');
	}
}
