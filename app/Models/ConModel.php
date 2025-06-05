<?php

namespace App\Models;

use CodeIgniter\Model;

class ConModel extends Model
{
    protected $table = 'contracts'; 
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'firstname',
        'lastname',
        'fathername',
        'email',
        'dob',
        'phone',
        'company',
        'validfrom',
        'validto',
        'noc',
        'appointment_letter'
    ];
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $useTimestamps = true; 
    protected $useSoftDeletes = false;
}
