<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col">
                    <h3 class="mb-30 text-center">Sambutan Kepala Sekolah</h3>

                    <?= $welcome->description ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>