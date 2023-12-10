<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'UserID';
    protected $allowedFields = ['Nama', 'AlamatEmail', 'KataSandi', 'StatusAktif'];


    public function getAllUsers($userID)
    {
        return $this->where('UserID', $userID)->findAll();
    }
}