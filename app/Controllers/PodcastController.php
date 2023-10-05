<?php

namespace App\Controllers;
use App\Models\PodcastModel;
use CodeIgniter\API\ResponseTrait;

class PodcastController extends BaseController
{
    use ResponseTrait;
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
            return redirect('podcast/create')->with('error', "Veullez saisir au moins le nom et l'URL");
        }
        $podcast = new PodcastModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'url' => $this->request->getPost('url'),
            'description' => $this->request->getPost('description'),
        ];

        if ($podcast->save($data)) {
            return redirect('podcast/create')->with('success', "Podcast ajouté avec succes");
        } else {
            return redirect('podcast/create')->with('error', "Une erreur s'est produite.");
        }
    }

    public function edit($id = null)
    {
        $podcast = new PodcastModel();
        $data['podcast'] = $podcast->find($id);
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

        if ($podcast->update($id, $data)) {
            return redirect('podcast/edit')->with('success', "Podcast modifié avec succes");
        } else {
            return redirect('podcast/edit')->with('error', "Une erreur s'est produite.");
        }
    }

    public function delete($id = null)
    {
        $podcast = new PodcastModel();
        $podcast->delete($id);
        return;
    }
}
