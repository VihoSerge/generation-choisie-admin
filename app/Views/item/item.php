<?= $this->extend('\layouts\frontend.php') ?>

<?= $this->section('content') ?>

<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-ctn">
                                <h2 class="align-center">Videos</h2>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <a href="<?= base_url('item/create') ?>"><button data-toggle="tooltip" data-placement="left" title="Ajouter une video" class="btn"><i class="notika-icon notika-paperclip"></i>Ajouter</button></a>
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
                        <h2>Liste des videos</h2>
                        <p>Dans ce tableau se trouve la liste des videos ajoutees.</p>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Noms</th>
                                    <th>Urls</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($item as $singleItem) : ?>
                                    <tr>
                                        <td><?= $singleItem['id'] ?></td>
                                        <td><?= $singleItem['name'] ?></td>
                                        <td><?= substr($singleItem['url'], 0, 40) ?>...</td>
                                        <td>
                                            <button class=" btn btn-primary" style="margin-bottom: 3px;"><i class="notika-icon notika-edit"></i></button>
                                            <button class=" btn btn-danger" style="margin-bottom: 3px;"><i class="notika-icon notika-trash"></i></button>
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