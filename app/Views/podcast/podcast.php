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
      La liste des podcasts
    </div>
    <div class="col-md-6 text-center text-md-end">
      <button class="btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#podcastModalAdding"><i class="bi bi-plus"></i> Ajouter</button>
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
            <th>Descriptions</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;
          foreach ($podcast as $podcastItem) : ?>
            <tr>
              <td><?= ++$i ?></td>
              <td><?= $podcastItem['name'] ?></td>
              <td><?= (strlen($podcastItem['url']) > 20 ? (substr($podcastItem['url'], 0, 20) . "...") : ($podcastItem['url']));  ?></td>
              <?php if ($podcastItem['description']) { ?>
                <td><?php echo (strlen($podcastItem['description']) > 20 ? (substr($podcastItem['description'], 0, 20) . "...") : ($podcastItem['description']));
                    ?></td>
              <?php } else { ?>
                <td>Aucune description</td>
              <?php } ?>
              <td>
                <a type="button" data-bs-toggle="modal" data-bs-target="<?= '#podcastModalUpdating' . $podcastItem['id'] ?>" class=" btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                <a class="confirm_del_btn btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="<?= '#podcastModalDeleting' . $podcastItem['id'] ?>"><i class="bi bi-trash-fill"></i></a>
              </td>
            </tr>

            <!-- Modal updating -->
            <div class="modal fade" id="<?= 'podcastModalUpdating' . $podcastItem['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Modifier un podcast</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url('podcast/update/' . $podcastItem['id']) ?>" method="post">
                      <input type="hidden" name="_method" value="PUT" />
                      <div class="mb-3">
                        <label for="name" class="form-label">Libellé:</label>
                        <input value="<?= $podcastItem['name'] ?>" type="text" id="name" name="name" class="form-control" placeholder="Nom du podcast" required>
                      </div>
                      <div class="mb-3">
                        <label for="lien" class="form-label">Lien:</label>
                        <input value="<?= $podcastItem['url'] ?>" type="text" id="lien" name="url" class="form-control" placeholder="Lien du podcast" required>
                      </div>
                      <div class="mb-3 form-floating">
                        <textarea class="form-control" name="description" id="query" style="height: 140px" placeholder="query"> <?= $podcastItem['description'] ?></textarea>
                        <label for="query">Description du podcast...</label>
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
            <div class="modal fade" id="<?= 'podcastModalDeleting' . $podcastItem['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Supprimer un podacst</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Voulez-vous vraiment supprimer le podcast : "<?= $podcastItem['name'] ?>" ?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Non</button>
                    <a href="<?= base_url('podcast/delete/' . $podcastItem['id']) ?>" type="button" class="btn btn-danger">Oui</a>
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
<div class="modal fade" id="podcastModalAdding" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter un podcast</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('podcast/add') ?>" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Libellé:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nom du podcast" required>
          </div>
          <div class="mb-3">
            <label for="lien" class="form-label">Lien:</label>
            <input type="text" id="lien" name="url" class="form-control" placeholder="Lien du podcast" required>
          </div>
          <div class="mb-3 form-floating">
            <textarea class="form-control" name="description" id="query" style="height: 140px" placeholder="query"></textarea>
            <label for="query">Description du podcast...</label>
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