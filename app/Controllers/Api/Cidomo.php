<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Cidomo extends ResourceController
{
    protected $modelName = 'App\Models\CidomoModel';
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
            'data'          => $this->model->orderBy('no_reg', 'DESC')->findAll()
        ], 200);
    }
    /**
     * show function
     * @method get 
     * @param ID
     */
    public function show($no_reg = null)
    {
        return $this->respond([
            'statusCode' => 200,
            'message' => 'OK',
            'data' => $this->model->find($no_reg)
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
                    'no_reg'    => $json->no_reg,
                    'pemilik'   => $json->pemilik,
                    'kecamatan' => $json->kecamatan
                ]);
            } else {
                
                //get request from Postman and more
                $post = $this->model->insert([
                    'no_reg'    => $this->request->getPost('no_reg'),
                    'pemilik'   => $this->request->getPost('pemilik'),
                    'kecamatan' => $this->request->getPost('kecamatan')
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

                $post->update($json->no_reg, [
                    'pemilik'   => $json->pemilik,
                    'kecamatan' => $json->kecamatan
                ]);

            } else {
                
                //get request from Postman and more
                $data = $this->request->getRawInput();
                $post->update($no_reg, $data);
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
    public function delete($no_reg = null)
    {
        $post = $this->model->find($no_reg);
        if($post) { 
            $this->model->delete($no_reg);

            return $this->respond([
                'statusCode'    => 200,
                'message'       => 'Data Berhasil Dihapus!'
            ],200);
        }
    }
}