<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table = 'about_site';
    protected $usetimestamps = true;
    protected $allowedFields = ['about', 'created_at', 'updated_at'];
}