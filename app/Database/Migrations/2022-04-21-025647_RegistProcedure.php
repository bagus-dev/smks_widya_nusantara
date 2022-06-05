<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RegistProcedure extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true],
            'procedure'     => ['type' => 'varchar', 'constraint' => 255],
            'created_at'    => ['type' => 'datetime'],
            'updated_at'    => ['type' => 'datetime']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('regist_procedure');
    }

    public function down()
    {
        $this->forge->dropTable('regist_procedure');
    }
}
