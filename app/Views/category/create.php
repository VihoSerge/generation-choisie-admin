<?= $this->extend('/layouts/frontend.php') ?>

<?= $this->section('content') ?>
<div class="form-example-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-example-wrap">
                    <div class="cmp-tb-hd">
                        <h2>Ajouter un programme</h2>
                    </div>
                    <div class="form-example-int">
                        <div class="form-group">
                            <label>Nom</label>
                            <div class="nk-int-st">
                                <input type="text" class="form-control input-sm" placeholder="Veuillez saisir le nom de la banniere">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="dropdone-nk mg-t-30">
                            <!-- <div class="cmp-tb-hd">
                                <h2>Glisser deposer l'image de la bannier</h2>
                            </div> -->
                            <div id="dropzone1" class="multi-uploader-cs">
                                <form action="/upload" class="dropzone dropzone-nk needsclick" id="demo1-upload">
                                    <div class="dz-message needsclick download-custom">
                                        <i class="notika-icon notika-cloud"></i>
                                        <h2>Deposer l'image ici ou cliquer pour ajouter.</h2>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int mg-t-15">
                        <button class="btn btn-success notika-btn-success">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>