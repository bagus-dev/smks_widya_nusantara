<?php

namespace App\Models;

use CodeIgniter\Model;

class VisionMissionModel extends Model
{
    protected $table = 'vision_mission';
    protected $usetimestamps = true;
    protected $allowedFields = ['description', 'created_at', 'updated_at'];
}