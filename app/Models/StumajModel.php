<?php

namespace App\Models;

use CodeIgniter\Model;

class StumajModel extends Model
{
    protected $table = 'student_major';
    protected $usetimestamps = true;
    protected $allowedFields = ['user_id', 'major_id', 'reason', 'created_at', 'updated_at'];
}