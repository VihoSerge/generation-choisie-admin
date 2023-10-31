<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ItemModel;
use CodeIgniter\API\ResponseTrait;

class CategoryController extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $category = new CategoryModel();
        $data = $category->findAll();
        return $this->respond($data, 200);
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
        if (!$this->validate($validationRule)) {
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

            if ($category->save([
                "name" => $name,
                "thumbnail_url" => "assets/categories/" . $fname
            ])) {
                return redirect('category')->with('success', "Programme ajouté avec succès");
            }
        } else {
            return redirect('category')->with('error', "Une erreur s'est produite.");
        }
        return;
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
            if (!$this->validate($validationRule)) {
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
                unlink($fileToDelete['thumbnail_url']);
                if ($category->update($id, [
                    "name" => $name,
                    "thumbnail_url" => "assets/categories/" . $fname
                ])) {
                    return redirect('category')->with('success', "Programme modifié avec succès");
                }
            } else {
                return redirect('category')->with('error', "Une erreur s'est produite.");
            }
        } else {
            $name = $this->request->getPost('name');
            if ($category->update($id, [
                "name" => $name
            ])) {
                return redirect('category')->with('success', "Programme modifié avec succès");
            } else {
                return redirect('category')->with('error', "Une erreur s'est produite.");
            }
        }

        return;
    }

    public function delete($id = null)
    {
        $category = new CategoryModel();
        $item = new ItemModel();
        $fileToDelete = $category->find($id);
        $data = $item->where('categoryid', $id)->findAll();
        if (!$data) {
            if ($category->delete($id)) {
                unlink($fileToDelete['thumbnail_url']);
                return redirect('category')->with('success', "Programme supprimé avec succès");
            } else {
                return redirect('category')->with('error', "Une erreur s'est produite.");
            }
        }
        return redirect('category')->with('error', "Impossible de supprimer. Il y' a au moins une vidéo reliée à ce programme.");
    }
}
