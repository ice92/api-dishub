<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Kapal extends ResourceController
{
    protected $modelName = 'App\Models\KapalModel';
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
            'data'          => $this->model->orderBy('nama', 'DESC')->findAll()
        ], 200);
    }

    /**
     * show function
     * @method get 
     * @param ID
     */
     public function show($nama = null)
     {
         return $this->respond([
             'statusCode' => 200,
             'message' => 'OK',
             'data' => $this->model->find($nama)
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
                    'nama'      => $json->nama,
                    'pemilik'   => $json->pemilik,
                    'alamat'    => $json->alamat,
                    'bobot'     => $json->bobot,
                    'kapasitas' => $json->kapasitas,
                    'jalur'     => $json->jalur
                ]);
            } else {
                
                //get request from Postman and more
                $post = $this->model->insert([
                    'nama'      => $this->request->getPost('nama'),
                    'pemilik'   => $this->request->getPost('pemilik'),
                    'alamat'    => $this->request->getPost('alamat'),
                    'bobot'     => $this->request->getPost('bobot'),
                    'kapasitas' => $this->request->getPost('kapasitas'),
                    'jalur'     => $this->request->getPost('jalur')
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
    public function update($nama = null)
    {
        //model
        $post = $this->model;

        if($this->request)
        {
            //get request from Vue Js
            if($this->request->getJSON())
            {
                $json = $this->request->getJSON();

                $post->update($json->nama, [
                    'pemilik'   => $json->pemilik,
                    'alamat'    => $json->alamat,
                    'bobot'     => $json->bobot,
                    'kapasitas' => $json->kapasitas,
                    'jalur'     => $json->jalur
                ]);

            } else {
                
                //get request from Postman and more
                $data = $this->request->getRawInput();
                $post->update($nama, $data);
            }

            return $this->respond([
                'statusCode'    => 200,
                'message'       => 'Data Berhasil Diupdate!'
            ],200);
        } 
    }

    /**
     * Delete function
     * @method : DELETE with params primary key
     */
    public function delete($nama = null)
    {
        $post = $this->model->find($nama);
        if($post) { 
            $this->model->delete($nama);

            return $this->respond([
                'statusCode'    => 200,
                'message'       => 'Data Berhasil Dihapus!'
            ],200);
        }
    }
}