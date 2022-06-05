<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tentang Situs</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-globe"></i> Tentang Situs</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/dashboard/about_site') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="<?= $about->id ?>">

                        <div class="form-group">
                            <label for="about">Tentang</label>
                            <textarea name="about" rows="3" class="form-control <?= ($validation->hasError('about')) ? 'is-invalid' : '' ?>" placeholder="Tentang" style="height:auto"><?= old('about') ? old('about') : $about->about ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('about') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>