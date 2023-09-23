<?php

namespace App\Controllers;

use App\Models\CoverModel;
use CodeIgniter\API\ResponseTrait;

class CoverController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $cover = new CoverModel();
        $data = $cover->findAll();

        return $this->respond($data, 200);
    }
}
