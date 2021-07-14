<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Pad extends ResourceController
{
    protected $modelName = 'App\Models\PadModel';
    protected $format = 'json';

    /**
     * Index function
     * @method : GET
    */
    public function index()
    {
        return $this->respond([
            'statusCode'    => 200,
            'message'       => 'OK',
            'data'          => $this->model->orderBy('jenis_retribusi', 'DESC')->findAll()
        ], 200);
    }
    /**
     * show function
     * @method get 
     * @param ID
     */
    public function show($id = null)
    {
        return $this->respond([
            'statusCode' => 200,
            'message' => 'OK',
            'data' => $this->model->find($id)
        ], 200);
    }
    /**
     * create function
     * @method : POST
     */
    public function create()
    {
        if($this->request)
        {
            //get request from Vue Js
            if($this->request->getJSON()) {
                $json = $this->request->getJSON();
                $post = $this->model->insert([                    
                    'jenis_retribusi'   => $json->jenis_retribusi,
                    'target'            => $json->target,
                    'real'              => $json->real,
                    'bulan'             => $json->bulan,
                    'tahun'             => $json->tahun,
                ]);
            } else {
                
                //get request from Postman and more
                $post = $this->model->insert([
                    'jenis_retribusi'   => $this->request->getPost('jenis_retribusi'),
                    'target'            => $this->request->getPost('target'),
                    'real'              => $this->request->getPost('real'),
                    'bulan'             => $this->request->getPost('bulan'),
                    'tahun'             => $this->request->getPost('tahun'),
                ]);
            
            }

            return $this->respond([
                'statusCode'    => 201,
                'message'       => 'Data Berhasil Disimpan!'
            ], 201);
        }
    }
    /**
     * update function
     * @method : PUT or PATCH
     */
    public function update($no_reg = null)
    {
        //model
        $post = $this->model;

        if($this->request)
        {
            //get request from Vue Js
            if($this->request->getJSON())
            {
                $json = $this->request->getJSON();

                $post->update($json->id, [
                    'jenis_retribusi'   => $json->jenis_retribusi,
                    'target'            => $json->target,
                    'real'              => $json->real,
                    'bulan'             => $json->bulan,
                    'tahun'             => $json->tahun,
                ]);

            } else {
                
                //get request from Postman and more
                $data = $this->request->getRawInput();
                $post->update($id, $data);
            }

            return $this->respond([
                'statusCode'    => 200,
                'message'       => 'Data Berhasil Diupdate!'
            ],200);
        } 
    }

    /**
     * Delete function
     * @method : DELETE with params ID
     */
    public function delete($id = null)
    {
        $post = $this->model->find($id);
        if($post) { 
            $this->model->delete($id);

            return $this->respond([
                'statusCode'    => 200,
                'message'       => 'Data Berhasil Dihapus!'
            ],200);
        }
    }
}