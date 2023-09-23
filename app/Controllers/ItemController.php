<?php

namespace App\Controllers;

//use App\Models\ItemModel;
use CodeIgniter\API\ResponseTrait;

class ItemController extends BaseController
{
    use ResponseTrait;

    protected $item = [
        [
            'id' => 1,
            'title' => 'Item1',
            'url' => 'https://www.youtube.com/watch?v=QCgCsBmNG6k&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
        [
            'id' => 2,
            'title' => 'Item2',
            'url' => 'https://www.youtube.com/watch?v=UlW_-ZNpUVQ&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
        [
            'id' => 3,
            'title' => 'Item3',
            'url' => 'https://www.youtube.com/watch?v=ge-Li4YpEKM&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
        [
            'id' => 4,
            'title' => 'Item4',
            'url' => 'https://www.youtube.com/watch?v=U66sqSgn4XE&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
    ];

    public function index()
    {
        // $item = new ItemModel();
        $data = $this->item;

        return $this->respond($data, 200);
    }
}
