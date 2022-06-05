<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>
<section class="hero">
    <div class="wrapper">
        <h1 class="beta uppercase montserrat regular line-after-heading">
            Selamat Datang Di Website
        </h1>
        <p class="delta cardo regular italic">
            SMKS WIDYA NUSANTARA
        </p>
    </div>
</section>

<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>Jurusan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($majors as $m) { ?>
            <div class="col-sm-6 col-lg-4">
                <div class="single_special_cource">
                    <img src="<?= base_url('assets/img/majors/'.$m->image) ?>" alt="Jurusan <?= $m->name ?>" class="special_img">
                    <div class="special_cource_text">
                        <a href="<?= base_url('major/'.$m->slug) ?>"><h3><?= $m->name ?></h3></a>
                        <p><?= htmlentities(strip_tags(substr($m->description,0,200)."...")) ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="special_cource section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>Daftar Kepengurusan Guru</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($teachers as $t) { ?>
                <div class="col-sm-6 col-lg-4">
                    <img src="<?= base_url('assets/img/teachers/'.$t->image) ?>" alt="Foto Guru" class="img-fluid">
                        <div class="w-100 d-flex justify-content-center">
                        <div class="card card-team">
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
            <div class="col-12 mt-5">
                <div class="d-flex justify-content-center">
                    <a href="<?= base_url('profile/teachers') ?>" class="genric-btn primary btn-see">Lihat Seluruh Daftar Guru</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="special_cource section_padding bg-warning">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center pb-0">
                    <h2 class="text-white">Pendaftaran Siswa Baru</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4 class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque adipisci a commodi minima sit, iusto tempora rerum veniam esse aspernatur deserunt. Quas, vel! Iusto, voluptate et eligendi libero ex esse.</h4>
                <div class="d-flex justify-content-center">
                    <a href="<?= base_url('register') ?>" class="genric-btn primary btn-see mt-4">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="special_cource section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>Butuh Bantuan?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <a href="#" class="genric-btn primary btn-see mt-4">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>