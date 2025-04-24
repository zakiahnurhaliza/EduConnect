<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHasilKuisTable extends Migration
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
            'siswa_id' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
            'skor' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'nama_siswa' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('hasil_kuis');
    }

    public function down()
    {
        $this->forge->dropTable('hasil_kuis');
    }
}
