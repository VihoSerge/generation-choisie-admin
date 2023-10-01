<?php

namespace App\Controllers;

//use App\Models\CoverModel;
use CodeIgniter\API\ResponseTrait;

class CoverController extends BaseController
{
    use ResponseTrait;

    protected $covers = [
        [
            'id' => 1,
            'title' => 'Cover1',
            'url' => 'https://images.unsplash.com/photo-1529070538774-1843cb3265df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8Y2h1cmNofGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 2,
            'title' => 'Cover2',
            'url' => 'https://images.unsplash.com/photo-1472905981516-5ac09f35b7f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 3,
            'title' => 'Cover3',
            'url' => 'https://images.unsplash.com/photo-1507692049790-de58290a4334?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
    ];

    public function index()
    {
        // $cover = new CoverModel();
        $data = $this->covers;

        return $this->respond($data, 200);
    }

    public function create()
    {
        return view('cover/create');
    }
}
