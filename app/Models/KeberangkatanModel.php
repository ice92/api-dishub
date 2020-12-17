<?php namespace App\Models;

use CodeIgniter\Model;

class KeberangkatanModel extends Model
{
    /**
     * table name
     */
    protected $table = "keberangkatan";


    /**
     * allowed Field
     */
    protected $allowedFields = [
        'nama',
        'penumpang_in',
        'penumpang_out',
        'bulan',
        'tahun'
    ];
}