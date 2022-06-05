<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class VisionMission extends Migration
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
        $this->forge->createTable('vision_mission');
    }

    public function down()
    {
        $this->forge->dropTable('vision_mission');
    }
}
