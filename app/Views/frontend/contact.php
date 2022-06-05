<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col">
                    <h3 class="mb-30 text-center">Kontak Kami</h3>
                    <p class="text-center">Butuh bantuan? Hubungi kami melalui kontak di bawah ini.</p>

                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <i class="ti-map-alt" style="font-size:40pt;"></i>
                            </div>
                            <h1 class="text-center">Alamat Sekolah</h1>
                            <p class="text-center mt-3"><?= $contact->address ?></p>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <i class="ti-location-arrow" style="font-size:40pt;"></i>
                            </div>
                            <h1 class="text-center">Telepon</h1>
                            <p class="text-center mt-3"><?= $contact->phone ?></p>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <i class="ti-envelope" style="font-size:40pt;"></i>
                            </div>
                            <h1 class="text-center">Alamat Email</h1>
                            <p class="text-center mt-3"><a href="<?= 'mailto:'.$contact->email ?>" class="color-default"><?= $contact->email ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>