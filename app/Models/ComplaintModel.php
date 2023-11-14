<?php

namespace App\Models;

use CodeIgniter\Model;

class ComplaintModel extends Model
{
    protected $table = 'complaints';
    protected $primaryKey = 'ComplaintID';
    protected $allowedFields = ['JudulPengaduan', 'DeskripsiPengaduan', 'TanggalPengaduan', 'StatusPengaduan', 'PrioritasPengaduan', 'UserID', 'KategoriPengaduan'];

 
}
