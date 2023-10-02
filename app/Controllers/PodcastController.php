<?php

namespace App\Controllers;

//use App\Models\PodcastModel;

use App\Models\PodcastModel;
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
        $podcast = new PodcastModel();
        $data = $podcast->findAll();
        return $this->respond($data, 200);
    }

    public function create()
    {
        return view('podcast/create');
    }

    public function add()
    {
        if ($this->request->getPost('name') == null || $this->request->getPost('url') == null) {
            return redirect('podcast/create')->with('error', "failed");
        }
        $podcast = new PodcastModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'url' => $this->request->getPost('url'),
            'description' => $this->request->getPost('description'),
        ];

        if ($podcast->save($data)) {
            return redirect('podcast/create')->with('success', "Podcast inserted Successfully");
        } else {
            return redirect('podcast/create')->with('error', "failed");
        }
        //return view('podcast/create', $data);
    }

    public function edit($id = null)
    {
        $podcast = new PodcastModel();

        $data['podcast'] = $podcast->find($id);
        //return $this->respond($data);
        return view('podcast/edit', $data);
    }

    public function update($id = null)
    {
        $podcast = new PodcastModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'url' => $this->request->getPost('url'),
            'description' => $this->request->getPost('description')
        ];

        $podcast->update($id, $data);

        return redirect()->to(base_url('podcast'))->with('status', "Podcast modifié avec succes");
    }

    public function delete($id = null)
    {
        $podcast = new PodcastModel();


        $podcast->delete($id);



        return;
    }
}
