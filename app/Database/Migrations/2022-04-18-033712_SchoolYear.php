<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SchoolYear extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'school_year'   => ['type' => 'char', 'constraint' => 9],
            'status'        => ['type' => 'int', 'constraint' => 1],
            'created_at'    => ['type' => 'datetime'],
            'updated_at'    => ['type' => 'datetime']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('school_year');
    }

    public function down()
    {
        $this->forge->dropTable('school_year');
    }
}
