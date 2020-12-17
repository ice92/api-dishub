<?php namespace App\Models;

use CodeIgniter\Model;

class TerminalModel extends Model
{
    /**
     * table name
     */
    protected $table = "terminal";


    /**
     * allowed Field
     */
    protected $allowedFields = [
        'nama',
        'kendaraan_in',
        'kendaraan_out',
        'penumpang_in',
        'penumpang_out',
        'tahun'
    ];
}