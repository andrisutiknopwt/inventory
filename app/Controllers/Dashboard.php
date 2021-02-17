<?php

namespace App\Controllers;
use App\Models\Level;
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
        $model = new Level();
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
            'nama' => $this->request->getPost('nama'),
            'user_name'  => $this->request->getPost('username'),
            'password'  => $this->request->getPost('pass'),
            'avatar'=>$namafoto,
        ]; 

         $ubah=$model->updateData($data, $id);
         if($ubah){
            return redirect()->to('/Dashboard');
         }else{
            echo 'gagal update';
         }


    }

    public function delete($id)
    {
        $model = new Level();
        $hapus = $model->delete_user($id);
        if($hapus){
            return redirect()->to('/Dashboard');
        }else{
            echo 'gagal';
        }
    }


}

?>