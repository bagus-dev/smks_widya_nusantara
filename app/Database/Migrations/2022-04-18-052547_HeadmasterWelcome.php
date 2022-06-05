<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HeadmasterWelcome extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 1, 'auto_increment' => true],
            'description'   => ['type' => 'text'],
            'created_at'    => ['type' => 'datetime'],
            'updated_at'    => ['type' => 'datetime']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('headmaster_welcome');
    }

    public function down()
    {
        $this->forge->dropTable('headmaster_welcome');
    }
}
