<?php namespace App\Models;

use CodeIgniter\Model;

class Level extends Model
{
    
    public function getLevel()
    {
        $builder = $this->db->table('user_level');
        return $builder->get();
    }
    public function simpanData($data){
        $query = $this->db->table('users')->insert($data);
        return $query;
    }

    public function getUser(){
        $builder = $this->db->table('users');
        $builder->select('*');
        $builder->join('user_level', 'id_level = level','left');
        return $builder->get();
    }

    public function getData($id){
        $builder = $this->db->table('users');
        return $builder->getWhere(['id' => $id]);
    }

/*
    public function update($data, $id){
        
        $query = $this->db->table('users')->update($data, array('id' => $id));
        return $query;

        
        $builder = $this->db->table('users');
        $builder->where('id', $id);
        $builder->update($data);
    
        
    }*/
    public function updateData($data, $id)
    {
        $query = $this->db->table('users')->update($data, array('id' => $id));
        return $query;
    }


    public function delete_user($id)
    {
        $query = $this->db->table('users')->delete(array('id' => $id));
        return $query;
    }

  
}

