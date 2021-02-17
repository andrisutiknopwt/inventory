<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Usermodel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['nama','user_name','password','level'];
}



