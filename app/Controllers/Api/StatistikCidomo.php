<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class StatistikCidomo extends ResourceController
{
    protected $modelName = 'App\Models\CidomoModel';
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
            'title'         => 'Data Jumlah Cidomo',
            'bulan'         => 'desember',
            'data'          => $builder->select("kecamatan, tahun, count(*) AS jumlah",false)->groupby('kecamatan','tahun')->get()->getResult()
        ], 200);
    }    
}