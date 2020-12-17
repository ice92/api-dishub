<?php namespace App\Models;

use CodeIgniter\Model;

class TrayekModel extends Model
{
    /**
     * table name
     */
    protected $table = "trayek";
    protected $primaryKey = "kode";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'kode',
        'jaringan'
    ];
}