<?php

namespace App\Models;

use CodeIgniter\Model;

class MajorModel extends Model
{
    protected $table = 'majors';
    protected $usetimestamps = true;
    protected $allowedFields = ['name', 'slug', 'description', 'image', 'created_at', 'updated_at'];
}