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


    public function add()
    {
        if ($this->session->get('login') != 'logged') {
            return redirect('user/loginPage');
        }
        $cover = new CoverModel();
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
            return redirect('/')->with('error', "Erreur lors de l'ajout de l'image. ");
        }
        if (!is_dir('./assets/covers'))
            mkdir('./assets/covers');
        $title = $this->request->getPost('name');
        $file = $this->request->getFile('file');
        $fname = $file->getRandomName();
        while (true) {
            $check = $cover->where("url", "assets/covers/{$fname}")->countAllResults();
            if ($check > 0) {
                $fname = $file->getRandomName();
            } else {
                break;
            }
        }
        if ($file->move("assets/covers/", $fname)) {

            if ($cover->save([
                "title" => $title,
                "url" => "assets/covers/" . $fname
            ])) {
                return redirect('/')->with('success', "Bannière ajoutée avec succès");
            }
        } else {
            return redirect('/')->with('error', "Une erreur s'est produite.");
        }
        return;
    }

    public function update($id = null)
    {
        if ($this->session->get('login') != 'logged') {
            return redirect('user/loginPage');
        }
        $cover = new CoverModel();
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
                return redirect('/')->with('error', "Erreur lors de l'ajout de l'image. ");
            }
            if (!is_dir('./assets/covers/'))
                mkdir('./assets/covers/');
            $title = $this->request->getPost('name');
            $file = $this->request->getFile('file');
            $fname = $file->getRandomName();
            while (true) {
                $check = $cover->where("url", "assets/covers/{$fname}")->countAllResults();
                if ($check > 0) {
                    $fname = $file->getRandomName();
                } else {
                    break;
                }
            }
            if ($file->move("assets/covers/", $fname)) {
                $fileToDelete = $cover->find($id);
                unlink($fileToDelete['url']);
                if ($cover->update($id, [
                    "title" => $title,
                    "url" => "assets/covers/" . $fname
                ])) {
                    return redirect('/')->with('success', "Bannière modifiée avec succès");
                }
            } else {
                return redirect('/')->with('error', "Une erreur s'est produite.");
            }
        } else {
            $title = $this->request->getPost('name');
            if ($cover->update($id, [
                "title" => $title
            ])) {
                return redirect('/')->with('success', "Bannière modifiée avec succès");
            } else {
                return redirect('/')->with('error', "Une erreur s'est produite.");
            }
        }

        return;
    }

    public function delete($id = null)
    {
        if ($this->session->get('login') != 'logged') {
            return redirect('user/loginPage');
        }
        $cover = new CoverModel();
        $fileToDelete = $cover->find($id);
        if ($cover->delete($id)) {
            unlink($fileToDelete['url']);
            return redirect('/')->with('success', "Bannière supprimée avec succès");
        } else {
            return redirect('/')->with('error', "Une erreur s'est produite.");
        }
    }
}
