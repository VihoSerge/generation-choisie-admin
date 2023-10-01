<?= $this->extend('\layouts\frontend.php') ?>

<?= $this->section('content') ?>
<div class="form-example-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-example-wrap">
                    <div class="cmp-tb-hd">
                        <h2>Ajouter une video</h2>
                    </div>
                    <form action="<?= base_url('item/add') ?>" method="post">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Nom</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Veuillez saisir le nom de la banniere">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Lien de la video</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Veuillez saisir le lien de la video">
                                </div>
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