<?= $this->extend('/layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container-md mb-5">
  <div class="row justify-content-center align-items-center   rounded-1 py-3 mb-4">
    <!-- <div class="col-md-6 text-center text-md-start"> -->
    <div class="col-md-6 d-md-flex align-items-center text-center text-md-start lead fw-bold">
      La liste des podcasts
    </div>
    <div class="col-md-6 text-center text-md-end">
      <button class="btn btn-primary "><i class="bi bi-plus"></i> Ajouter</button>
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
              <td><?= $podcastItem['url'] ?></td>
              <?php if ($podcastItem['description']) { ?>
                <td><?= $podcastItem['description'] ?></td>
              <?php } else { ?>
                <td>Aucune description</td>
              <?php } ?>
              <td>
                <a href="<?= base_url('podcast/edit/' . $podcastItem['id']) ?>" class=" btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                <a value="<?= $podcastItem['id'] ?>" class="confirm_del_btn btn btn-danger" style="margin-bottom: 3px;"><i class="bi bi-trash-fill"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>

</script>
<?= $this->endSection() ?>