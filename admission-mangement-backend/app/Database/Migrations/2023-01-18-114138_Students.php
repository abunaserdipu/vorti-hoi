<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 5,
                "auto_increment" => true
            ],
            "student_name" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => false
            ],
            "class" => [
                "type" => "TINYINT",
                "constraint" => 1,
                "null" => false
            ],
            "birth_date" => [
                "type" => "VARCHAR",
                "constraint" => 20,
                "null" => false
            ],
            "transaction_id" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => false
            ],
            "guardian_name" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => false
            ],
            "gender" => [
                "type" => "TINYINT",
                "constraint" => 1,
                "null" => false
            ],
            "nationality" => [
                "type" => "TINYINT",
                "constraint" => 1,
                "null" => false
            ],
            "phone" => [
                "type" => "VARCHAR",
                "constraint" => 30,
                "null" => false
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => false
            ],
            "street_address" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => false
            ],
            "city" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false
            ],
            "division" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false
            ],
            "zip_code" => [
                "type" => "SMALLINT",
                "constraint" => 5,
                "null" => false
            ],
            "country" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false
            ],
            "student_image" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => false
            ],
        ]);
        $this->forge->addKey(["id", true]);
        $this->forge->createTable("students");
    }

    public function down()
    {
        $this->forge->dropTable("circulars");
    }
}
