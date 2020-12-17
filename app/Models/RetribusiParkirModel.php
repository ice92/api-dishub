<?php namespace App\Models;

use CodeIgniter\Model;

class RetribusiParkirModel extends Model
{
    /**
     * table name
     */
    protected $table = "retribusi_parkir";


    /**
     * allowed Field
     */
    protected $allowedFields = [
        'kode',
        'retribusi',
        'bulan',
        'tahun'
    ];
}