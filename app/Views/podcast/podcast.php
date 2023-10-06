<?= $this->extend('\layouts\frontend.php') ?>

<?= $this->section('content') ?>

<?php
        if (session()->getFlashdata('success')) {
        ?>
            <div class="alert-list">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <?= session()->getFlashdata('success'); ?>
                </div>
            </div>
        <?php
        }
        ?>

        <?php
        if (session()->getFlashdata('error')) {
        ?>
            <div class="alert-list">
                <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button><?= session()->getFlashdata('error'); ?>
                </div>
            </div>
        <?php
        }
        ?>
<div class="breadcomb-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcomb-list">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
              <div class="breadcomb-ctn">
                <h2 class="align-center">Podcasts</h2>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
              <div class="breadcomb-report">
                <a href="<?= base_url('podcast/create') ?>"><button data-toggle="tooltip" data-placement="left" title="Ajouter un podcast" class="btn"><i class="notika-icon notika-paperclip"></i>Ajouter</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="data-table-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-list">
          <div class="basic-tb-hd">
            <h2>Liste des podcasts</h2>
            <p>Dans ce tableau se trouve la liste des podcasts ajoutes.</p>
          </div>
          <div class="table-responsive">
            <table id="data-table-basic" class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Noms</th>
                  <th>Urls</th>
                  <th>Descriptions</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0; foreach ($podcast as $podcastItem) : ?>
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
                      <a href="<?= base_url('podcast/edit/' . $podcastItem['id']) ?>"><button class=" btn btn-primary" style="margin-bottom: 3px;"><i class="notika-icon notika-edit"></i></button></a>

                      <button value="<?= $podcastItem['id'] ?>" class="confirm_del_btn btn btn-danger" style="margin-bottom: 3px;"><i class="notika-icon notika-trash"></i></button>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  $(document).ready(function() {
    $('.confirm_del_btn').click(function(e) {
      e.preventDefault();
      var id = $(this).val();

      if (confirm("Voulez vous vraiment supprimer ce podcast?")) {
        $.ajax({
          url: "<?= base_url('podcast/delete/') ?>" + id,
          success: function(response) {
            alert("Podcast supprimé.")
            window.location.reload()
          }
        });
      }
    });
  });
</script>
<?= $this->endSection() ?>