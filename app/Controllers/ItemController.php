<?php

namespace App\Controllers;

use App\Models\ItemModel;
use CodeIgniter\API\ResponseTrait;

class ItemController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $item = new ItemModel();
        $data = $item->findAll();

        return $this->respond($data, 200);
    }
}
