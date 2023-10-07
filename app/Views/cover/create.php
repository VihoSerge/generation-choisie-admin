<?= $this->extend('/layouts/frontend.php') ?>

<?= $this->section('content') ?>
<div class="form-example-area">
    <div class="container">
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
        <div class="row">
            <div class="form-example-wrap">
                <div class="cmp-tb-hd">
                    <h2>Ajouter une banniere</h2>
                </div>
                <form action="<?= base_url('cover/add') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-example-int">
                        <div class="form-group">
                            <label>Nom</label>
                            <div class="nk-int-st">
                                <input type="text" name="name" class="form-control input-sm" placeholder="Veuillez saisir le nom de la banniere" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int">
                        <div class="form-group">
                            <label>Image de la banniere</label>
                            <div class="nk-int-st">
                                <input class="form-control input-sm" type="file" name="file" required />
                            </div>
                        </div>
                    </div>


                    <div class="form-example-int mg-t-15">
                        <button class="btn btn-success notika-btn-success">Ajouter</button>
                    </div>


                </form>


            </div>
            <!-- </div> -->
        </div>

    </div>
</div>
<?= $this->endSection() ?>