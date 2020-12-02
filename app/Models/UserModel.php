<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{

    protected $table = 'users';
    protected $allowedFields = ['user_id','full_name','email','password','created_by','is_admin','created_on'];
}