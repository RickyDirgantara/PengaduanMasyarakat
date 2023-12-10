<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'Admin'; 
    protected $primaryKey = 'AdminID';
    protected $allowedFields = ['Nama', 'AlamatEmail', 'KataSandi', 'StatusAktif', 'Role'];

    public function getAdmin($email)
    {
        return $this->where('AlamatEmail', $email)->first();
    }
}
