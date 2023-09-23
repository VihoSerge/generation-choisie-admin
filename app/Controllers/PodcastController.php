<?php

namespace App\Controllers;

//use App\Models\PodcastModel;
use CodeIgniter\API\ResponseTrait;

class PodcastController extends BaseController
{
    use ResponseTrait;

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
        // $podcast = new PodcastModel();
        $data = $this->podcast;

        return $this->respond($data, 200);
    }
}
