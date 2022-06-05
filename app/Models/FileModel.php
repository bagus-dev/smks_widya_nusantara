<?php

namespace App\Models;

use CodeIgniter\Model;

class FileModel extends Model
{
    protected $table = 'student_file';
    protected $usetimestamps = true;
    protected $allowedFields = ['user_id', 'certificate', 'skhu', 'family_card', 'created_at', 'updated_at'];
}