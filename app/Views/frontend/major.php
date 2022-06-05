<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col">
                    <h3 class="mb-30 text-center"><?= $major->name ?></h3>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="<?= base_url('assets/img/majors/'.$major->image) ?>" alt="Foto <?= $major->name ?>" class="img-fluid">
                    </div>

                    <?= $major->description ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>