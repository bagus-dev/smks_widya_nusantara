<?php

namespace App\Validation;

use App\Models\SchoolYearModel;

class CustomRules {
    public function statusYear(string $str, string $fields, array $data)
    {
        if($data['status'] === '1') {
            $yearModel = new SchoolYearModel();
            $search = $yearModel->where('status',1)->asObject()->first();
    
            if($search) {
                if($search->id == $data['id']) {
                    return true;
                }

                return false;
            }
    
            return true;
        }

        return true;
    }
}