<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';
    protected $usetimestamps = true;
    protected $allowedFields = ['phone', 'email', 'address', 'created_at', 'updated_at'];
}