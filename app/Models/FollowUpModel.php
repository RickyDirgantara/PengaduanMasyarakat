<?php

namespace App\Models;

use CodeIgniter\Model;

class FollowUpModel extends Model
{
    protected $table = 'FollowUps';
    protected $primaryKey = 'FollowUpID';
    protected $allowedFields = ['TanggalTindakLanjut', 'DeskripsiTindakLanjut', 'ComplaintID'];

    // Tambahkan fungsi atau metode model jika diperlukan
}
