<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\CoverModel;
use App\Models\ItemModel;
use App\Models\PodcastModel;

class Home extends BaseController
{

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
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
        [
            'id' => 4,
            'title' => 'Cover4',
            'url' => 'https://images.unsplash.com/photo-1499652848871-1527a310b13a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNodXJjaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ],
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
        ]

    ];

    protected $podcast = [
        [
            'id' => 1,
            'name' => 'Podcast1',
            'url' => 'https://www.youtube.com/watch?v=QCgCsBmNG6k&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
        [
            'id' => 2,
            'name' => 'Podcast2',
            'url' => 'https://www.youtube.com/watch?v=UlW_-ZNpUVQ&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
        [
            'id' => 3,
            'name' => 'Podcast3',
            'url' => 'https://www.youtube.com/watch?v=ge-Li4YpEKM&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
        [
            'id' => 4,
            'name' => 'Podcast4',
            'url' => 'https://www.youtube.com/watch?v=U66sqSgn4XE&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
    ];

    protected $item = [
        [
            'id' => 1,
            'name' => 'Item1',
            'url' => 'https://www.youtube.com/watch?v=QCgCsBmNG6k&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
        [
            'id' => 2,
            'name' => 'Item2',
            'url' => 'https://www.youtube.com/watch?v=UlW_-ZNpUVQ&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
        [
            'id' => 3,
            'name' => 'Item3',
            'url' => 'https://www.youtube.com/watch?v=ge-Li4YpEKM&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
        [
            'id' => 4,
            'name' => 'Item4',
            'url' => 'https://www.youtube.com/watch?v=U66sqSgn4XE&pp=ygUQcHJpZXJlIGluc3BpcsOpZQ%3D%3D'
        ],
    ];

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
        $cover = new CoverModel();
        $data['covers'] =  $cover->findAll();
        return view('cover/cover', $data);
    }

    public function podcast()
    {
        $podcast = new PodcastModel();

        $data['podcast'] = $podcast->findAll();
        //return $this->respond($data);
        return view('podcast/podcast', $data);
    }

    public function category()
    {
        $category = new CategoryModel();
        $data['category'] =  $category->findAll();
        return view('category/category', $data);
    }

    public function item()
    {
        $item = new ItemModel();
        $category = new CategoryModel();
        $categories = $category->findAll();
        $array = array();

        foreach ($categories as $value){
            $array[$value['id']] = $value['name'];
        }
        $data['item'] =  $item->findAll();
        $data['category'] = $array;
        return view('item/item', $data);
    }
}
