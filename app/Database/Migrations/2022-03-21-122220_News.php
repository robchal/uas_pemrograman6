<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'auto_increment' => true
                ],
                'title' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                ],
                'author' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                    'default' => "Jhon doe"
                ],
                'content' => [
                    'type' => 'text',
                    'null' => true
                ],
                'status' => [
                    'type' => 'ENUM',
                    'constraint' => ['published', 'draft'],
                    'default' => 'draft'
                ],
            ]
        );
        $this->forge->addKey('id', true);
    }

    public function down()
    {
        //
    }
}
