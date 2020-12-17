<?php namespace App\Models;

use CodeIgniter\Model;

class PelabuhanModel extends Model
{
    /**
     * table name
     */
    protected $table = "pelabuhan";
    protected $primaryKey = "nama";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'nama',
        'kecamatan',
        'desa',
        'jenis',
        'kapal'
    ];
}