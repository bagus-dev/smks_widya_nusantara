<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StudentMajor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true],
            'user_id'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'major_id'      => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'reason'        => ['type' => 'text'],
            'created_at'    => ['type' => 'datetime'],
            'updated_at'    => ['type' => 'datetime']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('major_id', 'majors', 'id', '', 'CASCADE');
        $this->forge->createTable('student_major');
    }

    public function down()
    {
        $this->forge->dropForeignKey('student_major','student_major_user_id_foreign');
        $this->forge->dropForeignKey('student_major','student_major_major_id_foreign');
        $this->forge->dropTable('student_major',true);
    }
}
