<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StudentBiodata extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                    => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true],
            'user_id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'nickname'              => ['type' => 'varchar', 'constraint' => 20],
            'gender'                => ['type' => 'int', 'constraint' => 1],
            'place_birth'           => ['type' => 'varchar', 'constraint' => 50],
            'date_birth'            => ['type' => 'date'],
            'religion'              => ['type' => 'int', 'constraint' => 1],
            'citizenship'           => ['type' => 'varchar', 'constraint' => 50],
            'order_family'          => ['type' => 'int', 'constraint' => 2],
            'siblings'              => ['type' => 'int', 'constraint' => 2],
            'stepbrosis'            => ['type' => 'int', 'constraint' => 2],
            'step_sibling'          => ['type' => 'int', 'constraint' => 2],
            'orphans'               => ['type' => 'int', 'constraint' => 1],
            'language'              => ['type' => 'varchar', 'constraint' => 50],
            'address'               => ['type' => 'varchar', 'constraint' => 255],
            'tel'                   => ['type' => 'varchar', 'constraint' => 13],
            'live_with'             => ['type' => 'int', 'constraint' => 1],
            'distance'              => ['type' => 'double'],
            'blood_group'           => ['type' => 'int', 'constraint' => 1],
            'disease'               => ['type' => 'varchar', 'constraint' => 255],
            'physical_disorder'     => ['type' => 'varchar', 'constraint' => 255],
            'height'                => ['type' => 'int', 'constraint' => 2],
            'weight'                => ['type' => 'int', 'constraint' => 3],
            'graduate_from'         => ['type' => 'varchar', 'constraint' => 255],
            'sttb_date'             => ['type' => 'date'],
            'sttb_number'           => ['type' => 'varchar', 'constraint' => 50],
            'long_study'            => ['type' => 'int', 'constraint' => 1],
            'from_school'           => ['type' => 'varchar', 'constraint' => 255],
            'reason'                => ['type' => 'varchar', 'constraint' => 255],
            'father_name'           => ['type' => 'varchar', 'constraint' => 255],
            'father_place_birth'    => ['type' => 'varchar', 'constraint' => 50],
            'father_date_birth'     => ['type' => 'date'],
            'father_religion'       => ['type' => 'int', 'constraint' => 1],
            'father_citizenship'    => ['type' => 'varchar', 'constraint' => 50],
            'father_education'      => ['type' => 'varchar', 'constraint' => 50],
            'father_job'            => ['type' => 'varchar', 'constraint' => 255],
            'father_income'         => ['type' => 'int', 'constraint' => 1],
            'father_address'        => ['type' => 'varchar', 'constraint' => 255],
            'father_tel'            => ['type' => 'varchar', 'constraint' => 13],
            'father_status'         => ['type' => 'int', 'constraint' => 1],
            'mother_name'           => ['type' => 'varchar', 'constraint' => 255],
            'mother_place_birth'    => ['type' => 'varchar', 'constraint' => 50],
            'mother_date_birth'     => ['type' => 'date'],
            'mother_religion'       => ['type' => 'int', 'constraint' => 1],
            'mother_citizenship'    => ['type' => 'varchar', 'constraint' => 50],
            'mother_education'      => ['type' => 'varchar', 'constraint' => 50],
            'mother_job'            => ['type' => 'varchar', 'constraint' => 255],
            'mother_income'         => ['type' => 'int', 'constraint' => 1],
            'mother_address'        => ['type' => 'varchar', 'constraint' => 255],
            'mother_tel'            => ['type' => 'varchar', 'constraint' => 13],
            'mother_status'         => ['type' => 'int', 'constraint' => 1],
            'proxy_name'            => ['type' => 'varchar', 'constraint' => 255],
            'proxy_place_birth'     => ['type' => 'varchar', 'constraint' => 50],
            'proxy_date_birth'      => ['type' => 'date'],
            'proxy_religion'        => ['type' => 'int', 'constraint' => 1],
            'proxy_citizenship'     => ['type' => 'varchar', 'constraint' => 50],
            'proxy_education'       => ['type' => 'varchar', 'constraint' => 50],
            'proxy_job'             => ['type' => 'varchar', 'constraint' => 255],
            'proxy_income'          => ['type' => 'int', 'constraint' => 1],
            'proxy_address'         => ['type' => 'varchar', 'constraint' => 255],
            'proxy_tel'             => ['type' => 'varchar', 'constraint' => 13],
            'proxy_status'          => ['type' => 'int', 'constraint' => 1],
            'sport_hobby'           => ['type' => 'varchar', 'constraint' => 255],
            'art_hobby'             => ['type' => 'varchar', 'constraint' => 255],
            'org_hobby'             => ['type' => 'varchar', 'constraint' => 255],
            'other_hobby'           => ['type' => 'varchar', 'constraint' => 255],
            'scholarship_year_1'    => ['type' => 'year'],
            'scholarship_class_1'   => ['type' => 'int', 'constraint' => 1],
            'scholarship_from_1'    => ['type' => 'varchar', 'constraint' => 100],
            'scholarship_year_2'    => ['type' => 'year'],
            'scholarship_class_2'   => ['type' => 'int', 'constraint' => 1],
            'scholarship_from_2'    => ['type' => 'varchar', 'constraint' => 100],
            'scholarship_year_3'    => ['type' => 'year'],
            'scholarship_class_3'   => ['type' => 'int', 'constraint' => 1],
            'scholarship_from_3'    => ['type' => 'varchar', 'constraint' => 100],
            'created_at'            => ['type' => 'datetime'],
            'updated_at'            => ['type' => 'datetime']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
		$this->forge->createTable('student_biodata', true);
    }

    public function down()
    {
        $this->forge->dropForeignKey('student_biodata','student_biodata_user_id_foreign');
        $this->forge->dropTable('student_biodata',true);
    }
}
