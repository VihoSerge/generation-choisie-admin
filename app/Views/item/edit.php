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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-example-wrap">
                    <div class="cmp-tb-hd">
                        <h2>Ajouter une video</h2>
                    </div>
                    <form action="<?= base_url('item/update/' . $item['id']) ?>" method="post">
                    <input type="hidden" name="_method" value="PUT" />
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Nom</label>
                                <div class="nk-int-st">
                                    <input type="text" value="<?= $item['name'] ?>" class="form-control input-sm" placeholder="Veuillez saisir le nom de la video" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Lien de la video</label>
                                <div class="nk-int-st">
                                    <input type="text" value="<?= $item['url'] ?>" class="form-control input-sm" placeholder="Veuillez saisir le lien de la video" name="url">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int">
                                <div class="form-group bootstrap-select fm-cmp-mg">
                                <label>Programme</label>
                                    <select class="selectpicker" name="programme">
                                    <?php foreach ($category as $categoryItem) : ?>
                                        <?php if ($categoryItem['id'] == $item['categoryid'] ) {?>
                                            <option value="<?= $categoryItem['id'] ?>" selected><?= $categoryItem['name'] ?></option>
                                            <?php } else {?>
											<option value="<?= $categoryItem['id'] ?>"><?= $categoryItem['name'] ?></option>
                                            <?php  }?>
                                    <?php endforeach; ?>
										</select>
                                </div>
                            </div>
                            <div class="form-example-int">
                            <div class="form-group">
                                <label>Description</label>
                                <!-- <div class="nk-int-st"> -->
                                <textarea id="form7" class="md-textarea form-control" rows="3" name="description" placeholder="Veuillez saisir la description de la video"><?= $item['description'] ?></textarea>
                                <!-- </div> -->
                            </div>
                            </div>
                            <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success">Ajouter</button>
                        </div>
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>