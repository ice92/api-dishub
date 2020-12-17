<?php namespace App\Models;

use CodeIgniter\Model;

class ParkirModel extends Model
{
    /**
     * table name
     */
    protected $table = "parkir";
    protected $primaryKey = "kode";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'kode',
        'kecamatan',
        'desa',
        'titik',
        'jenis'
    ];
}