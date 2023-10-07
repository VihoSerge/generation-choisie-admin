<?= $this->extend('/layouts/frontend.php') ?>

<?= $this->section('content') ?>
<div class="form-example-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-example-wrap">
                    <div class="cmp-tb-hd">
                        <h2>Modifier un podcast</h2>
                    </div>
                    <form action="<?= base_url('podcast/update/' . $podcast['id']) ?>" method="post">
                        <input type="hidden" name="_method" value="PUT" />
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Nom</label>
                                <div class="nk-int-st">
                                    <input type="text" value="<?= $podcast['name'] ?>" class="form-control input-sm" placeholder="Veuillez saisir le nom du podcast" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Lien du podcast</label>
                                <div class="nk-int-st">
                                    <input type="text" value="<?= $podcast['url'] ?>" class="form-control input-sm" placeholder="Veuillez saisir le lien du podcast" name="url">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Description</label>
                                <!-- <div class="nk-int-st"> -->
                                <textarea id="form7" class="md-textarea form-control" rows="3" name="description" placeholder="Veuillez saisir la description du podcast"><?= $podcast['description'] ?></textarea>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>