<?php

namespace App\Models;

use CodeIgniter\Model;

class HeadmasterModel extends Model
{
    protected $table = 'headmaster_welcome';
    protected $usetimestamps = true;
    protected $allowedFields = ['description', 'created_at', 'updated_at'];
}