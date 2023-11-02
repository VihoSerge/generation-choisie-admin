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
  <div class="row justify-content-center align-items-center  rounded-1 py-3 mb-4">
    <!-- <div class="col-md-6 text-center text-md-start"> -->
    <div class="col-md-6 d-md-flex align-items-center text-center text-md-start lead fw-bold">
      La liste des programmes
    </div>
    <div class="col-md-6 text-center text-md-end">
      <button class="btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#categoryModalAdding" "><i class=" bi bi-plus"></i> Ajouter</button>
    </div>
  </div>


  <div class="row my-data-div">
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
          foreach ($category as $categoryItem) : ?>
            <tr>
              <td class="my-td_align"><?= ++$i ?></td>
              <td class="my-td_align"><?= $categoryItem['name'] ?></td>
              <td><img src="<?= base_url($categoryItem['thumbnail_url']) ?>" style="width:50px;heigth:50px; object-fit:contain" alt=""></td>
              <td class="my-td_align">
                <a type="button" data-bs-toggle="modal" data-bs-target="<?= '#categoryModalUpdating' . $categoryItem['id'] ?>" class=" btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                <a class="confirm_del_btn btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="<?= '#coverModalDeleting' . $categoryItem['id'] ?>"><i class="bi bi-trash-fill"></i></a>
              </td>
            </tr>

            <!-- Modal for updating -->
            <div class="modal fade" id="<?= 'categoryModalUpdating' . $categoryItem['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Modifier un programme</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url('category/update/' . $categoryItem['id']) ?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="_method" value="PUT" />
                      <div class="mb-3">
                        <label for="name" class="form-label">Libellé</label>

                        <input value="<?= $categoryItem['name'] ?>" type="text" id="name" name="name" class="form-control" placeholder="Nom de la bannière" required>
                      </div>
                      <div class="mb-3">
                        <div class="input-group custom-file-button">
                          <label class="input-group-text" for="inputGroupFile">Image</label>
                          <input type="file" name="file" class="form-control" id="inputGroupFile">
                        </div>
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
            <div class="modal fade" id="<?= 'coverModalDeleting' . $categoryItem['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Supprimer un programme</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Voulez-vous vraiment supprimer le programme : "<?= $categoryItem['name'] ?>" ?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Non</button>
                    <a href="<?= base_url('category/delete/' . $categoryItem['id']) ?>" type="button" class="btn btn-danger">Oui</a>
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
<div class="modal fade" id="categoryModalAdding" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter un programme</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('category/add') ?>" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Libellé:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nom du programme" required>
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

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>

</script>
<?= $this->endSection() ?>