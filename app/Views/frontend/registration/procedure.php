<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col">
                    <h3 class="mb-30 text-center">Prosedur Pendaftaran</h3>
                    <p class="text-center">Berikut ini adalah prosedur dalam mengikuti pendaftaran Siswa baru di SMKS Widya Nusantara</p>

                    <ol class="custom-list-2 mt-3">
                        <?php foreach($procedures as $p) { ?>
                            <li><?= $p->procedure ?></li>
                        <?php } ?>
                    </ol>

                    <p class="mt-3 text-danger">Catatan: Prosedur Pendaftaran bisa berubah kapan saja tanpa pemberitahuan terlebih dahulu. Harap dicek secara berkala.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>