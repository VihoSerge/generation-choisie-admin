<?= $this->extend('\layouts\frontend.php') ?>

<?= $this->section('content') ?>
<div class="form-example-area">
    <div class="container">
        <?php
        if (session()->getFlashdata('success')) {
        ?>
            <div class="alert-list">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Le podcast a été ajouté avec succes.
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
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Erreur d'ajout du podcast. Assurez-vous de saisir au moins le lien et le nom du podcast.
                </div>
            </div>
        <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-example-wrap">
                    <div class="cmp-tb-hd">
                        <h2>Ajouter un podcast</h2>
                    </div>
                    <form action="<?= base_url('podcast/add') ?>" method="post">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Nom</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Veuillez saisir le nom du podcast" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Lien du podcast</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Veuillez saisir le lien du podcast" name="url">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Description</label>
                                <!-- <div class="nk-int-st"> -->
                                <textarea id="form7" class="md-textarea form-control" rows="3" name="description" placeholder="Veuillez saisir la description du podcast"></textarea>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>