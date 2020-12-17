<?php namespace App\Models;

use CodeIgniter\Model;

class KendaraanModel extends Model
{
    /**
     * table name
     */
    protected $table = "kendaraan";


    /**
     * allowed Field
     */
    protected $allowedFields = [
        'jenis',
        'jumlah',
        'bulan',
        'tahun'
    ];
}