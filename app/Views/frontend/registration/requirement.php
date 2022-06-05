<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col">
                    <h3 class="mb-30 text-center">Syarat Pendaftaran</h3>
                    <p class="text-center">Berikut ini adalah syarat-syarat yang harus dipenuhi untuk mendaftar sebagai Siswa baru di SMKS Widya Nusantara</p>

                    <ol class="custom-list mt-3">
                        <?php foreach($reqs as $r) { ?>
                            <li><?= $r->name ?></li>
                        <?php } ?>
                    </ol>

                    <p class="mt-3 text-danger">Catatan: Syarat Pendaftaran bisa berubah kapan saja tanpa pemberitahuan terlebih dahulu. Harap dicek secara berkala.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>