<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'student_biodata';
    protected $usetimestamps = true;
    protected $allowedFields = [
        'user_id', 'nickname', 'gender', 'place_birth', 'date_birth', 'religion', 'citizenship', 'order_family', 'siblings', 'stepbrosis', 'step_sibling', 'orphans', 'language',
        'address', 'tel', 'live_with', 'distance', 'blood_group', 'disease', 'physical_disorder', 'height', 'weight', 'graduate_from', 'sttb_date', 'sttb_number', 'long_study',
        'from_school', 'reason', 'father_name', 'father_place_birth', 'father_date_birth', 'father_religion', 'father_citizenship', 'father_education', 'father_job', 'father_income', 'father_address',
        'father_tel', 'father_status', 'mother_name', 'mother_place_birth', 'mother_date_birth', 'mother_religion', 'mother_citizenship', 'mother_education', 'mother_job', 'mother_income',
        'mother_address', 'mother_tel', 'mother_status', 'proxy_name', 'proxy_place_birth', 'proxy_date_birth', 'proxy_religion', 'proxy_citizenship', 'proxy_education', 'proxy_job', 'proxy_income',
        'proxy_address', 'proxy_tel', 'proxy_status', 'sport_hobby', 'art_hobby', 'org_hobby', 'other_hobby', 'scholarship_year_1', 'scholarship_class_1', 'scholarship_from_1',
        'scholarship_year_2', 'scholarship_class_2', 'scholarship_from_2', 'scholarship_year_3', 'scholarship_class_3', 'scholarship_from_3', 'created_at', 'updated_at'
    ];
}