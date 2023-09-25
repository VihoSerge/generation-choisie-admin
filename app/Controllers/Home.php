<?php

namespace App\Controllers;

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

    public function index()
    {
        $data['covers'] = $this->covers;
        return view('Home/welcome_message', $data);
    }

    public function podcast()
    {
        $data['podcast'] = $this->podcast;
        return view('Home/podcast', $data);
    }
}
