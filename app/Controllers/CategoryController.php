<?php

namespace App\Controllers;

//use App\Models\CategoryModel;
use CodeIgniter\API\ResponseTrait;

class CategoryController extends BaseController
{
    use ResponseTrait;

    protected $categories = [
        [
            'id' => 1,
            'name' => 'Priere inspirees',
            'thumbnail_url' => 'https://images.unsplash.com/photo-1437603568260-1950d3ca6eab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJheXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=400&q=60'
        ],
        [
            'id' => 2,
            'name' => 'Bonjour chez vous',
            'thumbnail_url' => 'https://images.unsplash.com/photo-1437603568260-1950d3ca6eab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJheXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=400&q=60'
        ],
        [
            'id' => 3,
            'name' => 'Parole de femmes',
            'thumbnail_url' => 'https://images.unsplash.com/photo-1437603568260-1950d3ca6eab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJheXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=400&q=60'
        ],
        [
            'id' => 4,
            'name' => 'Face a Face',
            'thumbnail_url' => 'https://images.unsplash.com/photo-1437603568260-1950d3ca6eab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJheXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=400&q=60'
        ],
    ];

    public function index()
    {
        //$category = new CategoryModel();
        $data = $this->categories;

        return $this->respond($data, 200);
    }
}
