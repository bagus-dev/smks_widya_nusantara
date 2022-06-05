<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TeacherList extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true],
            'name'              => ['type' => 'varchar', 'constraint' => 255],
            'position'          => ['type' => 'varchar', 'constraint' => 100],
            'homeroom_status'   => ['type' => 'int', 'constraint' => 1],
            'homeroom'          => ['type' => 'varchar', 'constraint' => 100],
            'phone'             => ['type' => 'varchar', 'constraint' => 13],
            'short_desc'        => ['type' => 'varchar', 'constraint' => 100],
            'front_status'      => ['type' => 'int', 'constraint' => 1],
            'front_seq'         => ['type' => 'int', 'constraint' => 1],
            'image'             => ['type' => 'varchar', 'constraint' => 255],
            'created_at'        => ['type' => 'datetime'],
            'updated_at'        => ['type' => 'datetime']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('teacher_list');
    }

    public function down()
    {
        $this->forge->dropTable('teacher_list');
    }
}
