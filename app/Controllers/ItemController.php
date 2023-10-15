<?php

namespace App\Controllers;



use App\Models\ItemModel;
use App\Models\CategoryModel;
use CodeIgniter\API\ResponseTrait;

class ItemController extends BaseController
{
    use ResponseTrait;

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

    public function index()
    {
        // $item = new ItemModel();
        $data = $this->item;

        return $this->respond($data, 200);
    }

    public function create()
    {
        $category = new CategoryModel();
        $data['category'] = $category->findAll();
        return view('item/create',$data);
    }

    public function add()
    {
        if ($this->request->getPost('name') == null || $this->request->getPost('url') == null) {
            return redirect('item/create')->with('error', "Veuillez saisir au moins le nom et l'URL");
        }
        $item = new ItemModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'url' => $this->request->getPost('url'),
            'description' => $this->request->getPost('description'),
            "categoryid" => $this->request->getPost('programme')
        ];

        if ($item->save($data)) {
            return redirect('item/create')->with('success', "Vidéo ajoutée avec succes");
        } else {
            return redirect('item/create')->with('error', "Une erreur s'est produite.");
        }
    }
}
