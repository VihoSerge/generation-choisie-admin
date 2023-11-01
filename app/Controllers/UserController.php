<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class UserController extends BaseController
{

  public function index()
  {
    return view('user/login');
  }




  // use ResponseTrait;
  // public function index()
  // {
  //     $podcast = new PodcastModel();
  //     $data = $podcast->findAll();
  //     return $this->respond($data, 200);
  // }


  // public function add()
  // {
  //   if ($this->request->getPost('name') == null || $this->request->getPost('url') == null) {
  //     return redirect('podcast')->with('error', "Veullez saisir au moins le nom et l'URL");
  //   }
  //   $podcast = new PodcastModel();
  //   $data = [
  //     'name' => $this->request->getPost('name'),
  //     'url' => $this->request->getPost('url'),
  //     'description' => $this->request->getPost('description'),
  //   ];

  //   if ($podcast->save($data)) {
  //     return redirect('podcast')->with('success', "Podcast ajouté avec succès");
  //   } else {
  //     return redirect('podcast')->with('error', "Une erreur s'est produite.");
  //   }
  // }

  // public function update($id = null)
  // {
  //   if ($this->request->getPost('name') && $this->request->getPost('url')) {
  //     $podcast = new PodcastModel();
  //     $data = [
  //       'name' => $this->request->getPost('name'),
  //       'url' => $this->request->getPost('url'),
  //       'description' => $this->request->getPost('description')
  //     ];

  //     if ($podcast->update($id, $data)) {
  //       return redirect('podcast')->with('success', "Podcast modifié avec succès");
  //     } else {
  //       return redirect('podcast')->with('error', "Une erreur s'est produite.");
  //     }
  //   } else {
  //     return redirect('podcast')->with('error', "Une erreur s'est produite. Veuillez saisir au moins le nom et l'url du podcast pour la modification.");
  //   }
  // }

  // public function delete($id = null)
  // {
  //   $podcast = new PodcastModel();

  //   if ($podcast->delete($id)) {
  //     return redirect('podcast')->with('success', "Podcast supprimé avec succès");
  //   } else {
  //     return redirect('podcast')->with('error', "Une erreur s'est produite.");
  //   }
  //   return;
  // }
}
