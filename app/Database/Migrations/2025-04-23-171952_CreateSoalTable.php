<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSoalTable extends Migration
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
            'kuis_id' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
            'pertanyaan' => [
                'type'       => 'TEXT',
            ],
            'opsi_a' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'opsi_b' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'opsi_c' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'opsi_d' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'jawaban_benar' => [
                'type'       => 'VARCHAR',
                'constraint' => 1,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('soal');
    }

    public function down()
    {
        $this->forge->dropTable('soal');
    }
}
