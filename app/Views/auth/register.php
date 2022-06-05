<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h3 class="mb-30 text-center">Register</h3>
                    <p>Jika Anda memiliki akun, login dengan kredensial Anda <a href="<?= base_url('login') ?>">di sini</a>.</p>
                    
                    <?php if($year) { ?>
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    
                    <form action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="year_id" value="<?= $year->id ?>">

                        <div class="mt-10">
                            <input type="text" name="username" class="single-input <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="Username" value="<?= old('username') ?>">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="fullname" class="single-input <?php if(session('errors.fullname')) : ?>is-invalid<?php endif ?>" placeholder="Nama Lengkap" value="<?= old('fullname') ?>">
                            <input type="hidden" name="slug">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="email" class="single-input <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="Alamat Email" value="<?= old('email') ?>">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="phone" class="single-input <?php if(session('errors.phone')) : ?>is-invalid<?php endif ?>" placeholder="Nomor HP" value="<?= old('phone') ?>">
                        </div>
                        <div class="mt-10">
                            <input type="password" name="password" class="single-input <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Kata Sandi">
                        </div>
                        <div class="mt-10">
                            <input type="password" name="pass_confirm" class="single-input <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Ulangi Kata Sandi">
                        </div>
                        <div class="mt-10 pull-right">
                            <button type="submit" class="genric-btn primary">Submit</button>
                        </div>
                    </form>
                    <?php } else { ?>
                    <div class="alert alert-danger">
                        Mohon maaf, registrasi sudah ditutup.
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>