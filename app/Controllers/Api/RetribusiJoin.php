<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class RetribusiJoin extends ResourceController
{
    protected $modelName = 'App\Models\RetribusiJoinModel';
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
            'data'          => $builder->join('parkir','parkir.kode = retribusi_parkir.kode')->get()->getResult()
        ], 200);
    }    
}