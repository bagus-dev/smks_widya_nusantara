<?php

namespace App\Models;

use CodeIgniter\Model;

class ScheduleModel extends Model
{
    protected $table = 'regist_schedule';
    protected $usetimestamps = true;
    protected $allowedFields = ['title', 'start_event', 'end_event', 'created_at', 'updated_at'];
}