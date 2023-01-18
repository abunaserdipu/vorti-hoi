<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CircularSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'school_name' => 'Muslim Modern School',
                'available_classes'    => 'class 1 to 5',
                'apply_fees' => '500',
                'circular_details'    => 'Muslim Modern School has primary also secondary education facilities. Playground, Labs, and Library are all facilities gathered will need for a good education environment. Admit your child here to give him or her a better education.
            After fulfilling the admission form students will receive a notice for the preliminary exam. Notice will see after logging VortiHoi website.
            Students will be selected for final admission after the preliminary exam they will pay 5,000 as an admission fee. Admission fees will be given from the VortiHoi website.
            We are excited to give your child a better education!',
                'circular_image' => '/assets/uploads/school.jpg',
            ],
            [
                'school_name' => 'Adamjee Cantonment School',
                'available_classes'    => 'class 1 to 9',
                'apply_fees' => '500',
                'circular_details'    => 'Adamjee Cantonment School has primary also secondary education facilities. Playground, Labs, and Library are all facilities gathered will need for a good education environment. Admit your child here to give him or her a better education.
            After fulfilling the admission form students will receive a notice for the preliminary exam. Notice will see after logging VortiHoi website.
            Students will be selected for final admission after the preliminary exam they will pay 5,000 as an admission fee. Admission fees will be given from the VortiHoi website.
            We are excited to give your child a better education!',
                'circular_image' => '/assets/uploads/school.jpg',
            ]
        ];
        // $this->db->table('circulars')->insert($datas);

        foreach ($datas as $data) {
            $this->db->table('circulars')->insert($data);
        }
    }
}
