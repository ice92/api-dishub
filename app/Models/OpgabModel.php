<?php namespace App\Models;

use CodeIgniter\Model;

class OpgabModel extends Model
{
    /**
     * table name
     */
    protected $table = "opgab";


    /**
     * allowed Field
     */
    protected $allowedFields = [
        'nama',
        'pelanggaran',
        'lokasi',
        'tanggal',
        'status'
    ];
}