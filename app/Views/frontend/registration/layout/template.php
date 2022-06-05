<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col-6 mt-5">
                    <h2 class="mb-30 text-center"><?= $sub_title ?>:</h2>
                </div>
                <div class="col-6 mt-5">
                    <h2 class="text-secondary text-center">Step <?= $step ?>/3</h2>
                </div>
                <div class="col-12 mb-30">
                    <ul id="progressbar">
                        <div class="d-flex justify-content-center">
                            <li class="<?= ($sub_title == 'Informasi Utama' OR $sub_title == 'Jurusan' OR $sub_title == 'Unggah Berkas') ? 'active' : '' ?>" id="account"><strong>Biodata</strong></li>
                            <li class="<?= ($sub_title == 'Jurusan' OR $sub_title == 'Unggah Berkas') ? 'active' : '' ?>" id="personal"><strong>Jurusan</strong></li>
                            <li class="<?= $sub_title == 'Unggah Berkas' ? 'active' : '' ?>" id="payment"><strong>Berkas</strong></li>
                        </div>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $sub_title == 'Informasi Utama' ? '25' : ($sub_title == 'Jurusan' ? '75' : '100') ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $sub_title == 'Informasi Utama' ? '25%' : ($sub_title == 'Jurusan' ? '75%' : '100%') ?>"></div>
                    </div>
                </div>
                <div class="col">
                    <?= $this->renderSection('registration'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>