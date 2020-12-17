<?php namespace App\Models;

use CodeIgniter\Model;

class RetribusiModel extends Model
{
    /**
     * table name
     */
    protected $table = "retribusi";


    /**
     * allowed Field
     */
    protected $allowedFields = [
        'nama',
        'retribusi',
        'jenis',
        'bulan',
        'tahun'
    ];
}