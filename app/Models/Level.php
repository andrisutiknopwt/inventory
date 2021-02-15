<?php namespace App\Models;

use CodeIgniter\Model;

class Level extends Model
{
    
    public function getLevel()
    {
        $builder = $this->db->table('user_level');
        return $builder->get();
    }



  
}

