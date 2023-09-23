<?php

namespace App\Controllers;

//use App\Models\PodcastModel;
use CodeIgniter\API\ResponseTrait;

class PodcastController extends BaseController
{
    use ResponseTrait;


    public function index()
    {
        // $podcast = new PodcastModel();
        // $data = $podcast->findAll();

        // return $this->respond($data, 200);
    }
}
