<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Circular extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 5,
                "auto_increment" => true
            ],
            "school_name" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => false
            ],
            "circular_details" => [
                "type" => "VARCHAR",
                "constraint" => 300,
                "null" => false
            ],
            "available_classes" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => false
            ],
            "apply_fees" => [
                "type" => "SMALLINT",
                "constraint" => 4,
                "null" => false
            ],
            "circular_image" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => false
            ]
        ]);
        $this->forge->addKey(["id", true]);
        $this->forge->createTable("circulars");
    }

    public function down()
    {
        $this->forge->dropTable("circulars");
    }
}
