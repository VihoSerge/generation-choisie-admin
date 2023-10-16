<?php

namespace App\Controllers;

//use App\Models\CategoryModel;

use App\Models\CategoryModel;
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
        $category = new CategoryModel();
        $data = $category->findAll();
        return $this->respond($data, 200);
    }

    public function create()
    {
        return view('category/create');
    }

    public function add()
    {
        $category = new CategoryModel();
        $validationRule = [
            'file' => [
                'rules' => [
                    'uploaded[file]',
                    'is_image[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                ],
            ],
        ];
        if (! $this->validate($validationRule)) {
            return redirect('category/create')->with('error', "Erreur lors de l'ajout de l'image. ");
        }
        if (!is_dir('./assets/categories/'))
            mkdir('./assets/categories/');
        $name = $this->request->getPost('name');
        $file = $this->request->getFile('file');
        $fname = $file->getRandomName();
        while (true) {
            $check = $category->where("thumbnail_url", "assets/categories/{$fname}")->countAllResults();
            if ($check > 0) {
                $fname = $file->getRandomName();
            } else {
                break;
            }
        }
        if ($file->move("assets/categories/", $fname)) {

            if ( $category->save([
                "name" => $name,
                "thumbnail_url" => "assets/categories/" . $fname
            ])) {
                return redirect('category/create')->with('success', "Programme ajouté avec succes");
            } 

        } else {
            return redirect('category/create')->with('error', "Une erreur s'est produite.");
        }
        return;
    }

    public function edit($id = null)
    {
        $category = new CategoryModel();

        $data['category'] = $category->find($id);
        return view('category/edit', $data);
    }

    public function update($id = null)
    {
        $category = new CategoryModel();
       if ($_FILES['file']['name']) {
        $validationRule = [
            'file' => [
                'rules' => [
                    'uploaded[file]',
                    'is_image[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                ],
            ],
        ];
        if (! $this->validate($validationRule)) {
            return redirect('category')->with('error', "Erreur lors de l'ajout de l'image. ");
        }
        if (!is_dir('./assets/categories/'))
        mkdir('./assets/categories/');
    $name = $this->request->getPost('name');
    $file = $this->request->getFile('file');
    $fname = $file->getRandomName();
    while (true) {
        $check = $category->where("thumbnail_url", "assets/categories/{$fname}")->countAllResults();
        if ($check > 0) {
            $fname = $file->getRandomName();
        } else {
            break;
        }
    }
    if ($file->move("assets/categories/", $fname)) {
        $fileToDelete = $category->find($id);
        unlink($fileToDelete['url']);
        if (  $category->update($id,[
            "name" => $name,
            "thumbnail_url" => "assets/categories/" . $fname
        ])) {
            return redirect('category')->with('success', "Programme modifié avec succes");
        } 

    } else {
        return redirect('category')->with('error', "Une erreur s'est produite.");
    }
       } else {
        $name = $this->request->getPost('name');
        if (  $category->update($id,[
            "name" => $name
        ])) {
            return redirect('category')->with('success', "Banniere modifié avec succes");
        } 
        else {
            return redirect('category')->with('error', "Une erreur s'est produite.");
        }
       }
       
        return;
    }

    public function delete($id = null)
    {
        $category = new CategoryModel();
        $fileToDelete = $category->find($id);
        unlink($fileToDelete['thumbnail_url']);
        $category->delete($id);
        return;
    }
}
