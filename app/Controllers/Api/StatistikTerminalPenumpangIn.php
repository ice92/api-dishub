<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class StatistikTerminalPenumpangIn extends ResourceController
{
    protected $modelName = 'App\Models\TerminalModel';
    protected $format = 'json';

    /**
     * Index function
     * @method : GET
    */
    public function index()
    {        
        $builder = $this->model->builder();
        return $this->respond([
            'form'         => 'Penumpang Melalui Terminal Tipe C',
            'bulan'         => 'Desember',
            'satuan'        => 'Unit',
            'data'          => $builder->select("nama as elemen, penumpang_in AS jumlah, tahun",false)->get()->getResult()
        ], 200);
    }
    public function show($data=null)
    {        
        $builder = $this->model->builder();
        return $this->respond([
            'form'         => 'Penumpang Melalui Terminal Tipe C',
            'tahun'         => $tahun,
            'bulan'         => 'Desember',
            'satuan'        => 'Unit',
            'data'          => $builder->select("nama as elemen, penumpang_out AS jumlah",false)->groupby('tahun')->get()->getResult()
        ], 200);
    }
}