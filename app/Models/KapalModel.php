<?php namespace App\Models;

use CodeIgniter\Model;

class KapalModel extends Model
{
    /**
     * table name
     */
    protected $table = "kapal";
    protected $primaryKey = 'nama';

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'nama',
        'pemilik',
        'alamat',
        'bobot',
        'kapasitas',
        'jalur',
        'pelabuhan'
    ];
}