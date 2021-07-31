<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class StatistikPengujian extends ResourceController
{
    protected $modelName = 'App\Models\PengujianModel';
    protected $format = 'json';

    /**
     * Index function
     * @method : GET
    */
    public function index()
    {
        
        $builder = $this->model->builder();
        return $this->respond([
            'form'         => 'Jumlah Kendaraan yang Diuji',
            'bulan'         => 'Desember',
            'satuan'        => 'Unit',
            'data'          => $builder->select("jenis as elemen, jumlah, tahun",false)->groupby('tahun')->get()->getResult()
        ], 200);
    }
    public function show($tahun=null)
    {
        
        $builder = $this->model->builder();
        return $this->respond([
            'form'         => 'Jumlah Kendaraan yang Diuji',
            'tahun'         => $tahun,
            'bulan'         => 'Desember',
            'satuan'        => 'Unit',
            'data'          => $builder->select("jenis as elemen, jumlah, ",false)->where('tahun',$tahun)->get()->getResult()
        ], 200);
    }
}