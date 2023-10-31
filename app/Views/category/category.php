<?= $this->extend('/layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container-md mb-5">
  <div class="row justify-content-center align-items-center  rounded-1 py-3 mb-4">
    <!-- <div class="col-md-6 text-center text-md-start"> -->
    <div class="col-md-6 d-md-flex align-items-center text-center text-md-start lead fw-bold">
      La liste des programmes
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
            <th>Images</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;
          foreach ($category as $categoryItem) : ?>
            <tr>
              <td><?= ++$i ?></td>
              <td><?= $categoryItem['name'] ?></td>
              <td><img src="<?= base_url($categoryItem['thumbnail_url']) ?>" style="width:50px;heigth:50px; object-fit:contain" alt=""></td>
              <td>
                <a href="<?= base_url('category/edit/' . $categoryItem['id']) ?>" class=" btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                <a value="<?= $categoryItem['id'] ?>" class="confirm_del_btn btn btn-danger" style="margin-bottom: 3px;"><i class="bi bi-trash-fill"></i></a>
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