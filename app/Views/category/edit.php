<?= $this->extend('/layouts/frontend.php') ?>

<?= $this->section('content') ?>
<div class="form-example-area">
    <div class="container">
        <div class="row">
            <div class="form-example-wrap">
                <div class="cmp-tb-hd">
                    <h2>Modifier un programme</h2>
                </div>
                <form action="<?= base_url('category/update/' . $category['id']) ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT" />
                    <div class="form-example-int">
                        <div class="form-group">
                            <label>Nom</label>
                            <div class="nk-int-st">
                                <input type="text" value="<?= $category['name'] ?>" name="name" class="form-control input-sm" placeholder="Veuillez saisir le nom du programme">
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int">
                        <div class="form-group">
                            <label>Image du programme</label>
                            <div class="nk-int-st">
                                <input class="form-control input-sm" type="file" name="file" />
                            </div>
                        </div>
                    </div>


                    <div class="form-example-int mg-t-15">
                        <button class="btn btn-success notika-btn-success">Modifier</button>
                    </div>


                </form>


            </div>
            <!-- </div> -->
        </div>

    </div>
</div>
<?= $this->endSection() ?>