<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class UserController extends BaseController
{

  private $DEFAULT_PASSWORD = "HelloW@rldFrom@nother#Planet1234IntheUniversPFFGE@#%%^";

  public function index()
  {
    return view('user/login');
  }




  // use ResponseTrait;
  public function login()
  {
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');

    $user = new UserModel();
    $data = $user->where('email', $email)->findAll();

    if ($data) {
      if (password_verify($password, $data[0]['password'])) {
        return redirect('/')->with('success', "Connexion réussie. Bienvenue, " . $data[0]['name']);
      } else {
        return redirect('user/loginPage')->with('error', "Email ou mot de passe incorrect.");
      }
    } else {
      return redirect('user/loginPage')->with('error', "Cette adresse email n'existe pas. Veuillez créer un compte.");
    }
  }


  public function add()
  {
    $user = new UserModel();

    if ($this->request->getPost('name') == null || $this->request->getPost('email') == null || $this->request->getPost('password') == null) {
      return redirect('person')->with('error', "Veuillez saisir tous les champs");
    }

    $email = $this->request->getVar('email');
    $data = $user->where('email', $email)->findAll();
    if ($data) {
      return redirect('person')->with('error', "Cet email existe déjà. Veuillez en choisir un autre.");
    }

    $password = $this->request->getVar('password');
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $data = [
      'name' => $this->request->getPost('name'),
      'email' => $this->request->getPost('email'),
      'password' => $hash,
    ];

    if ($user->save($data)) {
      return redirect('person')->with('success', "Utilisateur ajouté avec succès");
    } else {
      return redirect('person')->with('error', "Une erreur s'est produite.");
    }
  }

  public function update($id = null)
  {
    $user = new UserModel();
    $email = $this->request->getVar('email');
    $data = $user->where('email', $email)->findAll();


    if ($data && $data[0]['id'] != $id) {
      return redirect('person')->with('error', "Cet email existe déjà. Veuillez en choisir un autre.");
    }
    if ($this->request->getPost('name') != null && $this->request->getPost('email') != null &&  $this->request->getPost('password') == null) {

      $user = new UserModel();
      $data = [
        'name' => $this->request->getPost('name'),
        'email' => $this->request->getPost('email'),
      ];
    } else if ($this->request->getPost('name') != null && $this->request->getPost('email') != null && $this->request->getPost('password') != null) {

      $password = $this->request->getVar('password');
      $hash = password_hash($password, PASSWORD_BCRYPT);
      $user = new UserModel();
      $data = [
        'name' => $this->request->getPost('name'),
        'email' => $this->request->getPost('email'),
        'password' => $hash,
      ];
    } else {
      return redirect('person')->with('error', "Une erreur s'est produite.");
    }
    if ($user->update($id, $data)) {
      return redirect('person')->with('success', "Utilisateur modifié avec succès");
    } else {
      return redirect('person')->with('error', "Une erreur s'est produite. Veuillez saisir au moins le nom et l'email");
    }
  }

  public function delete($id = null)
  {
    $user = new UserModel();

    if ($user->delete($id)) {
      return redirect('person')->with('success', "Utilisateur supprimé avec succès");
    } else {
      return redirect('person')->with('error', "Une erreur s'est produite.");
    }
    return;
  }
}
