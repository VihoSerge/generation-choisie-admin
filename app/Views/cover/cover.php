<?= $this->extend('/layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container-md mb-5">
  <div class="row justify-content-center align-items-center   py-3 mb-4">
    <!-- <div class="col-md-6 text-center text-md-start"> -->
    <div class="col-md-6 d-md-flex align-items-center text-center text-md-start lead fw-bold">
      La liste des bannières
    </div>
    <div class="col-md-6 text-center text-md-end">
      <button class="btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#coverModalAdding"><i class="bi bi-plus"></i>Ajouter</button>
    </div>
  </div>


  <div class="row">
    <div class="col-12 table-responsive">
      <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Noms</th>
            <th>Images</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;
          foreach ($covers as $cover) : ?>
            <tr>
              <td><?= ++$i ?></td>
              <td><?= $cover['title'] ?></td>
              <td><img src="<?= base_url($cover['url']) ?>" style="width:4rem;heigth:4rem; object-fit:contain" alt=""></td>
              <td>
                <a href="<?= base_url('cover/edit/' . $cover['id']) ?>" class=" btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#coverModalUpdating"><i class="bi bi-pencil-square"></i></a>
                <a value="<?= $cover['id'] ?>" class="confirm_del_btn btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#coverModalDeleting"><i class="bi bi-trash-fill"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal for adding -->
<div class="modal fade" id="coverModalAdding" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter une bannière</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('cover/add') ?>" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Libellé</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nom de la bannière" required>
          </div>
          <div class="mb-3">
            <div class="input-group custom-file-button">
              <label class="input-group-text" for="inputGroupFile">Image</label>
              <input type="file" name="file" class="form-control" id="inputGroupFile">
            </div>
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

<!-- Modal for updating -->
<div class="modal fade" id="coverModalUpdating" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modifier une bannière</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>

          <div class="mb-3">
            <label for="name" class="form-label">Libellé</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nom de la bannière" required>
          </div>
          <div class="input-group">
            <span class="input-group-text">Ajouter une image</span>
            <label class="form-control" tabindex="0">Cliquer pour Ajouter
            </label>
            <input type="file" class="invisible">

          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Modifier</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for deleting -->
<div class="modal fade" id="coverModalDeleting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer une bannière</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Voulez-vous vraiment supprimer cette bannière?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Non</button>
        <button type="button" class="btn btn-danger">Oui</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>

</script>
<?= $this->endSection() ?>