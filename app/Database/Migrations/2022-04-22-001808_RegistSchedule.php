<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RegistSchedule extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true],
            'title'		 	 => ['type' => 'VARCHAR', 'constraint' => 255],
			'start_event'	 => ['type' => 'datetime'],
			'end_event'		 => ['type' => 'datetime'],
			'created_at' 	 => ['type' => 'datetime', 'null' => true],
			'updated_at' 	 => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
		$this->forge->createTable('regist_schedule');
    }

    public function down()
    {
        $this->forge->dropTable('regist_schedule');
    }
}
