<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Majors extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'          => ['type' => 'varchar', 'constraint' => 100],
            'slug'          => ['type' => 'varchar', 'constraint' => 100],
            'description'   => ['type' => 'text'],
            'image'         => ['type' => 'varchar', 'constraint' => 255],
            'created_at'    => ['type' => 'datetime'],
            'updated_at'    => ['type' => 'datetime']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('majors');
    }

    public function down()
    {
        $this->forge->dropTable('majors');
    }
}
