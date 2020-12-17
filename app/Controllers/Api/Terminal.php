<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Terminal extends ResourceController
{
    protected $modelName = 'App\Models\TerminalModel';
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
            'data'          => $this->model->orderBy('id', 'DESC')->findAll()
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
                    'nama'          => $json->nama,
                    'kendaraan_in'  => $json->kendaraan_in,
                    'kendaraan_out' => $json->kendaraan_out,
                    'penumpang_in'  => $json->penumpang_in,
                    'penumpang_out' => $json->penumpang_out,
                    'tahun'         => $json->tahun
                ]);
            } else {
                
                //get request from Postman and more
                $post = $this->model->insert([ 
                    'nama'          => $this->request->getPost('nama'),
                    'kendaraan_in'  => $this->request->getPost('kendaraan_in'),
                    'kendaraan_out' => $this->request->getPost('kendaraan_out'),
                    'penumpang_in'  => $this->request->getPost('penumpang_in'),
                    'penumpang_out' => $this->request->getPost('penumpang_out'),
                    'tahun'         => $this->request->getPost('tahun')
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
    public function update($id = null)
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
                    'nama'          => $json->nama,
                    'kendaraan_in'  => $json->kendaraan_in,
                    'kendaraan_out' => $json->kendaraan_out,
                    'penumpang_in'  => $json->penumpang_in,
                    'penumpang_out' => $json->penumpang_out,
                    'tahun'         => $json->tahun
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