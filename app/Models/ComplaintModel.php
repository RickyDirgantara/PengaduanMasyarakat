<?php

namespace App\Models;

use CodeIgniter\Model;

class ComplaintModel extends Model
{
    protected $table = 'Complaints';
    protected $primaryKey = 'ComplaintID';
    protected $allowedFields = ['JudulPengaduan', 'DeskripsiPengaduan', 'TanggalPengaduan', 'StatusPengaduan', 'PrioritasPengaduan', 'UserID'];

    public function getUserComplaints($userID)
    {
        return $this->where('UserID', $userID)->findAll();
    }
}
