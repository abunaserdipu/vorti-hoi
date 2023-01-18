<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'student_name' => 'Mehedi Hasan',
                'class' => '9',
                'birth_date' => '1june2017',
                'transaction_id' => 'dskuewojdslkj',
                'guardian_name' => 'Md. Nurul Islam',
                'gender' => '1',
                'nationality' => '1',
                'phone' => '01245785',
                'email' => 'mehedi@gmail.com',
                'street_address' => 'Puraton Kachukhet',
                'city' => 'Mirpur',
                'division' => 'Dhaka',
                'zip_code' => '1206',
                'country' => 'Bangladesh',
                'student_image' => '/assets/uploads/student.jpg'
            ],
            [
                'student_name' => 'Mehedi Hasan',
                'class' => '9',
                'birth_date' => '1june2017',
                'transaction_id' => 'dskuewojdslkj',
                'guardian_name' => 'Md. Nurul Islam',
                'gender' => '1',
                'nationality' => '1',
                'phone' => '01245785',
                'email' => 'mehedi@gmail.com',
                'street_address' => 'Puraton Kachukhet',
                'city' => 'Mirpur',
                'division' => 'Dhaka',
                'zip_code' => '1206',
                'country' => 'Bangladesh',
                'student_image' => '/assets/uploads/student.jpg'
            ]
        ];
        // $this->db->table('circulars')->insert($datas);

        foreach ($datas as $data) {
            $this->db->table('students')->insert($data);
        }
    }
}
