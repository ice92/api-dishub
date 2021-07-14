<?php namespace App\Models;

use CodeIgniter\Model;

class PadModel extends Model
{
    /**
     * table name
     */
    protected $table = "pad";
    protected $primaryKey = 'id';
    // protected $protectFields=false;
    /**
     * allowed Field
     */
    protected $allowedFields = [
        'jenis_retribusi',
        'target',
        'real',
        'bulan',
        'tahun'
    ];
}