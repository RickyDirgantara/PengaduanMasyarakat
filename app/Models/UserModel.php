<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'UserID';
    protected $allowedFields = ['Nama', 'AlamatEmail', 'KataSandi', 'StatusAktif'];
}
