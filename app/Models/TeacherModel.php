<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
    protected $table = 'teacher_list';
    protected $usetimestamps = true;
    protected $allowedFields = ['name', 'position', 'homeroom_status', 'homeroom', 'phone', 'short_desc', 'front_status', 'front_seq', 'image', 'created_at', 'updated_at'];
}