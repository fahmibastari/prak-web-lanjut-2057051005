<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFotoColumn extends Migration
{
    public function up()
    {
        // Periksa apakah kolom 'foto' sudah ada
        $fields = $this->db->getFieldNames('user');

        if (!in_array('foto', $fields)) {
            $this->forge->addColumn('user', [
                'foto' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => 255,
                    'null'          => true,
                ],
            ]);
        }
    }

    public function down()
    {
        // Periksa apakah kolom 'foto' ada sebelum mencoba menghapusnya
        $fields = $this->db->getFieldNames('user');

        if (in_array('foto', $fields)) {
            $this->forge->dropColumn('user', 'foto');
        }
    }
}
