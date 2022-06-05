<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistreqModel extends Model
{
    protected $table = 'regist_req';
    protected $usetimestamps = true;
    protected $allowedFields = ['name', 'created_at', 'updated_at'];
}