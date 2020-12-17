<?php namespace App\Models;

use CodeIgniter\Model;

class JumlahKendaraanModel extends Model
{
    /**
     * table name
     */
    protected $table = "jumlah_kendaraan";


    /**
     * allowed Field
     */
    protected $allowedFields = [
        'kode',
        'kendaraan',
        'tahun'
    ];
}