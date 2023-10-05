<?php

namespace App\Controllers;
use App\Models\CoverModel;
use CodeIgniter\API\ResponseTrait;

class CoverController extends BaseController
{
    use ResponseTrait;

    protected $helpers = ['form'];

    public function index()
    {
        $cover = new CoverModel();
        $data = $cover->findAll();
        return $this->respond($data, 200);
    }

    public function create()
    {
        return view('cover/create');
    }

    public function add()
    {
        $cover = new CoverModel();
        if (!is_dir('./assets/'))
            mkdir('./assets/');
        $title = $this->request->getPost('name');
        $file = $this->request->getFile('file');
        $fname = $file->getRandomName();
        while (true) {
            $check = $cover->where("url", "assets/{$fname}")->countAllResults();
            if ($check > 0) {
                $fname = $file->getRandomName();
            } else {
                break;
            }
        }
        if ($file->move("assets/", $fname)) {

            if ( $cover->save([
                "title" => $title,
                "url" => "assets/" . $fname
            ])) {
                return redirect('cover/create')->with('success', "Banniere ajouté avec succes");
            } 

        } else {
            return redirect('cover/create')->with('error', "Une erreur s'est produite.");
        }
        return;
    }

    public function edit($id = null)
    {
        $cover = new CoverModel();

        $data['cover'] = $cover->find($id);
        return view('cover/edit', $data);
    }

    public function update($id = null)
    {
        $cover = new CoverModel();
       if (!empty($this->request->getFile('file'))) {
        if (!is_dir('./assets/'))
        mkdir('./assets/');
    $title = $this->request->getPost('name');
    $file = $this->request->getFile('file');
    $fname = $file->getRandomName();
    while (true) {
        $check = $cover->where("url", "assets/{$fname}")->countAllResults();
        if ($check > 0) {
            $fname = $file->getRandomName();
        } else {
            break;
        }
    }
    if ($file->move("assets/", $fname)) {
      
        if (  $cover->update($id,[
            "title" => $title,
            "url" => "assets/" . $fname
        ])) {
            return redirect('cover/create')->with('success', "Banniere modifié avec succes");
        } 

    } else {
        return redirect('cover/create')->with('error', "Une erreur s'est produite.");
    }
       } else {
        $title = $this->request->getPost('name');
        if (  $cover->update($id,[
            "title" => $title
        ])) {
            return redirect('cover/create')->with('success', "Banniere modifié avec succes");
        } 
        else {
            return redirect('cover/create')->with('error', "Une erreur s'est produite.");
        }
       }
       
        return;
    }

    public function delete($id = null)
    {
        $cover = new CoverModel();
        $cover->delete($id);
        return;
    }
}
