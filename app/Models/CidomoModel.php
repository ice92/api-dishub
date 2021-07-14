<?php namespace App\Models;

use CodeIgniter\Model;

class CidomoModel extends Model
{
    /**
     * table name
     */
    protected $table = "cidomo";
    protected $primaryKey = 'no_reg';
    protected $protectFields=false;
    /**
     * allowed Field
     */
    // protected $allowedFields = [
    //     'no_reg',
    //     'pemilik',
    //     'kecamatan'
    // ];
}