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
            'form'         => 'Data Jumlah Cidomo',
            'bulan'         => 'desember',
            'satuan'          => 'Unit',
            'data'          => $builder->select("kecamatan as elemen, count(*) AS jumlah",false)->groupby('kecamatan','tahun')->get()->getResult()
        ], 200);
    }    
}