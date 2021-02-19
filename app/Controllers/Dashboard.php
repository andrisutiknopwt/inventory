<?php

namespace App\Controllers;
use App\Models\Level;
use App\Models\Usermodel;

class Dashboard extends BaseController
{

    public function index(){
        $model = new Level();
		$data['user'] = $model->getUser()->getResult();
		return view('tabel',$data);
    }

    function edit($id){
        $model = new Level();
        $data['editData'] =$model->getData($id)->getRowArray();
        return view('edit', $data);    
       
    }

    function updateDatauser(){
        $model = new Usermodel();
        $id = $this->request->getPost('id');
        $foto = $this->request->getFile('foto');

        if($foto->getError()==4){
            $namafoto = $this->request->getPost('foto_lama');
        }else{
            $namafoto =$foto->getRandomName();
            $foto->move('gambar',$namafoto);
            $foto_lama = $this->request->getPost('foto_lama');
            unlink('gambar/'.$this->request->getPost('foto_lama'));
        }

        

        $data = [
            'id'   =>$id,
            'nama' => $this->request->getPost('nama'),
            'user_name'  => $this->request->getPost('username'),
            'password'  => $this->request->getPost('pass'),
            'avatar'=>$namafoto,
        ]; 

         $ubah=$model->save($data);
         if($ubah){
            return redirect()->to('/Dashboard');
         }else{
            echo 'gagal update';
         }


    }

    public function delete($id)
    {
        $model = new Usermodel();
        $hapus = $model->delete($id);
        // $namafoto = $model->getData($id);
        // unlink('gambar/'.$this->request->getPost('foto_lama'));

        if($hapus){
            return redirect()->to('/Dashboard');
        }else{
            echo 'gagal';
        }
    }


}

?>