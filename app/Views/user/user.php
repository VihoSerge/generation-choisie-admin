<?= $this->extend('/layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container-md mb-5">
  <?php
  if (session()->getFlashdata('success')) {
  ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('success'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
  }
  ?>

  <?php
  if (session()->getFlashdata('error')) {
  ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('error'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
  }
  ?>
  <div class="row justify-content-center align-items-center   rounded-1 py-3 mb-4">
    <div class="col-md-6 d-md-flex align-items-center text-center text-md-start lead fw-bold">
      La liste des utilisateurs
    </div>
    <div class="col-md-6 text-center text-md-end">
      <button class="btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#userModalAdding"><i class="bi bi-plus"></i> Ajouter</button>
    </div>
  </div>


  <div class="row my-data-div">
    <div class="col-12 table-responsive">
      <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Noms complets</th>
            <th>Emails</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;
          foreach ($user as $userItem) : ?>
            <tr>
              <td class="my-td_align"><?= ++$i ?></td>
              <td class="my-td_align"><?= $userItem['name'] ?></td>
              <td class="my-td_align"><?= $userItem['email'] ?></td>
              <td class="my-td_align">
                <a type="button" data-bs-toggle="modal" data-bs-target="<?= '#userModalUpdating' . $userItem['id'] ?>" class=" btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                <a class="confirm_del_btn btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="<?= '#userModalDeleting' . $userItem['id'] ?>"><i class="bi bi-trash-fill"></i></a>
              </td>
            </tr>
            <!-- Modal updating -->
            <div class="modal fade" id="<?= 'userModalUpdating' . $userItem['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Modifier un utilisateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url('user/update/' . $userItem['id']) ?>" method="post">
                      <input type="hidden" name="_method" value="PUT" />
                      <div class="mb-3">
                        <label for="name" class="form-label">Nom complet:</label>
                        <input value="<?= $userItem['name'] ?>" type="text" id="name" name="name" class="form-control" placeholder="Nom de l'utilisateur" required>
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input value="<?= $userItem['email'] ?>" type="email" id="email" name="email" class="form-control" placeholder="Email de l'utilisateur" required>
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Nouveau mot de passe">
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                      </div>

                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal for deleting -->
            <div class="modal fade" id="<?= 'userModalDeleting' . $userItem['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Supprimer un utilisateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Voulez-vous vraiment supprimer l'utilisateur : "<?= $userItem['name'] ?>" ?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Non</button>
                    <a href="<?= base_url('user/delete/' . $userItem['id']) ?>" type="button" class="btn btn-danger">Oui</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal for adding -->
<div class="modal fade" id="userModalAdding" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter un utilisateur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('user/add') ?>" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Nom:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nom de l'utilisateur" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email de l'utilisateur" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe de l'utilisateur" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>

</script>
<?= $this->endSection() ?>