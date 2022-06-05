<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AboutSite extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true],
            'about'         => ['type' => 'varchar', 'constraint' => 255],
            'created_at'    => ['type' => 'datetime'],
            'updated_at'    => ['type' => 'datetime']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('about_site');
    }

    public function down()
    {
        $this->forge->dropTable('about_site');
    }
}
