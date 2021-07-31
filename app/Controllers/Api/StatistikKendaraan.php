<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class StatistikKendaraan extends ResourceController
{
    protected $modelName = 'App\Models\KendaraanModel';
    protected $format = 'json';

    /**
     * Index function
     * @method : GET
    */
    public function index()
    {        
        $builder = $this->model->builder();
        return $this->respond([
            'form'         => 'Jumlah Kendaraan Wajib Uji',
            'bulan'         => 'Desember',
            'satuan'        => 'Unit',
            'data'          => $builder->select("kecamatan as elemen, count(*) AS jumlah, tahun",false)->groupby('kecamatan','tahun')->get()->getResult()
        ], 200);
    }
    public function show($tahun=null)
    {        
        $builder = $this->model->builder();
        return $this->respond([
            'form'         => 'Jumlah Kendaraan Wajib Uji',
            'tahun'         => $tahun,
            'bulan'         => 'Desember',
            'satuan'        => 'Unit',
            'data'          => $builder->select("jenis as elemen, jumlah, ",false)->where('tahun',$tahun)->get()->getResult()
        ], 200);
    }
}