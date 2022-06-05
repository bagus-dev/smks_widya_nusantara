<?php

namespace App\Models;

use CodeIgniter\Model;

class SchoolYearModel extends Model
{
    protected $table = 'school_year';
    protected $usetimestamps = true;
    protected $allowedFields = ['school_year', 'status', 'created_at', 'updated_at'];
}