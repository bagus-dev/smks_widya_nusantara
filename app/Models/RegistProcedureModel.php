<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistProcedureModel extends Model
{
    protected $table = 'regist_procedure';
    protected $usetimestamps = true;
    protected $allowedFields = ['procedure', 'created_at', 'updated_at'];
}