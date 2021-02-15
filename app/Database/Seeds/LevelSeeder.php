<?php namespace App\Database\Seeds;
  
class LevelSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'id_level'  => 1,
                'level_name'  =>  'Administrator',
                'status'  =>  1
            ],
            [
                'id_level'  => 2,
                'level_name'  =>  'General Manager',
                'status'  =>  1
            ],
            [
                'id_level'  => 3,
                'level_name'  =>  'Manager',
                'status'  =>  1
            ],
            [
                'id_level'  => 4,
                'level_name'  =>  'Staf',
                'status'  =>  1
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
} 