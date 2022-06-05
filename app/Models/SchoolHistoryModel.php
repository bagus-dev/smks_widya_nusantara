<?php

namespace App\Models;

use CodeIgniter\Model;

class SchoolHistoryModel extends Model
{
    protected $table = 'school_history';
    protected $usetimestamps = true;
    protected $allowedFields = ['description', 'created_at', 'updated_at'];
}