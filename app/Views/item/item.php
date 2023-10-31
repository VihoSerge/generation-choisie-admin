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
    <!-- <div class="col-md-6 text-center text-md-start"> -->
    <div class="col-md-6 d-md-flex align-items-center text-center text-md-start lead fw-bold">
      La liste des vidéos
    </div>
    <div class="col-md-6 text-center text-md-end">
      <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#itemModalAdding"><i class="bi bi-plus"></i> Ajouter</button>
    </div>
  </div>


  <div class="row my-data-div">
    <div class="col-12 table-responsive">
      <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Noms</th>
            <th>Liens</th>
            <th>Programmes</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;
          foreach ($item as $singleItem) : ?>
            <tr>
              <td><?= ++$i ?></td>
              <td><?= $singleItem['name'] ?></td>
              <td><?= (strlen($singleItem['url']) > 20 ? (substr($singleItem['url'], 0, 20) . "...") : ($singleItem['url']));  ?></td>
              <td><?= $category[$singleItem['categoryid']] ?></td>
              <td>
                <a href="<?= base_url('item/edit/' . $singleItem['id']) ?>" class=" btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                <a class="confirm_del_btn btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="<?= '#itemModalDeleting' . $singleItem['id'] ?>"><i class="bi bi-trash-fill"></i></a>
              </td>
            </tr>


            <!-- Modal for deleting -->
            <div class="modal fade" id="<?= 'itemModalDeleting' . $singleItem['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Supprimer une vidéo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Voulez-vous vraiment supprimer la vidéo : "<?= $singleItem['name'] ?>" ?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Non</button>
                    <a href="<?= base_url('item/delete/' . $singleItem['id']) ?>" type="button" class="btn btn-danger">Oui</a>
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
<div class="modal fade" id="itemModalAdding" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter une vidéo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('item/add') ?>" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Libellé:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nom de la vidéo" required>
          </div>
          <div class="mb-3">
            <label for="lien" class="form-label">Lien:</label>
            <input type="text" id="lien" name="url" class="form-control" placeholder="Lien de la vidéo" required>
          </div>
          <div class="mb-3 input-group">
            <span class="input-group-text">
              Programme
            </span>
            <select class="form-select" id="subject" name="programme">
              <?php foreach ($categories as $categoryItem) : ?>
                <option value="<?= $categoryItem['id'] ?>"><?= $categoryItem['name'] ?></option>
              <?php endforeach; ?>

            </select>
          </div>

          <div class="mb-3 form-floating">
            <textarea class="form-control" name="description" id="query" style="height: 140px" placeholder="query"></textarea>
            <label for="query">Description de la vidéo...</label>
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