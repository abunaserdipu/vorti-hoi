<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CircularSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'school_name' => 'Muslim Modern',
            'available_classes'    => 'class-one',
            'circular_details'    => 'This is a government school',
            'circular_image' => 'assets/uploads/xiaomi.jpg',
        ];
        $this->db->table('circulars')->insert($data);
    }
}
