<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Padl extends ResourceController
{
    protected $modelName = 'App\Models\PadlModel';
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
            'data'          => $builder->select('sum(pad.real) as r, sum(pad.target) as t')->where('tahun', date("Y"))->get()->getResult()
        ], 200);
    }    
}