<?php namespace App\Models;

use CodeIgniter\Model;

class PengujianModel extends Model
{
    /**
     * table name
     */
    protected $table = "pengujian";


    /**
     * allowed Field
     */
    protected $allowedFields = [
        'jenis',
        'jumlah',
        'tahun'
    ];
}