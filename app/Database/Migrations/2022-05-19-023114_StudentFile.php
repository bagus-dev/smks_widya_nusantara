<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StudentFile extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true],
            'user_id'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'certificate'   => ['type' => 'varchar', 'constraint' => 255],
            'skhu'          => ['type' => 'varchar', 'constraint' => 255],
            'family_card'   => ['type' => 'varchar', 'constraint' => 255],
            'created_at'    => ['type' => 'datetime'],
            'updated_at'    => ['type' => 'datetime']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
        $this->forge->createTable('student_file', true);
    }

    public function down()
    {
        $this->forge->dropForeignKey('student_file','student_file_user_id_foreign');
        $this->forge->dropTable('student_file',true);
    }
}
