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
        // $builder = $this->db->table('users');
        // return $builder->get();
        $builder = $this->db->table('users');
        $builder->select('*');
        $builder->join('user_level', 'id_level = level','left');
        return $builder->get();
    }

  
}

