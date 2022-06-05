<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col">
                    <h3 class="mb-30 text-center">Daftar Guru</h3>
                    <p class="text-center">Berikut adalah daftar guru di SMKS Widya Nusantara</p>

                    <div class="row mt-5">
                        <?php foreach($teachers as $t) { ?>
                            <div class="col-sm-6 col-lg-3">
                            <img src="<?= base_url('assets/img/teachers/'.$t->image) ?>" alt="Foto Guru" class="img-fluid">
                                <div class="w-100 d-flex justify-content-center">
                                    <div class="card card-team border">
                                        <div class="card-body text-center">
                                            <h3 class="text-dark mt-3 text-uppercase"><?= $t->name ?></h3>
                                            <h5 class="mt-3"><?= $t->position ?></h5>
                                            <p class="text-dark mt-3 mb-4"><i>
                                                <?php
                                                    if(strlen($t->short_desc) > 100) {
                                                        echo substr($t->short_desc,0,100);
                                                    } else {
                                                        echo $t->short_desc;
                                                    }
                                                ?>
                                            </i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>