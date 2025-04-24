<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKuisTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kuis');
    }

    public function down()
    {
        $this->forge->dropTable('kuis');
    }
}
