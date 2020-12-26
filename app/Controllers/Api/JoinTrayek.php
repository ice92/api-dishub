<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class JoinTrayek extends ResourceController
{
    protected $modelName = 'App\Models\JoinTrayekModel';
    protected $format = 'json';

    /**
     * Index function
     * @method : GET
    */
    public function index()
    {
        
        $builder = $this->model->builder();
        return $this->respond([
            'statusCode'    => 200,
            'message'       => 'OK',
            'data'          => $builder->join('trayek','trayek.kode = jumlah_kendaraan.kode')->get()->getResult()
        ], 200);
    }    
}