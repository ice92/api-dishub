<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class JoinKeberangkatan extends ResourceController
{
    protected $modelName = 'App\Models\KapalModel';
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
            'data'          => $builder->join('keberangkatan','keberangkatan.nama = kapal.nama')->get()->getResult()
        ], 200);
    }    
}