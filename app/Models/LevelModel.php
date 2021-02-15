<?php

namespace App\Models;

use CodeIgniter\Model;

class LevelModel extends Model
{
    protected $table      = 'user_level';
    protected $primaryKey = 'id_level';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['level_name', 'status'];

    
}