<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ResultSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'result_name' => 'pending',
            ],
            [
                'result_name' => 'accept',
            ],
            [
                'result_name' => 'cancel',
            ],
        ];
        // $this->db->table('circulars')->insert($datas);

        foreach ($datas as $data) {
            $this->db->table('results')->insert($data);
        }
    }
}
