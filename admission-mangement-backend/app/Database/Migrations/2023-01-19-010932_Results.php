<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Results extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                'type' => "INT",
                'constraint' => 12,
                'auto_increment' => true
            ],
            "result_name" => [
                'type' => "VARCHAR",
                'constraint' => 50,
                'null' => false,
            ],
        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable("results");
    }

    public function down()
    {
        $this->forge->dropTable('results');
    }
}
