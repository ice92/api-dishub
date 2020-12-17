<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Trayek extends ResourceController
{
    protected $modelName = 'App\Models\TrayekModel';
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
            'data'          => $this->model->orderBy('kode', 'DESC')->findAll()
        ], 200);
    }

    /**
     * show function
     * @method get 
     * @param ID
     */
    public function show($kode = null)
    {
        return $this->respond([
            'statusCode' => 200,
            'message' => 'OK',
            'data' => $this->model->find($kode)
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
                    'kode'      => $json->kode,
                    'jaringan'  => $json->jaringan,
                ]);
            } else {
                
                //get request from Postman and more
                $post = $this->model->insert([ 
                    'kode'      => $this->request->getPost('kode'),
                    'jaringan'  => $this->request->getPost('jaringan')
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

                $post->update($json->kode, [                    
                    'jaringan'  => $json->jaringan,
                ]);

            } else {
                
                //get request from Postman and more
                $data = $this->request->getRawInput();
                $post->update($kode, $data);
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
    public function delete($kode = null)
    {
        $post = $this->model->find($kode);
        if($post) { 
            $this->model->delete($kode);

            return $this->respond([
                'statusCode'    => 200,
                'message'       => 'Data Berhasil Dihapus!'
            ],200);
        }
    }
}