<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Name of your users table
    protected $primaryKey = 'id'; // Primary key column
    protected $allowedFields = ['email', 'password']; // Fields that can be updated
    protected $useTimestamps = false; // Set to true if your table has created_at/updated_at columns
    protected $useSoftDeletes = false; // Set to true if you are using soft deletes

    protected $validationRules = [];
     protected $validationMessages = [];
     protected $skipValidation = false;
    }

