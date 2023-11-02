<?php

namespace App\Controllers;



use App\Models\ItemModel;
use App\Models\CategoryModel;
use CodeIgniter\API\ResponseTrait;

class ItemController extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $item = new ItemModel();
        $data = $item->findAll();
        return $this->respond($data, 200);
    }

    public function add()
    {
        if ($this->session->get('login') != 'logged') {
            return redirect('user/loginPage');
        }
        if ($this->request->getPost('name') == null || $this->request->getPost('url') == null) {
            return redirect('item')->with('error', "Veuillez saisir au moins le nom et l'URL");
        }
        $item = new ItemModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'url' => $this->request->getPost('url'),
            'description' => $this->request->getPost('description'),
            "categoryid" => $this->request->getPost('programme')
        ];

        if ($item->save($data)) {
            return redirect('item')->with('success', "Vidéo ajoutée avec succès");
        } else {
            return redirect('item')->with('error', "Une erreur s'est produite.");
        }
    }

    public function update($id = null)
    {
        if ($this->session->get('login') != 'logged') {
            return redirect('user/loginPage');
        }
        if ($this->request->getPost('name') && $this->request->getPost('url')) {
            $item = new ItemModel();
            $data = [
                'name' => $this->request->getPost('name'),
                'url' => $this->request->getPost('url'),
                'description' => $this->request->getPost('description'),
                'categoryid' => $this->request->getPost('programme')
            ];

            if ($item->update($id, $data)) {
                return redirect('item')->with('success', "Vidéo modifiée avec succès");
            } else {
                return redirect('item')->with('error', "Une erreur s'est produite.");
            }
        } else {
            return redirect('item')->with('error', "Une erreur s'est produite. Veuillez saisir au moins le nom et l'url de la vidéo pour la modification.");
        }
    }

    public function delete($id = null)
    {
        if ($this->session->get('login') != 'logged') {
            return redirect('user/loginPage');
        }
        $item = new ItemModel();
        if ($item->delete($id)) {
            return redirect('item')->with('success', "Vidéo supprimée avec succès");
        } else {
            return redirect('item')->with('error', "Une erreur s'est produite.");
        }
    }
}
